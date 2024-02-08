<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- font Awesome --}}
        {{-- <script src="https://kit.fontawesome.com/68cce17049.js" crossorigin="anonymous"></script> --}}
        <script src="https://kit.fontawesome.com/65a6553488.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- SweetAlert2 --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        @livewireStyles

        @stack('css')
    </head>
    <body class="font-sans antialiased sm:overflow-auto"
        :class="{ 'overflow-hidden': open }"
        x-data="{ open: false }">

        @include('layouts.includes.admin.nav')
       
        @include('layouts.includes.admin.aside')
        
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                
                {{ $slot }}

            </div>
        </div>

        <div x-show="open" style="display: none"
            x-on:click="open = false"
            class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-30 sm:hidden"></div>
  

        @stack('modals')

        @livewireScripts

        @if ( session('swal') )
            <script>
                // Swal.fire( {!! json_encode(session('swal')) !!} );
                Swal.fire( @json(session('swal')) );
            </script>
        @endif

        @stack('js')

    </body>
</html>
