@extends('layouts.main')

@section('content')
    <h1>Modifica del Fumetto: {{ $comic->series }} {{ $comic->title }}</h1>
    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group mt-3">
            <label for="type"><strong>Tipo</strong></label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo di fumetto" name="type" value="{{$comic->type}}">
        </div>
        <div class="form-group mt-3">
            <label for="series"><strong>Seirie</strong></label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci la serie del fumetto" name="series" value="{{$comic->series}}">
        </div>
        <div class="form-group mt-3">
            <label for="title"><strong>Titolo</strong></label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title" value="{{$comic->title}}">
        </div>
        <div class="form-group mt-3">
            <label for="price"><strong>Prezzo</strong></label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price" value="{{$comic->price}}">
        </div>
        <div class="form-group mt-3">
            <label for="thumb"><strong>Url Immagine</strong></label>
            <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="form-group mt-3">
            <label for="description"><strong>Descrizione del Fumetto</strong></label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4">{{$comic->description}}</textarea>
        </div>
        <div class="d-inline-flex  mt-4">
            <button type="submit" class="btn btn-primary me-3" href="{{ route("comics.index") }}"><strong>Salva</strong></button>
            <div>
                <a class="btn btn-secondary" href="{{ route("comics.show", $comic->id) }}">Annulla</a>
            </div>
        </div>
    </form>
@endsection    