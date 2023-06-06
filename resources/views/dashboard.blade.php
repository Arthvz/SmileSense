

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <p>Olá {{ __(Auth::user()->name) }}</p>
                   <br>
                        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Procedimentos</h1>
                        <br>
                        
                   <p>{{ __(Auth::user()->proced) }}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

