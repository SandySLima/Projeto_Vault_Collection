<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Editar Item
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">

                <div class="mb-4">
                    <a href="{{ route('items.index') }}"
                       class="text-sm text-indigo-600 hover:text-indigo-800">
                        ← Voltar
                    </a>
                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    <form method="POST" 
                    action="{{ route('items.update', $item->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Informações Básicas
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Nome
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name', $item->name) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                                @error('name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Categoria
                                </label>

                                <select
                                    name="category_id"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                                    <option value="">Selecione</option>

                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}"
                                            @selected(old('category_id', $item->category_id) == $category->id)>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach

                                </select>

                                @error('category_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Franquia
                                </label>

                                <select
                                    name="franchise_id"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                                    <option value="">Nenhuma</option>

                                    @foreach($franchises as $franchise)
                                        <option
                                            value="{{ $franchise->id }}"
                                            @selected(old('franchise_id', $item->franchise_id) == $franchise->id)>
                                            {{ $franchise->name }}
                                        </option>
                                    @endforeach

                                </select>

                                @error('franchise_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Quantidade
                                </label>

                                <input
                                    type="number"
                                    name="quantity"
                                    min="1"
                                    value="{{ old('quantity', $item->quantity) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                                @error('quantity')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">
                                    Status
                                </label>

                                <select
                                    name="status"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                                    <option
                                        value="owned"
                                        @selected(old('status', $item->status) == 'owned')>
                                        Na coleção
                                    </option>

                                    <option
                                        value="wishlist"
                                        @selected(old('status', $item->status) == 'wishlist')>
                                        Wishlist
                                    </option>

                                </select>

                                @error('status')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <hr class="my-6">

                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Detalhes do Item
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Fabricante / Editora
                                </label>

                                <input
                                    type="text"
                                    name="manufacturer"
                                    value="{{ old('manufacturer', $item->manufacturer) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Série
                                </label>

                                <input
                                    type="text"
                                    name="series"
                                    value="{{ old('series', $item->series) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Personagem
                                </label>

                                <input
                                    type="text"
                                    name="character"
                                    value="{{ old('character', $item->character) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Edição
                                </label>

                                <input
                                    type="text"
                                    name="edition"
                                    value="{{ old('edition', $item->edition) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700">
                                Imagem do item
                            </label>

                            @if($item->image)
                                <div class="mb-4">
                                    <img
                                        src="{{ asset('storage/'.$item->image) }}"
                                        alt="{{ $item->name }}"
                                        class="h-44 w-auto rounded-lg border shadow-sm object-cover">
                                </div>
                            @endif

                            <input
                                type="file"
                                name="image"
                                accept=".jpg,.jpeg,.png,.webp,image/*"
                                class="mt-1 block w-full text-sm
                                    file:mr-4
                                    file:py-2
                                    file:px-4
                                    file:rounded-md
                                    file:border-0
                                    file:bg-indigo-600
                                    file:text-white
                                    hover:file:bg-indigo-700">

                            <p class="mt-2 text-xs text-gray-500">
                                JPG, PNG ou WEBP (máximo 4 MB).
                            </p>

                            @error('image')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <hr class="my-6">

                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Compra e Valores
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Data da Compra
                                </label>

                                <input
                                    type="date"
                                    name="purchase_date"
                                    value="{{ old('purchase_date', $item->purchase_date) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Valor Pago
                                </label>

                                <input
                                    type="number"
                                    step="0.01"
                                    name="purchase_price"
                                    value="{{ old('purchase_price', $item->purchase_price) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Valor Estimado
                                </label>

                                <input
                                    type="number"
                                    step="0.01"
                                    name="estimated_price"
                                    value="{{ old('estimated_price', $item->estimated_price) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                        </div>

                        <hr class="my-6">

                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Conservação
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Estado de Conservação
                                </label>

                                <select
                                    name="condition"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                                    <option value="">Selecione</option>

                                    <option value="Mint" @selected(old('condition', $item->condition) == 'Mint')>Mint (Impecável)</option>
                                    <option value="Near Mint" @selected(old('condition', $item->condition) == 'Near Mint')>Near Mint (Quase perfeito)</option>
                                    <option value="Good" @selected(old('condition', $item->condition) == 'Good')>Good (Bom)</option>
                                    <option value="Fair" @selected(old('condition', $item->condition) == 'Fair')>Fair (Regular)</option>
                                    <option value="Poor" @selected(old('condition', $item->condition) == 'Poor')>Poor (Ruim)</option>

                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Local de Armazenamento
                                </label>

                                <input
                                    type="text"
                                    name="storage_location"
                                    value="{{ old('storage_location', $item->storage_location) }}"
                                    class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                        </div>

                        <hr class="my-6">

                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Informações Adicionais
                        </h3>

                        <div class="mb-4">

                            <label class="inline-flex items-center">

                                <input
                                    type="checkbox"
                                    name="is_favorite"
                                    value="1"
                                    class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                    @checked(old('is_favorite', $item->is_favorite))>

                                <span class="ml-2 text-gray-700">
                                    Marcar como favorito
                                </span>

                            </label>

                        </div>

                        <div class="mb-6">

                            <label class="block text-sm font-medium text-gray-700">
                                Observações
                            </label>

                            <textarea
                                name="notes"
                                rows="5"
                                class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">{{ old('notes', $item->notes) }}</textarea>

                        </div>

                        <div class="flex justify-end gap-3">

                            <a href="{{ route('items.index') }}"
                               class="px-5 py-2 bg-gray-200 text-gray-800 font-medium rounded-md shadow hover:bg-gray-300 transition">
                                Cancelar
                            </a>

                            <button
                                type="submit"
                                class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                                Atualizar
                            </button>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>