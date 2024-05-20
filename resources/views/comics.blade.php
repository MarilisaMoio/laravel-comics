@extends('layouts.app')

@section("page-title")
Comics
@endsection

@section('content')
    <section class="hero">
        <div class="container">
            <div>current series</div>
        </div>
    </section>
    <section class="comics">
        <div class="container">
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <div class="title"> {{ $comic['series'] }} </div>
                </div>
            @endforeach
            <button type="button">load more</button>
        </div>
    </section>
    <section class="icons">
        <div class="container">
            @foreach ($icons as $icon)
                <div class="icon-card">
                    <img src="{{ Vite::asset('resources/img/buy-' . $icon['src']) }}" alt="{{ $icon['text'] }}">
                    <span class="icon-text">{{ $icon['text'] }}</span>
                </div>
            @endforeach
        </div>
    </section>
@endsection
