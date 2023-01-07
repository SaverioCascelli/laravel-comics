<footer>
    <div class="wrapper">
        <div class="dc-layer">
            <div class="container">

                @foreach (config('data.footerLists') as $list)
                    <div class="vertical-list">

                        <h3>{{ $list['title'] }}</h3>
                        <ul>
                            @foreach ($list['links'] as $link)
                                <li>
                                    <a href="# ">{{ $link }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>
