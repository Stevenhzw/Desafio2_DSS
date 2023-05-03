@extends('layout.template')
@section('title','Lista de Usuarios')
@section('content')


<p>Lista de Usuarios</p>
<a class="btn btn-success" href="/usuarios/create">Añadir Nuevo Usuario</a>
<div class="table-responsive">
<table class="table table-bordered">
<thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Estado</th>
        <th scope="col">Rol</th>
        <th scope="col">Modificar</th>
        <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->password}}</td>
        <td>{{$usuario->estado}}</td>
        <td>{{$usuario->rol}}</td>
        <td><a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id)}}">Modificar</a></td>
        <td><a class="btn btn-danger" href="{{url('/usuarios/delete')}}">Eliminar</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
<a class="btn btn-primary" href="/home">Volver</a>
   

@endsection