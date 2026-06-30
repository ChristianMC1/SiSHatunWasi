<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body class="font-sans antialiased min-h-screen bg-[#111111] text-[#F5F5F5] dark">
        <div class="flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium group" wire:navigate>
                    <span class="flex h-12 w-12 mb-2 items-center justify-center rounded-full bg-premium/10 border border-premium/30 group-hover:bg-premium/20 transition-all duration-300">
                        <span class="font-serif font-bold text-sm text-premium">HW</span>
                    </span>
                    <span class="font-serif text-xl font-bold text-white tracking-tight">HATUN <span class="text-premium">WASI</span></span>
                </a>
                <div class="flex flex-col gap-6 mt-4 bg-[#202020] rounded-2xl border border-white/5 p-8 shadow-sm">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
