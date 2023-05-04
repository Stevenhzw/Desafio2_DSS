@extends('layout.template')
@section('title','Lista de Clientes')
@section('content')


<h3>Lista de Usuarios</h3>
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
    @if($usuario->rol == 'usuario' )
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->password}}</td>
        <td>@if($usuario->rol == 'administrador')Cuenta de administrador @elseif($usuario->estado == 1)Activo @else Inactivo @endif</td>
        <td>{{$usuario->rol}}</td>
        <td><a class="btn btn-primary" href="{{ route('clientes.edit',$usuario->id)}}">Modificar</a></td>
        <td>
        <form action=" {{route('clientes.destroy',$usuario->id) }}" method="POST">
                   @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
        </td>
    </tr>
    @endif
    @endforeach
    </tbody>
</table>
</div>
<a class="btn btn-primary" href="/home">Volver</a>
   

@endsection