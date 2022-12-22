<header>

    <div class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc">
    </div>
    <ul>
        <li>
            <a href="{{ route('characters') }}">Characters</a>
        </li>
        <li>
            <a href="{{ route('comics') }}">Comics</a>
        </li>
        <li>
            <a href="{{ route('movies') }}">Movies</a>
        </li>
        <li>
            <a href="{{ route('tv') }}">Tv</a>
        </li>
        <li>
            <a href="{{ route('games') }}">Games</a>
        </li>
        <li>
            <a href="{{ route('videos') }}">Videos</a>
        </li>
        <li>
            <a href="{{ route('fans') }}">Fans</a>
        </li>
        <li>
            <a href="{{ route('news') }}">News</a>
        </li>
        <li>
            <a href="{{ route('shop') }}">Shop</a>
        </li>
    </ul>
</header>
