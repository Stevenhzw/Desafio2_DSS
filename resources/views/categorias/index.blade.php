@extends('layout.template')
@section('title','Lista de Categorias')
@section('content')
<h3>Lista de Categorias</h3>
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
        <td>
       
        <form action=" {{route('categorias.destroy',$categoria->id_cate) }}" method="POST">
                   @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
        </td>
    </tr>
  
    @endforeach
</table>
<a class="btn btn-primary" href="/home">Volver</a>

   

@endsection