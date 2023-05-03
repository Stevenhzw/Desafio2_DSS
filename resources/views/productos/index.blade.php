@extends('layout.template')
@section('title','Lista de Productos')
@section('content')


<p>Lista de Productos</p>
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
        <td><a class="btn btn-danger" href="{{url('/productos/delete')}}">Eliminar</a></td>
    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="/home">Volver</a>
   

@endsection