@extends('layouts.main')

@section('content')
    <h1>Comics List</h1> 

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.create") }}">Crea un Fumetto</a>
    </div>

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
                    <td>DELETE</td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    
    {{ $comics->links() }}
@endsection