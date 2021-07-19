@extends('layouts.main')

@section('content')
    <h1>Comics List</h1>    

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
                        <a href="{{ route("comics.show", $item->id) }}" class="btn btn-primary">SHOW</a>
                    </td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    
    {{ $comics->links() }}
@endsection