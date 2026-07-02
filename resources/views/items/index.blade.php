<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Itens da Coleção
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-7xl">

                @if(session('success'))
                    <div class="mb-4 rounded-md bg-green-100 border border-green-300 px-4 py-3 text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

        <div class="mb-6 flex items-center justify-between gap-4">

                <a href="{{ route('items.create') }}"
                class="inline-flex px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                    Novo Item
                </a>

            <form
                action="{{ route('items.index') }}"
                method="GET"
                class="flex items-center gap-3 flex-1 max-w-lg">

                <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Pesquisar item..."
                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                <button
                    type="submit"
                    class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                    Pesquisar
                </button>

            </form>

        </div>

                <div class="bg-white shadow rounded-lg overflow-hidden">

                    <div class="px-6 py-4 text-sm text-gray-500">
                        Showing {{ $items->firstItem() ?? 0 }}
                        to {{ $items->lastItem() ?? 0 }}
                        of {{ $items->total() }} results
                    </div>

                    <table class="min-w-full">

                        <thead class="bg-gray-100 border-y">

                            <tr>

                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">
                                    Imagem
                                </th>

                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Nome
                                </th>

                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Categoria
                                </th>

                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">
                                    Franquia
                                </th>

                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">
                                    Quantidade
                                </th>

                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">
                                    Status
                                </th>

                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">
                                    Favorito
                                </th>

                                <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">
                                    Valor Pago
                                </th>

                                <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">
                                    Ações
                                </th>

                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-100">

                        @forelse($items as $item)

                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 text-center">

                                    @if($item->image)

                                        <img
                                            src="{{ asset('storage/' . $item->image) }}"
                                            alt="{{ $item->name }}"
                                            class="w-16 h-16 rounded-lg object-cover border mx-auto">

                                    @else

                                        <div class="w-16 h-16 rounded-lg border bg-gray-100 flex items-center justify-center mx-auto text-gray-400 text-xs">
                                            Sem imagem
                                        </div>

                                    @endif

                                </td>

                                <td class="px-6 py-4">
                                    {{ $item->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $item->category->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $item->franchise?->name ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    {{ $item->quantity }}
                                </td>

                                <td class="px-6 py-4 text-center">

                                    @if($item->status == 'owned')

                                        <span class="inline-flex px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Na coleção
                                        </span>

                                    @else

                                        <span class="inline-flex px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Wishlist
                                        </span>

                                    @endif

                                </td>

                                <td class="px-6 py-4 text-center">

                                    @if($item->is_favorite)

                                        <span class="text-yellow-500 text-lg">
                                            ★
                                        </span>

                                    @else

                                        <span class="text-gray-300 text-lg">
                                            ☆
                                        </span>

                                    @endif

                                </td>

                                <td class="px-6 py-4 text-right">

                                    @if($item->purchase_price)

                                        R$ {{ number_format($item->purchase_price, 2, ',', '.') }}

                                    @else

                                        —

                                    @endif

                                </td>
                                                                <td class="px-6 py-4 text-right whitespace-nowrap">

                                    <a href="{{ route('items.show', $item->id) }}"
                                       class="text-blue-600 hover:text-blue-800 mr-4">
                                        Visualizar
                                    </a>

                                    <a href="{{ route('items.edit', $item->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900 mr-4">
                                        Editar
                                    </a>

                                    <form
                                        action="{{ route('items.destroy', $item->id) }}"
                                        method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este item?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="text-red-600 hover:text-red-800">
                                            Excluir
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="9"
                                    class="px-6 py-8 text-center text-gray-500">

                                    Nenhum item cadastrado.

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                    <div class="px-6 py-4">
                        {{ $items->links() }}
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>