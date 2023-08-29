@extends('layouts.main')

@section('title, Modifica Fumetto')

@section('main')
    <div class="container text-white">
        <h1 class="text-center">Modifica Fumetto</h1>
        <a class="btn btn-secondary my-3" href="{{ route('comics.index') }}">Torna indietro</a>

        <form method="POST" action="{{ route('comics.update', $comic) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="url" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome Fumetto</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nome Fumetto"
                            value="{{ $comic->title }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Genere"
                            value="{{ $comic->type }}" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" value="{{ $comic->price }}" min="0" class="form-control" id="price"
                            name="price" placeholder="Prezzo" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}" placeholder="Serie" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di Vendita</label>
                        <input type="date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}"
                            name="sale_date" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" class="form-control" id="artists" name="artists"
                            value="{{ $comic->artists }}" placeholder="Artisti" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittori"
                            value="{{ $comic->writers }}" required>
                    </div>
                </div>
                <div class="col-1 my-4">
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
                <div class="col-1 my-4">
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
