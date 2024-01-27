<header class="absolute w-full h-full text-gray-400 bg-transparent body-font md:h-0">
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
        <a>
            <img class="size-28" src="{{ asset('img/logoGamerFest.png') }}" alt="GamerFest">
        </a>
        <nav
            class="flex flex-wrap items-center justify-center text-base md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700">
            <a class="mr-5 font-bold hover:text-purple-600 hover:underline" href="#juegos">Juegos</a>
            <a class="mr-5 font-bold hover:text-purple-600 hover:underline" href="#sobrenosotros">Sobre Nosotros</a>
        </nav>
        <a href="{{ route('login') }}">
            <button
                class="block w-1/2 px-4 py-2 mx-1 my-2 text-lg font-medium leading-5 text-center text-white transition-all duration-300 bg-purple-800 border-2 border-transparent rounded-full hover:bg-purple-600 hover:border-white focus:outline-none focus:ring focus:border-purple-300 md:mx-2 md:w-auto ">Ingresar
            </button>
        </a>
        <a href="{{ route('register') }}">
            <button
                class="block w-1/2 px-4 py-2 mx-1 my-2 text-lg font-medium leading-5 text-center text-white transition-all duration-300 bg-purple-800 border-2 border-transparent rounded-full hover:bg-purple-600 hover:border-white focus:outline-none focus:ring focus:border-purple-300 md:mx-0 md:w-auto">Registrarse</button>
        </a>
    </div>
</header>
