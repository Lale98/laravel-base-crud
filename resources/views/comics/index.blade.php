@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between">
        <h1>Comics List</h1> 
        <form>
            <a class="btn btn-primary" href="{{ route("comics.create") }}">Crea un Fumetto</a>
        </form>
    </div>

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }}
        </div>
    @endif

    <table class="mt-4 table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>titolo</th>
                <th>serie</th>
                <th>prezzo</th>
                <th colspan="3">Azioni</th>
            </tr>
        </thead>
        <tbody>  
            @foreach ($comics as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->series }}</td>
                    <td>{{ $item->price }} &euro;</td>
                    <td>
                        <a href="{{ route("comics.show", $item->id) }}" class="btn btn-success">SHOW</a>
                    </td>
                    <td>
                        <a href="{{ route("comics.edit", $item->id) }}" class="btn btn-primary">EDIT</a>
                    </td>
                    <td>
                        <form 
                            action="{{ route('comics.destroy', $item->id) }}" 
                            method="POST"
                            onsubmit = "return confirm('Confermi di voler eliminare definitivamente {{ $item->series }} {{ $item->title }} ?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    
    {{ $comics->links() }}
@endsection