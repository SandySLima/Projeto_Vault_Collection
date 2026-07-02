<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Editar Categoria
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">

                <div class="mb-4">
                    <a href="{{ route('categories.index') }}"
                       class="text-sm text-indigo-600 hover:text-indigo-800">
                        ← Voltar
                    </a>
                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    <form method="POST" action="{{ route('categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Nome
                            </label>

                            <input type="text"
                                   name="name"
                                   value="{{ $category->name }}"
                                   class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Slug
                            </label>

                            <input type="text"
                                   name="slug"
                                   value="{{ $category->slug }}"
                                   class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Descrição
                            </label>

                            <textarea name="description"
                                      class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">{{ $category->description }}</textarea>
                        </div>

                        <div class="flex justify-end">
                            <button class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow hover:bg-indigo-700 transition">
                                Atualizar
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>