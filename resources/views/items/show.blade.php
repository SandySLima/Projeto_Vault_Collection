<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Detalhes do Item
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-5xl">

                <div class="mb-4 flex justify-end gap-3">

                    <a href="{{ route('items.edit', $item->id) }}"
                        class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                        Editar Item
                    </a>

                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    @if($item->image)

                        <img
                            src="{{ asset('storage/' . $item->image) }}"
                            alt="{{ $item->name }}"
                            class="w-72 h-72 object-cover rounded-xl border shadow mb-6">

                    @else

                        <div class="w-72 h-72 rounded-xl border bg-gray-100 flex items-center justify-center text-gray-400 mb-6">
                            Sem imagem
                        </div>

                    @endif

                    <h2 class="text-2xl font-bold">
                        {{ $item->name }}
                    </h2>
                    
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">
                        {{ $item->name }}
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>

                            <h4 class="text-lg font-semibold text-gray-800 mb-4">
                                Informações Básicas
                            </h4>

                            <div class="space-y-3">

                                <p>
                                    <span class="font-medium">Categoria:</span>
                                    {{ $item->category->name }}
                                </p>

                                <p>
                                    <span class="font-medium">Franquia:</span>
                                    {{ $item->franchise?->name ?? '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Quantidade:</span>
                                    {{ $item->quantity }}
                                </p>

                                <p>
                                    <span class="font-medium">Status:</span>

                                    @if($item->status == 'owned')
                                        <span class="text-green-700">Na coleção</span>
                                    @else
                                        <span class="text-yellow-700">Wishlist</span>
                                    @endif

                                </p>

                                <p>
                                    <span class="font-medium">Favorito:</span>

                                    @if($item->is_favorite)
                                        ★ Sim
                                    @else
                                        Não
                                    @endif

                                </p>

                            </div>

                        </div>

                        <div>

                            <h4 class="text-lg font-semibold text-gray-800 mb-4">
                                Detalhes do Item
                            </h4>

                            <div class="space-y-3">

                                <p>
                                    <span class="font-medium">Fabricante / Editora:</span>
                                    {{ $item->manufacturer ?: '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Série:</span>
                                    {{ $item->series ?: '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Personagem:</span>
                                    {{ $item->character ?: '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Edição:</span>
                                    {{ $item->edition ?: '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Estado:</span>
                                    {{ $item->condition ?: '-' }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <hr class="my-8">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>

                            <h4 class="text-lg font-semibold text-gray-800 mb-4">
                                Compra e Valores
                            </h4>

                            <div class="space-y-3">

                                <p>
                                    <span class="font-medium">Data da Compra:</span>

                                    {{ $item->purchase_date
                                        ? \Carbon\Carbon::parse($item->purchase_date)->format('d/m/Y')
                                        : '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Valor Pago:</span>

                                    {{ $item->purchase_price
                                        ? 'R$ ' . number_format($item->purchase_price, 2, ',', '.')
                                        : '-' }}
                                </p>

                                <p>
                                    <span class="font-medium">Valor Estimado:</span>

                                    {{ $item->estimated_price
                                        ? 'R$ ' . number_format($item->estimated_price, 2, ',', '.')
                                        : '-' }}
                                </p>

                            </div>

                        </div>

                        <div>

                            <h4 class="text-lg font-semibold text-gray-800 mb-4">
                                Armazenamento
                            </h4>

                            <div class="space-y-3">

                                <p>
                                    <span class="font-medium">Local:</span>
                                    {{ $item->storage_location ?: '-' }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <hr class="my-8">

                    <div>

                        <h4 class="text-lg font-semibold text-gray-800 mb-4">
                            Observações
                        </h4>

                        <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 min-h-24">

                            @if($item->notes)

                                {{ $item->notes }}

                            @else

                                <span class="text-gray-500">
                                    Nenhuma observação cadastrada.
                                </span>

                            @endif

                        </div>

                    </div>

                    <hr class="my-8">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>

                            <p class="text-sm text-gray-500">
                                <span class="font-medium">Criado em:</span>

                                {{ $item->created_at->format('d/m/Y H:i') }}
                            </p>

                        </div>

                        <div class="text-left md:text-right">

                            <p class="text-sm text-gray-500">
                                <span class="font-medium">Última atualização:</span>

                                {{ $item->updated_at->format('d/m/Y H:i') }}
                            </p>

                        </div>

                    </div>

                </div>

                <div class="mt-6 flex justify-between">

                    <a href="{{ route('items.index') }}"
                       class="text-indigo-600 hover:text-indigo-800">
                        ← Voltar para a coleção
                    </a>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>