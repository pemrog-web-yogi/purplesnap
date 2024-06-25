<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Halaman Dashboard') }}</title>

    {{-- bootstrap --}}
    <link href="{{ asset('import/asset/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- main css --}}
    <!--? Change if need it!-->
    <link rel="stylesheet" href="{{ asset('import/asset/css/details.css') }}" />
    <link rel="stylesheet" href="{{ asset('import/asset/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('import/asset/css/profile.css') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- live wire -->
    @stack('css')

    <!-- post -->
    <!-- <link rel="stylesheet" href="{{ asset('import/asset/css/post.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/asset/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('import/asset/js/trix.umd.min.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none !important;
        }
    </style> -->

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>

    <div class="min-h-screen ">
        @if (session('success'))
        <div class="p-3 bg-success text-white">
            <div class="container">
                {{ session('success') }}
            </div>
        </div>
        @endif
        @if (session('danger'))
        <div class="p-3 bg-success text-white">
            <div class="container">
                {{ session('danger') }}
            </div>
        </div>
        @endif
        @include('layouts.navbar')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="container">
                {{ $header }}
            </div>
        </header>
        @endif

        @include('layouts.navbar-side')
        <!-- Page Content -->
        <main>
            @if(session('success'))
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
                <div class="alert alert-success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
            @endif

        </main>
    </div>
    {{-- <script src="{{ asset('import/asset/js/bootstrap.bundle.js') }}">
    </script> --}}
    <script src="{{ asset('import/asset/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="js/main.js"></script> -->
    @stack('js')
</body>

</html>