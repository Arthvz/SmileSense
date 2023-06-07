<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Register', 'Registro') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">

        <!--styles -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    

    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cyan-900 dark:bg-gray-900">
            <div>
                <a href="/">
                    <img class="h-36 w-auto" src="/images/logo.png" class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                
                {{ $slot  }} 
                <a href="{{route('register')}}" class="text-l shadow-2xl shadow-neutral-600 font-bold leading-6 text-blueSS-300/80">Registrar-se<span aria-hidden="true">&rarr;</span></a>
            </div>
            
        </div>
        
    </body>
</html>
