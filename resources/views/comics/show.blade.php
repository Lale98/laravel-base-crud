@extends('layouts.main')

@section('content')
    <h1>{{ $comic->series }} {{ $comic->title }}</h1>

    <div class="row my-5">
        <div class="col-2">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->series . " " . $comic->title }}">
        </div>
        <div class="col-8 offset-1">
            <h4>Tipo</h4>
            <p>{{ $comic->type }}</p>
            <h4>Descrizione</h4>
            <p>{{ $comic->description }}</p>
            <h4>Prezzo</h4>
            <p>{{ $comic->price }} &euro;</p>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna all'elenco</a>
    </div>
@endsection