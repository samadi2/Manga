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
        <li>
                        <i class="fa-solid fa-magnifying-glass fa-2xl" id="search-icon"></i>
                        <li id="search-form-container" style="display: none;">
                            <form id="search-form" action="{{ route('articles.search') }}" method="get">
                                <input type="text" name="searchTerm" placeholder="Rechercher...">
                                <button type="submit"><i class="fa-solid fa-search fa-2xl" style="color: #000;"></i></button>
                            </form>
                        </li>
                    </li>
            <li><a href="{{ route('profile.edit') }}"><i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i></a></li>
            <li><a href="{{ route('cart.index') }}"><i class="fa-solid fa-bag-shopping fa-2xl" style="color: #000000;"></i></a></li>
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