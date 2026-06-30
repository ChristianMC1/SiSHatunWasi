<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <style>
            [x-cloak] { display: none !important; }
            html { scroll-behavior: smooth; }
        </style>
    </head>
    <body class="font-sans antialiased bg-[#F7F5F1] text-[#1F1F1F]">
        {{ $slot }}

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
