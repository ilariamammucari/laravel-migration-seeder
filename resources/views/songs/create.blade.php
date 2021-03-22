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
            <input name="titolo" type="text" class="form-control" id="inputTitolo" value="{{ old('titolo') }}">
        </div>
        <div class="form-group">
            <label for="inputAutore">Autore</label>
            <input name="autore" type="text" class="form-control" id="inputAutore" value="{{ old('autore') }}">
        </div>
        <div class="form-group">
            <label for="inputGenere">Genere</label>
            <select name="genere" id="inputGenere">
                <option value="">>--- seleziona ---<</option>
                <option value="pop" {{ old('genere') == 'pop' ? 'selected=selected' : '' }}>Pop</option>
                <option value="rock" {{ old('genere') == 'rock' ? 'selected=selected' : '' }}>Rock</option>
                <option value="rap" {{ old('genere') == 'rap' ? 'selected=selected' : '' }}>Rap</option>
                <option value="trap" {{ old('genere') == 'trap' ? 'selected=selected' : '' }}>Trap</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAnno">Anno</label>
            <input name="anno" type="text" class="form-control" id="inputAnno" value="{{ old('anno') }}">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection