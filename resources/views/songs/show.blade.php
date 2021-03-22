@extends('layouts.app')
@section('titolo', 'Dettaglia brano')

@section('content')
<div class="container text-center">
    <h1>{{ $canzone->titolo }}</h1>
    <p>{{ $canzone->autore }}</p>
    <p>{{ $canzone->genere }}</p>
    <p>{{ $canzone->anno }}</p>
</div>
@endsection