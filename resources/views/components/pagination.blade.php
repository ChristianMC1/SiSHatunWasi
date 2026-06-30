@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation">
        {{-- Mobile --}}
        <div class="flex items-center justify-between sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-[#5E5E5E]/30 bg-[#EFE9DF] rounded-xl cursor-not-allowed font-sans">
                    Anterior
                </span>
            @else
                <button wire:click="gotoPage({{ $paginator->currentPage() - 1 }})" rel="prev"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-premium bg-white border border-[#1F1F1F]/10 rounded-xl hover:border-premium/30 transition-all duration-300 font-sans cursor-pointer">
                    Anterior
                </button>
            @endif
            @if ($paginator->hasMorePages())
                <button wire:click="gotoPage({{ $paginator->currentPage() + 1 }})" rel="next"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-premium bg-white border border-[#1F1F1F]/10 rounded-xl hover:border-premium/30 transition-all duration-300 font-sans cursor-pointer">
                    Siguiente
                </button>
            @else
                <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-[#5E5E5E]/30 bg-[#EFE9DF] rounded-xl cursor-not-allowed font-sans">
                    Siguiente
                </span>
            @endif
        </div>

        {{-- Desktop --}}
        <div class="hidden sm:flex sm:items-center sm:justify-between gap-4">
            <div>
                <p class="text-sm text-[#5E5E5E] font-sans">
                    Mostrando
                    <span class="font-medium text-[#1F1F1F]">{{ $paginator->firstItem() }}</span>
                    a
                    <span class="font-medium text-[#1F1F1F]">{{ $paginator->lastItem() }}</span>
                    de
                    <span class="font-medium text-[#1F1F1F]">{{ $paginator->total() }}</span>
                    resultados
                </p>
            </div>

            <div class="flex items-center gap-1.5">
                {{-- Previous --}}
                @if ($paginator->onFirstPage())
                    <span class="w-9 h-9 rounded-xl flex items-center justify-center text-[#5E5E5E]/30 bg-[#EFE9DF] cursor-not-allowed">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </span>
                @else
                    <button wire:click="gotoPage({{ $paginator->currentPage() - 1 }})" rel="prev"
                            class="w-9 h-9 rounded-xl flex items-center justify-center text-[#5E5E5E] bg-white border border-[#1F1F1F]/10 hover:border-premium/30 hover:text-premium transition-all duration-300 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                @endif

                {{-- Pages --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="w-9 h-9 rounded-xl flex items-center justify-center text-[#5E5E5E]/30 text-sm bg-[#EFE9DF] cursor-default font-sans">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="w-9 h-9 rounded-xl flex items-center justify-center text-sm font-bold text-black bg-premium shadow-sm shadow-premium/20 cursor-default font-sans">{{ $page }}</span>
                            @else
                                <button wire:click="gotoPage({{ $page }})"
                                        class="w-9 h-9 rounded-xl flex items-center justify-center text-sm text-[#5E5E5E] bg-white border border-[#1F1F1F]/10 hover:border-premium/30 hover:text-premium transition-all duration-300 font-sans cursor-pointer">{{ $page }}</button>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="gotoPage({{ $paginator->currentPage() + 1 }})" rel="next"
                            class="w-9 h-9 rounded-xl flex items-center justify-center text-[#5E5E5E] bg-white border border-[#1F1F1F]/10 hover:border-premium/30 hover:text-premium transition-all duration-300 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                @else
                    <span class="w-9 h-9 rounded-xl flex items-center justify-center text-[#5E5E5E]/30 bg-[#EFE9DF] cursor-not-allowed">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
