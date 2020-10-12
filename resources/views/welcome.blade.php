<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Pack</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<div class="flex flex-col h-screen justify-center">
    <div class="flex justify-center">
        <img height="222" width="600" src="/images/logo.jpg" alt="new_pack_logo">
    </div>

    <div class="flex justify-center text-lg dark:text-white underline">
        @if (Route::has('login'))
            @auth
                <a class = "mb-10" href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4">Register</a>
                @endif
            @endif
        @endif
    </div>
</div>
</body>
</html>
