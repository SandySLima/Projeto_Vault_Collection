<x-app-layout>
    

    <x-slot name="header">
        {{-- Topbar customizada substitui o header padrão do Breeze --}}
    </x-slot>

    {{-- =====================================================
         TOPBAR PRINCIPAL
         ===================================================== --}}
    <nav class="bg-indigo-950 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center h-14">

                {{-- Brand --}}
                <a href="{{ route('items.favorites') }}">
                <a href="{{ route('items.wishlist') }}">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-2 pr-5 border-r border-indigo-800 mr-2 shrink-0">
                    <div class="w-7 h-7 bg-indigo-500 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M20 7l-8-4-8 4m16 0v10a2 2 0 01-1.333 1.886L12 21l-6.667-2.114A2 2 0 014
                                     17V7m16 0L12 11 4 7"/>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-indigo-100 tracking-wide hidden sm:block">
                        Vault Collection
                    </span>
                </a>

                {{-- Links de navegação --}}
                <div class="flex items-stretch h-full flex-1 overflow-x-auto">

                    <a href="{{ route('dashboard') }}"
                       class="flex items-center gap-1.5 px-4 text-sm text-white bg-indigo-800/50
                              border-b-2 border-indigo-400 whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1
                                     1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1
                                     1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('categories.index') }}"
                       class="flex items-center gap-1.5 px-4 text-sm text-indigo-300
                              hover:text-white hover:bg-indigo-800/40 transition-colors whitespace-nowrap
                              border-b-2 border-transparent hover:border-indigo-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7
                                     7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Categorias
                    </a>

                    <a href="{{ route('franchises.index') }}"
                       class="flex items-center gap-1.5 px-4 text-sm text-indigo-300
                              hover:text-white hover:bg-indigo-800/40 transition-colors whitespace-nowrap
                              border-b-2 border-transparent hover:border-indigo-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915
                                     c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3
                                     .922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783
                                     .57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784
                                     -.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        Franquias
                    </a>

                    <a href="{{ route('items.index') }}"
                       class="flex items-center gap-1.5 px-4 text-sm text-indigo-300
                              hover:text-white hover:bg-indigo-800/40 transition-colors whitespace-nowrap
                              border-b-2 border-transparent hover:border-indigo-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M20 7l-8-4-8 4m16 0v10a2 2 0 01-1.333 1.886L12 21l-6.667-2.114A2 2 0
                                     014 17V7m16 0L12 11 4 7"/>
                        </svg>
                        Itens
                    </a>

                    <a href="{{ route('items.favorites') }}"
                       class="flex items-center gap-1.5 px-4 text-sm text-indigo-300
                              hover:text-white hover:bg-indigo-800/40 transition-colors whitespace-nowrap
                              border-b-2 border-transparent hover:border-indigo-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0
                                     00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        Favoritos
                    </a>

                    <a href="{{ route('items.wishlist') }}"
                       class="flex items-center gap-1.5 px-4 text-sm text-indigo-300
                              hover:text-white hover:bg-indigo-800/40 transition-colors whitespace-nowrap
                              border-b-2 border-transparent hover:border-indigo-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9
                                     5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Wishlist
                    </a>

                </div>

                {{-- Usuário --}}
                <div class="flex items-center gap-3 pl-4 border-l border-indigo-800 ml-2 shrink-0">
                    <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center
                                text-xs font-semibold text-white uppercase">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                    <span class="text-sm text-indigo-200 hidden md:block">
                        {{ auth()->user()->name }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="text-indigo-400 hover:text-white text-xs transition-colors">
                            Sair
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </nav>

    {{-- =====================================================
         CONTEÚDO PRINCIPAL
         ===================================================== --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 space-y-6">

            {{-- HERO --}}
            <div class="bg-indigo-950 rounded-xl p-8 flex flex-col sm:flex-row items-start
                        sm:items-center justify-between gap-6">
                <div>
                    <h1 class="text-2xl font-bold text-indigo-100">
                        Bem-vindo ao seu Vault 👾
                    </h1>
                    <p class="text-indigo-400 mt-2 text-sm max-w-lg">
                        Organize mangás, HQs, figures, Funko Pops, jogos e muito mais em um só lugar.
                    </p>
                    <a href="{{ route('items.create') }}"
                       class="inline-flex items-center gap-2 mt-5 px-5 py-2.5 bg-indigo-500
                              hover:bg-indigo-400 text-white text-sm font-semibold rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                        </svg>
                        Novo item
                    </a>
                </div>

                <div class="bg-indigo-900/60 border border-indigo-700 rounded-xl px-8 py-5
                            text-center shrink-0">
                    <p class="text-3xl font-bold text-indigo-100">{{ $totalItems }}</p>
                    <p class="text-xs text-indigo-400 mt-1">itens na coleção</p>
                </div>
            </div>

            {{-- STAT CARDS --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                <div class="bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
                    <div class="w-9 h-9 bg-indigo-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M20 7l-8-4-8 4m16 0v10a2 2 0 01-1.333 1.886L12 21l-6.667-2.114A2 2
                                     0 014 17V7m16 0L12 11 4 7"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-500">Total de itens</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalItems }}</p>
                </div>

                <div class="bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
                    <div class="w-9 h-9 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3
                                     2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11
                                     0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-500">Valor investido</p>
                    <p class="text-2xl font-bold text-gray-900">
                        R$ {{ number_format($totalInvested ?? 0, 2, ',', '.') }}
                    </p>
                </div>

                <div class="bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
                    <div class="w-9 h-9 bg-pink-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7
                                     7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-500">Categorias</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $categoriesCount }}</p>
                </div>

                <div class="bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
                    <div class="w-9 h-9 bg-amber-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0
                                     00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2
                                     2 0 012 2"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-500">Wishlist</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $wishlist }}</p>
                </div>

            </div>

            {{-- GRID INFERIOR --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- CATEGORIAS --}}
                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                    <h3 class="text-sm font-semibold text-gray-700 flex items-center gap-2 mb-4">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0
                                     002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2
                                     2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2
                                     2 0 01-2-2z"/>
                        </svg>
                        Por categoria
                    </h3>

                    @php
                        $dotColors = [
                            '#6366f1','#8b5cf6','#ec4899','#f59e0b',
                            '#10b981','#3b82f6','#ef4444','#14b8a6',
                        ];
                    @endphp

                    <ul class="space-y-0 divide-y divide-gray-50">
                        @forelse($categoryStats as $index => $cat)
                            <li class="flex items-center justify-between py-2.5">
                                <span class="flex items-center gap-2 text-sm text-gray-700">
                                    <span class="w-2 h-2 rounded-full shrink-0"
                                          style="background:{{ $dotColors[$index % count($dotColors)] }}">
                                    </span>
                                    {{ $cat->name }}
                                </span>
                                <span class="text-xs text-gray-500 bg-gray-100 px-2.5 py-0.5 rounded-full">
                                    {{ $cat->items_count }}
                                </span>
                            </li>
                        @empty
                            <li class="py-4 text-center text-sm text-gray-400">
                                Nenhuma categoria com itens.
                            </li>
                        @endforelse
                    </ul>
                </div>

                {{-- ÚLTIMOS ITENS --}}
                <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm lg:col-span-2">
                    <h3 class="text-sm font-semibold text-gray-700 flex items-center gap-2 mb-4">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Últimos adicionados
                    </h3>

                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-100">
                                <th class="text-left text-xs font-medium text-gray-400 pb-2 pr-4">Nome</th>
                                <th class="text-left text-xs font-medium text-gray-400 pb-2 pr-4">Categoria</th>
                                <th class="text-left text-xs font-medium text-gray-400 pb-2">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($latestItems as $item)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-3 pr-4">
                                        <a href="{{ route('items.show', $item) }}"
                                           class="font-medium text-gray-800 hover:text-indigo-600 transition-colors">
                                            {{ $item->name }}
                                        </a>
                                    </td>
                                    <td class="py-3 pr-4 text-gray-500 text-xs">
                                        {{ $item->category->name }}
                                    </td>
                                    <td class="py-3">
                                        @if($item->status === 'owned')
                                            <span class="inline-flex items-center gap-1 text-xs px-2.5 py-1
                                                         bg-green-50 text-green-700 rounded-full font-medium">
                                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                                Na coleção
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 text-xs px-2.5 py-1
                                                         bg-yellow-50 text-yellow-700 rounded-full font-medium">
                                                <span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span>
                                                Wishlist
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-8 text-center text-gray-400 text-sm">
                                        Nenhum item adicionado ainda.
                                        <a href="{{ route('items.create') }}"
                                           class="text-indigo-500 hover:underline ml-1">
                                            Adicionar primeiro item
                                        </a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>