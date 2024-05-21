<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-base-200">
        @auth
            <div class="drawer lg:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle">
                <div class="flex flex-col drawer-content h-screen">
                    @livewire('partial.navbar')
                    <div class="flex-1 overflow-auto scrollbar-hide" id="chatContainer">
                        {{ $slot }}
                    </div>
                    @livewire('partial.chat')
                </div>
                @livewire('newchat')
                <div class="drawer-side scrollbar-hide border-r-2 border-base-300">
                    <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
            </div>
        @endauth

        @guest
            <div class="flex flex-col items-center justify-center min-h-screen">
                {{ $slot }}
            </div>
        @endguest
    </body>

</html>
