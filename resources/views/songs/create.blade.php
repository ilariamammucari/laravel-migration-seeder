@extends('layouts.app')
@section('titolo', 'Aggiungi brano')

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<div class="container">
    <form method="POST" action="{{ route('songs.store') }}">
    @csrf
    @method('POST')
        <div class="form-group">
            <label for="inputTitolo">Titolo</label>
            <input name="titolo" type="text" class="form-control" id="inputTitolo">
        </div>
        <div class="form-group">
            <label for="inputAutore">Autore</label>
            <input name="autore" type="text" class="form-control" id="inputAutore">
        </div>
        <div class="form-group">
            <label for="inputGenere">Genere</label>
            <select name="genere" id="inputGenere">
                <option value="">>--- seleziona ---<</option>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="rap">Rap</option>
                <option value="trap">Trap</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAnno">Anno</label>
            <input name="anno" type="text" class="form-control" id="inputAnno">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection