@extends('pages.inicio')

@section('title', 'Crear Departamento')

@section('header')

<h1>Crear Departamento</h1>
@endsection

@section('content')

<form action="{{Route('departamentos.store')}}" method="post">
@csrf
<label>
    Nombre del Departamento: <input type="text" name="nombredepartamento">
</label>
<br>
<br>
<label>
    Codigo del Departamento: <input type="text" name="codigodepartamento">
</label>

<br>
<br>

<button type="submit">Crear Departamento</button>


</form>

@endsection