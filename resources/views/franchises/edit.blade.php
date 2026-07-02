```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-900 leading-tight">
            Editar Franquia
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">

                <div class="mb-4">
                    <a href="{{ route('franchises.index') }}"
                       class="text-sm text-indigo-600 hover:text-indigo-800">
                        ← Voltar
                    </a>
                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    <form method="POST" action="{{ route('franchises.update', $franchise->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Nome
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $franchise->name) }}"
                                class="mt-1 block w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-md shadow transition-colors duration-200 hover:bg-indigo-700 hover:text-white">
                                Atualizar
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
```
