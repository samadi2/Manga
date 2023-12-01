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
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/25575b7828.js" crossorigin="anonymous"></script>


        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="nav">
            <div>
                <a href=""><i class="fa-brands fa-facebook fa-2xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-pinterest fa-2xl" style="color: #ffffff;"></i></a>
            </div>
            <div>
                <h3>Manga&Co</h3>
            </div>
        </div>
        <header class="header">
            <nav>
                <div class="logo">
                    <a href="/"><h1>Manga&Co</h1></a>
                </div>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <ul class="menu">
                    <li><a href="/shonens">Shonen</a></li>
                    <li><a href="/seinens">Seinen</a></li>
                    <li><a href="/shojos">Shojo</a></li>
                    <li><a href="/joseis">Josei</a></li>
                </ul>
                <ul class="menu1">
                    <li><a href="#"><i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #000000;"></i></a></li>
                    @if (Route::has('login'))
                    <li>
                        @auth
                        <a href=""></a><i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i></li>
                        @else
                        <li>
                            <a href="{{ route('login') }}"><i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i></a>
                        @endauth
                        </li>
                    @endif
                    <li><a href="#"><i class="fa-solid fa-bag-shopping fa-2xl" style="color: #000000;"></i></a></li>
                    @auth        
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="fa-solid fa-right-from-bracket fa-beat-fade fa-xl" style="color: #ce0303;"></i>
                    </x-dropdown-link>
                    </form>
                    @endauth
                </ul>
            </nav>
        </header>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <footer>
           <div class="footer" >
                <ul class="listfoot">
                    <li><a href="/shonens">Shonen</a></li>
                    <li><a href="/seinens">Seinen</a></li>
                    <li><a href="/shojos">Shojo</a></li>
                    <li><a href="/joseis">Josei</a></li>
                </ul>
            
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477167.13756241713!2d54.872825473437466!3d-20.87735949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21827f025697aaa7%3A0x2fc2481227b0956!2sLibrairie%20La%20Voie%20Des%20Bulles%20Nord!5e0!3m2!1sfr!2sfr!4v1698590077679!5m2!1sfr!2sfr" width="400" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="listfoot">
                    <h5>Suivez-nous</h5><br>
                    <div class="icon">
                        <a href=""><i class="fa-brands fa-facebook fa-2xl" style="color: #000;"></i></a>&nbsp;
                        <a href=""><i class="fa-brands fa-instagram fa-2xl" style="color: #000;"></i></a>&nbsp;
                        <a href=""><i class="fa-brands fa-pinterest fa-2xl" style="color: #000;"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <a href="">© 2023 Mangas&Co</a>
            </div>
        </footer>
    </body>
</html>
