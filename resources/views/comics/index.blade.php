@extends('layouts.main')

@section('title, Comics')


@section('section-id', 'comics')

@section('main')
    <div class="container text-white">
        <h1 class="text-center my-4">Comics list</h1>
        <div class="row">
            <div class="col-12 my-4">
                <a class="btn btn-success" href="{{ route('comics.create') }}">Crea il Fumetto</a>
            </div>
            @forelse ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <div class="d-flex ">
                                <h6>{{ $comic->type }}</h6>
                                <h6 class="mx-4">{{ $comic->price }}</h6>
                                <h6>{{ $comic->series }}</h6>
                                <h6>{{ $comic->sale_date }}</h6>
                            </div>
                            <p>{{ $comic->artists }}</p>
                            <p>{{ $comic->writers }}</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary" href="{{ route('comics.show', $comic) }}">Vedi</a>
                            <a class="btn btn-warning mx-2" href="{{ route('comics.edit', $comic) }}">Modifica</a>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
    </div>
@endsection
