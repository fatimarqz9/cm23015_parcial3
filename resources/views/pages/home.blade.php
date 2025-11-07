@extends('pages.inicio')

@section('title', 'Menú')

@section('header')

<h1>Menú</h1>
@endsection

@section('content')
<a href="{{ Route('departamentos.index') }}">Ejercicio 3</a>
@endsection