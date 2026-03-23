<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
    <body class="font-sans antialiased relative">

        <x-navbar />

        <main>
            @yield('content')
        </main>

        <x-footer />
        @vite('resources/js/app.js')
        @stack('scripts')

        {{-- WhatsApp button --}}
        <a href="https://wa.me/5215552188640?text=Hola,%20quisiera%20una%20cotización." target="_blank" class="cursor-pointer fixed right-2 bottom-2 flex items-center bg-green-600 p-3 rounded-full transition-all duration-300 group">
            <img src="{{ asset('img/WhatsApp.svg') }}" alt="Logo de WhatsApp" class="w-8 md:w-12 h-auto shrink-0">
            <span class="overflow-hidden max-w-0 group-hover:max-w-xs transition-all duration-300 ease-in-out text-white text-sm font-medium whitespace-nowrap">
                <span class="pl-3 pr-2">Escríbenos, con gusto te atenderemos.</span>
            </span>
        </a>
    </body>
</html>