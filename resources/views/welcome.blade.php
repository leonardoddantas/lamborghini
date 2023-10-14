<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <title>Lamborghini - Home Page</title>

         <!-- Tailwind Css -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Icons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    </head>
    <body class="antialiased">

        <div class="w-full h-screen">

            @if (Route::has('login'))

                <div class="p-4 top-0 bg-zinc-950">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">Dashboard</a>
                    @else
                        <div class="container mx-auto flex justify-between">

                            <div class="flex items-center space-x-5">

                                <img src="img/logo.webp" alt="">

                                <div class="flex items-center space-x-5">

                                    <a href="" class="hidden md:block md:text-xl md:text-gray-300 md:hover:underline md:focus:outline md:focus:outline-2 md:focus:rounded-sm">Models</a>
    
                                    <a href="" class="hidden md:block md:text-xl md:text-gray-300 md:hover:underline md:focus:outline md:focus:outline-2 md:focus:rounded-sm">Beyond</a>
    
                                    <a href="{{ route('login') }}" class="text-xl text-gray-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm">Login</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-xl text-gray-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm">Register</a>
                                    @endif

                                </div>

                            </div>

                            <div class="flex items-center space-x-5">

                                <a href="" class="mt-2 text-2xl text-gray-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm"><ion-icon name="albums-outline"></ion-icon></a>
    
                                <a href="" class="mt-2 text-2xl text-gray-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm"><ion-icon name="search-outline"></ion-icon></a>
    
                                <a href="" class="mt-2 text-2xl text-gray-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm"><ion-icon name="menu-outline"></ion-icon></a>

                            </div>

                        </div>
                    @endauth
                </div>

            @endif

            <div class="container mx-auto text-gray-100 font-bold">
                <div class="absolute top-60">
                    <h1 class="md:text-4xl text-3xl">DESIGNED BY NEW DESIRES</h1>
                    <h2 class="md:text-9xl text-6xl">LANBORGHINI LANZADOR</h2>
                    <div>
                        <span class="material-symbols-outlined text-8xl relative flex items-center font-thin">hexagon
                            <a href="" class="text-3xl absolute mx-8"><ion-icon name="chevron-forward-outline"></ion-icon></a>
                        </span>
                    </div>
                </div>
            </div>
        
            <video class="w-full h-full object-cover" autoplay loop muted>

                <source src="/img/lamborghini.mp4">

            </video>

        </div>

    </body> 
</html>
