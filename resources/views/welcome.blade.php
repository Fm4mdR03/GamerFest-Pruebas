<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">

</head>


@component('vistas.nav')@endcomponent

<body class="antialiased bg-gray-800">


    <!-- BIENVENIDA -->
    <div class="flex items-center justify-center h-full bg-gray-800 text-white">
        <div class="p-56 text-center w-9/12">
            <h1 class="text-5xl font-bold mb-4">Bienvenido al mejor evento de videojuegos del Ecuador</h1>
            <p class="text-2xl mb-6 ">
                Sumérgete en la emoción digital: Bienvenido al epicentro gamer, el mejor evento de videojuegos del
                Ecuador!
            </p>
            <button class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-1/5">VER
                MÁS</button>
            <button
                class=" hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-2 w-1/5 border-solid border-4 border-gray-600">INGRESAR</button>
        </div>
    </div>

<hr>
    <!-- JUEGOS -->
    <div class="flex flex-row pt-8 h-screen m-4 text-white items-center justify-center h-full ">

        <div class="hover:scale-110 mr-4 ">
            <img src="https://i.pinimg.com/550x/8c/e8/ab/8ce8aba0edcb78be32945243a3d9b4e6.jpg" alt="Fifa 23" class="w-56 h-64 ">
            <p class="text-center">
                <b>FORTNITE</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
            Fortnite es un juego de Battle Royale que combina construcción y disparos. 
            </p>
        </div>

        <div class="hover:scale-110  mr-4">
            <img src="https://sm.ign.com/ign_es/screenshot/default/image003_ksqr.png" alt="Fifa 23"  class="w-56 h-64">
            <p class="text-center">
                <b>FIFA 23</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                FIFA 23 es un juego de simulación de fútbol que recrea la experiencia del deporte en un
                entorno virtual. 
            </p>
        </div>

        <div class="hover:scale-110 mr-4">
            <img src="https://theme.zdassets.com/theme_assets/43400/87a1ef48e43b8cf114017e3ad51b801951b20fcf.jpg"
                alt="LOL"  class="w-56 h-64">
            <p class="text-center">
                <b>LEAGUE OF LEGENDS</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                League of Legends es un MOBA en el que dos equipos compiten para destruir la base del otro.

            </p>
        </div>

        <div class="hover:scale-110  mr-4">
            <img src="https://assetsio.reedpopcdn.com/co1mb7.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp"
                alt="Clash Royal"  class="w-56 h-64">
            <p class="text-center">
                <b>CLASH ROYALE</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                Clash Royale combina elementos de juegos de cartas coleccionables, defensa de torres y
                estrategia en tiempo real. 
            </p>
        </div>
        <div class="hover:scale-110 mr-4">
            <img src="https://cdn1.epicgames.com/offer/cbd5b3d310a54b12bf3fe8c41994174f/EGS_VALORANT_RiotGames_S2_1200x1600-9ebf575033287e2177106da5ff45c1d4"
                alt="Valorant"  class="w-56 h-64">
            <p class="text-center">
                <b>VALORANT</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                Valorant es un juego de disparos táctico donde dos equipos compiten para completar
                objetivos. 
            </p>
        </div>

        <div class="hover:scale-110 mr-4">
            <img src="https://cdn1.epicgames.com/offer/cbd5b3d310a54b12bf3fe8c41994174f/EGS_VALORANT_RiotGames_S2_1200x1600-9ebf575033287e2177106da5ff45c1d4"
                alt="Valorant"  class="w-56 h-64">
            <p class="text-center">
                <b>VALORANT</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                Valorant es un juego de disparos táctico donde dos equipos compiten para completar
                objetivos. 
            </p>
        </div>
        <div class="hover:scale-110  mr-4">
            <img src="https://cdn1.epicgames.com/offer/cbd5b3d310a54b12bf3fe8c41994174f/EGS_VALORANT_RiotGames_S2_1200x1600-9ebf575033287e2177106da5ff45c1d4"
                alt="Valorant"  class="w-56 h-64">
            <p class="text-center">
                <b>VALORANT</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                Valorant es un juego de disparos táctico donde dos equipos compiten para completar
                objetivos.
            </p>
        </div>

        <div class="hover:scale-110  mr-4">
            <img src="https://cdn1.epicgames.com/offer/cbd5b3d310a54b12bf3fe8c41994174f/EGS_VALORANT_RiotGames_S2_1200x1600-9ebf575033287e2177106da5ff45c1d4"
                alt="Valorant"  class="w-56 h-64">
            <p class="text-center">
                <b>VALORANT</b>
            </p>
            <p class="opacity-0 hover:opacity-100 text-center text-sm">
                Valorant es un juego de disparos táctico donde dos equipos compiten para completar
                objetivos.
            </p>
        </div>

    </div>

    <hr>
    <!-- INSCRIPCIÓN -->
    <div class="text-center bg-gray-800 text-white p-8 mt-8">
        <h2 class="text-2xl font-bold mb-4">Inscríbete ahora</h2>
        <p class="text-lg mb-6">Quedan 5 días, 8 horas y 11 segundos.</p>
        <button class="border-solid border-4 border-gray-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">INGRESAR</button>
    </div>

</body>

</html>