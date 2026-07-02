<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Categorias
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- 3) botão alinhado à direita -->
            <div class="flex justify-start mb-6">
                <a href="{{ route('categories.create') }}"
                   class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-gray-700">
                    Nova Categoria
                </a>
            </div>

            <div class="flex justify-center">

                <div class="w-full max-w-5xl bg-white shadow rounded-lg overflow-hidden">

                    <div class="p-6">

                        <table class="w-full">

                            <thead class="border-b border-gray-200">
                                <tr>

                                    <!-- 4) alinhamento melhor dos títulos -->
                                    <th class="py-3 pl-2 text-left text-sm font-semibold text-gray-600">
                                        Nome
                                    </th>

                                    <th class="py-3 pl-2 text-left text-sm font-semibold text-gray-600">
                                        Slug
                                    </th>

                                    <th class="py-3 pr-2 text-right text-sm font-semibold text-gray-600">
                                        Ações
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-100">

                                @foreach($categories as $category)
                                    <tr class="hover:bg-gray-50">

                                        <td class="py-4 pl-2 text-gray-900">
                                            {{ $category->name }}
                                        </td>

                                        <td class="py-4 pl-2 text-gray-500">
                                            {{ $category->slug }}
                                        </td>

                                        <td class="py-4 pr-2 text-right">

                                            <a href="{{ route('categories.edit', $category->id) }}"
                                               class="text-indigo-600 hover:text-indigo-900 mr-4">
                                                Editar
                                            </a>

                                            <form class="inline"
                                                  method="POST"
                                                  action="{{ route('categories.destroy', $category->id) }}"
                                                  onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?')">

                                                @csrf
                                                @method('DELETE')

                                                <button class="text-red-600 hover:text-red-800">
                                                    Excluir
                                                </button>

                                            </form>

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- 1) showing results à esquerda -->
            <div class="mt-6 flex justify-end">
                {{ $categories->links() }}
            </div>

        </div>
    </div>
</x-app-layout>