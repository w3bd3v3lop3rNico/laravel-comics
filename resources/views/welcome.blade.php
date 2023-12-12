@extends('layout')

@section('title-head')
    DC Comics
@endsection

@section('main')
    <section class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </section>
    <div class="series">
        <h1>Current Series</h1>
        <div class="grid">
            <div class="row row-cols-6">
                @foreach($comics as $comic)
                <div class="g-col-3">
                    <h4 >{{ $comic['title'] }}</h4>
                
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection