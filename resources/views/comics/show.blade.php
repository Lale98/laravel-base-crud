@extends('layouts.main')

@section('content')
    @if (session('msg'))
    <div class="alert alert-success mb-4">
        {{ session('msg') }}
    </div>
    @endif
    <div class="d-flex justify-content-between">
        <h1>{{ $comic->series }} {{ $comic->title }}</h1>
        <div class="d-flex justify-content-between">
            <form class="me-1">
                <a class="btn btn-warning" href="{{ route("comics.edit", $comic->id) }}">Modifica</a>
            </form>
            <form 
                action="{{ route('comics.destroy', $comic->id) }}" 
                method="POST"
                onsubmit = "return confirm('Confermi di voler eliminare definitivamente {{ $comic->series }} {{ $comic->title }} ?')">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Elimina">
            </form>
        </div>
    </div>

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