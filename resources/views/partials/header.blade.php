<header>

    <div class="logo">
        <a href="{{ route('home') }}">

            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc">
        </a>
    </div>
    <ul>
        <li class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">
            <a href="{{ route('characters') }}">Characters</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">
            <a href="{{ route('comics') }}">Comics</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">
            <a href="{{ route('movies') }}">Movies</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">
            <a href="{{ route('tv') }}">Tv</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">
            <a href="{{ route('games') }}">Games</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">
            <a href="{{ route('videos') }}">Videos</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">
            <a href="{{ route('fans') }}">Fans</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">
            <a href="{{ route('news') }}">News</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">
            <a href="{{ route('shop') }}">Shop</a>
        </li>
    </ul>
</header>
