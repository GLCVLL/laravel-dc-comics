@extends('layouts.main')

@section('title', $comic->title)


@section('section-id', 'comics')

@section('main')
    <div class="container text-white">
        <h1 class="text-center my-2">{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-3 my-2">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-9 my-2">
                <p>{{ $comic->description }}</p>
                <div class="d-flex ">
                    <h6>{{ $comic->type }}</h6>
                    <h6 class="mx-4">{{ $comic->price }}</h6>
                    <h6>{{ $comic->series }}</h6>
                    <h6>{{ $comic->sale_date }}</h6>
                </div>
                <div class="d-flex">
                    <p>{{ $comic->artists }}</p>
                    <p>{{ $comic->writers }}</p>
                </div>
                <a class="btn btn-secondary" href="{{ route('comics.index') }}">Torna ai Fumetti</a>
                <a class="btn btn-warning mx-2" href="{{ route('comics.edit', $comic) }}">Modifica</a>
            </div>
        </div>
    </div>
@endsection
