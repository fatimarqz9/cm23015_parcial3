@extends('pages.inicio')

@section('title', 'Departamentos')

@section('header')

<h1>Gestión de Departamentos</h1>
@endsection

@section('content')

<a href="{{Route('departamentos.create')}}">Crear nuevo departamento</a>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Codigo</th>
    </thead>
    <tbody>
        @foreach($departamentos as $depa)

            <tr>
                <td>{{$depa->id}}</td>
                <td>{{$depa->nombredepartamento}}</td>
                <td>{{$depa->codigodepartamento}}</td>
            </tr>

        @endforeach
    </tbody>
</table>


@endsection