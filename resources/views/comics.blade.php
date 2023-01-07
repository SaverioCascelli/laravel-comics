@extends('layouts.main')

@section('content')
    <main>
        <div class="wrapper-series wrapper ">
            <div class="container-series container ">
                <div class="series">
                    <p>current series</p>
                </div>
                <div class="novel-container">
                    @foreach (config('data.dc-comics') as $comic)
                        <div class="novel-card">
                            <div class="card-img">
                                <img src={{ $comic['thumb'] }} alt={{ $comic['series'] }}>
                            </div>
                            <div class="card-title">
                                <p>{{ $comic['series'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
