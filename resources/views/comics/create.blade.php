@extends('layouts.main')

@section('title, Crea Fumetto')

@section('main')
    <div class="container text-white">
        <h1 class="text-center">Crea Fumetto</h1>
        <a class="btn btn-secondary my-3" href="{{ route('comics.index') }}">Torna indietro</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="url" class="form-control" id="thumb" name="thumb"
                            value="{{ old('thumb') }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome Fumetto</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nome Fumetto"
                            value="{{ old('title') }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Genere"
                            value="{{ old('type') }}" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" value="{{ old('price') }}" min="0" class="form-control" id="price"
                            name="price" placeholder="Prezzo" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie"
                            value="{{ old('series') }}" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di Vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('date') }}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" class="form-control" id="artists" name="artists" placeholder="Artisti"
                            value="{{ old('artists') }}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittori"
                            value="{{ old('writers') }}" required>
                    </div>
                </div>
                <div class="col-1 my-4">
                    <button type="submit" class="btn btn-success">Crea</button>
                </div>
                <div class="col-1 my-4">
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
