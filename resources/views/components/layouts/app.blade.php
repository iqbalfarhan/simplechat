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
            <div class="drawer md:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle">
                {{ $slot }}
                <div class="drawer-side border-r-2 border-base-300">
                    <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
                @livewire('chat.create')
            </div>
        @endauth

        @guest
            <div class="flex flex-col items-center justify-center min-h-screen gap-6">
                <div class="text-3xl font-bold">{{ config('app.name') }}</div>
                {{ $slot }}
            </div>
        @endguest
    </body>

</html>
