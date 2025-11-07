@extends('pages.inicio')

@section('title', 'Editar Departamento')

@section('header')

<h1>Editar Departamento</h1>
@endsection

@section('content')

<form action="{{Route('departamentos.update', $departamentos->id)}}" method="post">
@csrf
@method('PUT')
<label>
    Nombre del Departamento: <input type="text" name="nombredepartamento" value="{{$departamentos->nombredepartamento}}">
</label>
<br>
<br>
<label>
    Codigo del Departamento: <input type="text" name="codigodepartamento" value="{{$departamentos->codigodepartamento}}">
</label>

<br>
<br>

<button type="submit">Actualizar Departamento</button>


</form>

@endsection