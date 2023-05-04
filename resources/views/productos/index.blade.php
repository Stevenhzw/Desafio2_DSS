@extends('layout.template')
@section('title','Lista de Productos')
@section('content')


<h3>Lista de Productos</h3>
<a class="btn btn-success" href="/productos/create">Añadir Nuevo Producto</a>
<table class="table table-bordered">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Categoria</th>
        <th>Precio</th>
        <th>existencias</th>
        <th>Imagen</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
    @foreach($productos as $producto)
   
    
    <tr>
        <td>{{$producto->id_prod}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>@foreach($categorias as $categoria)@if($producto->categoria==$categoria->id_cate) {{{$categoria->nombre}}}@endif @endforeach</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->existencias}}</td>
        <td>{{$producto->imagen}}</td>
        <td><a class="btn btn-primary" href="{{ route('productos.edit',$producto->id_prod)}}">Modificar</a></td>
        <td>
        <form action=" {{route('productos.destroy',$producto->id_prod) }}" method="POST">
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