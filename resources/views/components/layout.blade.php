<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Charger le fichier CSS généré par Vite -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ 'Jean Michel' }} @yield('title')</title>
</head>

<body>
    <!-- Header -->
    {{-- <header class="bg-indigo-600">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                <div class="flex items-center">
                    <a href="#">
                        <span class="sr-only">mO'vie</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </a>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <a href="#" target="_blank"
                            class="text-base font-medium text-white hover:text-indigo-50">Documentation API</a>
                    </div>
                </div>
                <div class="ml-10 space-x-4">
                    <a href="#"
                        class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Connexion</a>
                    <a href="#"
                        class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Inscription</a>
                </div>
            </div>
            <div class="py-4 flex flex-col items-center text-center lg:hidden">
                <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Documentation API</a>
            </div>
        </nav>
    </header> --}}

    {{-- Section Conntent --}}
    @yield('content')
    {{-- End Section Conntent --}}

</body>

</html>