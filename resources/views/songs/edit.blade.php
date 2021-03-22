@extends('layouts.app')
@section('titolo', 'Modifica brano')

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
    <form method="POST" action="{{ route('songs.update', $canzone->id) }}">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="inputTitolo">Titolo</label>
            <input value="{{ $canzone->titolo }}" name="titolo" type="text" class="form-control" id="inputTitolo">
        </div>
        <div class="form-group">
            <label for="inputAutore">Autore</label>
            <input value="{{ $canzone->autore }}" name="autore" type="text" class="form-control" id="inputAutore">
        </div>
        <div class="form-group">
            <label for="inputGenere">Genere</label>
            <select name="genere" id="inputGenere">
                <option value="">>--- seleziona ---<</option>
                <option value="pop" {{ $canzone->genere == 'pop' ? 'selected=selected' : '' }}>Pop</option>
                <option value="rock" {{ $canzone->genere == 'rock' ? 'selected=selected' : '' }}>Rock</option>
                <option value="rap" {{ $canzone->genere == 'rap' ? 'selected=selected' : '' }}>Rap</option>
                <option value="trap" {{ $canzone->genere == 'trap' ? 'selected=selected' : '' }}>Trap</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAnno">Anno</label>
            <input value="{{ $canzone->anno }}" name="anno" type="text" class="form-control" id="inputAnno">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection