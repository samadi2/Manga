<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Manga&Co</title>

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
        @include('layouts.navigation')
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @if (isset($header))
                <div class="  shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </div>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main> 
        </div>
        <footer>
            <div class="footer" >
                <ul class="listfoot">
                    <li><a href="/shonens">Shonen</a></li>
                    <li><a href="/seinens">Seinen</a></li>
                    <li><a href="/shojos">Shojo</a></li>
                    <li><a href="/joseis">Josei</a></li>
                </ul>
            
                <div class="map">
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
