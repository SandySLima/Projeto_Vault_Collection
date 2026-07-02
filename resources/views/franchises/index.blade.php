<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Franquias
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-start mb-6">
                <a href="{{ route('franchises.create') }}"
                   class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-gray-700">
                    Nova Franquia
                </a>
            </div>

            <div class="flex justify-center">

                <div class="w-full max-w-5xl bg-white shadow rounded-lg overflow-hidden">

                    <div class="p-6">

                        <table class="w-full">

                            <thead class="border-b border-gray-200">
                                <tr>
                                    <th class="py-3 pl-2 text-left text-sm font-semibold text-gray-600">
                                        Nome
                                    </th>

                                    <th class="py-3 pr-2 text-right text-sm font-semibold text-gray-600">
                                        Ações
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-100">

                                @foreach($franchises as $franchise)
                                    <tr class="hover:bg-gray-50">

                                        <td class="py-4 pl-2 text-gray-900">
                                            {{ $franchise->name }}
                                        </td>

                                        <td class="py-4 pr-2 text-right">

                                            <a href="{{ route('franchises.edit', $franchise->id) }}"
                                               class="text-indigo-600 hover:text-indigo-900 mr-4">
                                                Editar
                                            </a>

                                            <form class="inline"
                                                  method="POST"
                                                  action="{{ route('franchises.destroy', $franchise->id) }}"
                                                  onsubmit="return confirm('Tem certeza que deseja excluir esta franquia?')">

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

            <div class="mt-6 flex justify-start">
                {{ $franchises->links() }}
            </div>

        </div>
    </div>
</x-app-layout>

