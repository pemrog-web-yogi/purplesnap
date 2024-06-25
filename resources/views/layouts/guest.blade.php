<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('import/asset/css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('import/asset/css/registrasi.css') }}">
        <link href="{{ asset('import/asset/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@300;400;600&display=swap');
        </style>
        <title>{{ config('Halaman', 'app.name') }}</title>


        <!-- Scripts -->
    </head>
    
                {{ $slot }}
</html>
<script src="{{ asset('import/asset/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('import/asset/js/main.js') }}"></script>
