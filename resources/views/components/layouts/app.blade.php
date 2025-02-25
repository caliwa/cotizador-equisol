<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" href="{{ asset('/img/doblamosicon.ico') }}"> --}}

    <title>{{ config('app.name', 'Equisol') }}</title>
{{-- <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" /> --}}
    @livewireStyles
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-white">
	<main>

        @if(!Route::is('login'))
        <div  id="main-wrapper" class=" flex">
        @endif

            @if(!Route::is('login'))
                <livewire:layouts.sidebar-component wire:key="sidebar-1"/>
            @endif

            @if(!Route::is('login'))
            <div class="w-full page-wrapper overflow-hidden">
            @endif
                @if(!Route::is('login'))
                <livewire:layouts.navbar-dashboard-component wire:key="nav-1"/>
                @endif
                <main class="h-full overflow-y-auto max-w-full pt-4 px-4">
                    {{ $slot }}
                </main>
                @if(!Route::is('login'))
                {{-- @include('layouts.footer') --}}
                @endif
            @if(!Route::is('login'))
            </div>
            @endif
        @if(!Route::is('login'))
        </div>
        @endif
	</main>

    <x-toaster-hub/>
    @livewireScripts
</body>
</html>