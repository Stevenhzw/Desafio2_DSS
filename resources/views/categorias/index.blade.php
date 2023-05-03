@extends('layout.template')
@section('title','Lista de Categorias')
@section('content')
<p>Lista de Categorias</p>
<a class="btn btn-success" href="/categorias/create">Añadir Nueva Categoria</a>
<table class="table table-bordered">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
    @foreach($categorias as $categoria)
    <tr>
        <td>{{$categoria->id_cate}}</td>
        <td>{{$categoria->nombre}}</td>
        <td><a class="btn btn-primary" href="{{ route('categorias.edit',$categoria->id_cate)}}">Modificar</a></td>
        <td><a class="btn btn-danger" href="{{ route('categorias.edit',$categoria->id_cate)}}">Eliminar</a></td>
            
        </a></td>


    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="/home">Volver</a>

   

@endsection