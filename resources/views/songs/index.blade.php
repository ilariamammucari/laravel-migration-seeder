@extends('layouts.app')
@section('titolo', 'Musica')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($canzoni as $canzone)    
            <tr>
                <th scope="row">{{ $canzone->id }}</th>
                <td>{{ $canzone->titolo }}</td>
                <td>{{ $canzone->autore }}</td>
                <td>    
                    <button type="button" class="btn btn-info">
                        <a href="{{ route('songs.show', $canzone->id) }}">Dettagli</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                        <a href="{{ route('songs.edit', $canzone->id) }}">Modifica</a>
                    </button>
                    <form class="d-inline-block" method="POST" action="{{ route('songs.destroy', $canzone->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-success">
        <a href="{{ route('songs.create') }}">Aggiungi Brano</a>
    </button>
</div>
@endsection