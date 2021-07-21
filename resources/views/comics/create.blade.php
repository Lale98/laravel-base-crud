@extends('layouts.main')

@section('content')
    <h1>Crea un nuovo Fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group mt-3">
            <label for="type"><strong>Tipo</strong></label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo di fumetto" name="type">
        </div>
        <div class="form-group mt-3">
            <label for="series"><strong>Seirie</strong></label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci la serie del fumetto" name="series">
        </div>
        <div class="form-group mt-3">
            <label for="title"><strong>Titolo</strong></label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title">
        </div>
        <div class="form-group mt-3">
            <label for="price"><strong>Prezzo</strong></label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price">
        </div>
        <div class="form-group mt-3">
            <label for="thumb"><strong>Url Immagine</strong></label>
            <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine" name="thumb">
        </div>
        <div class="form-group mt-3">
            <label for="description"><strong>Descrizione del Fumetto</strong></label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4"></textarea>
        </div>
        <div class="d-inline-flex  mt-4">
            <button type="submit" class="btn btn-primary me-3"><strong>Salva</strong></button>
            <div>
                <a class="btn btn-secondary" href="{{ route("comics.index") }}">Torna indietro</a>
            </div>
        </div>
      </form>
@endsection