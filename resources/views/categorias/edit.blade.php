@extends('layout.template')

@section('title','Editar categoria')

@section('content')
<div class="row">
    <div class=" col-md-7">
       
        @if ($errors->all())
            @dump($errors->all())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
                @endforeach
            </div>
        @endif
        <form role="form" action="{{ route('categorias.update',$categoria->id_cate)}}"  method="POST">
            @csrf
            @method('PUT')
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group">
                <label for="id_cate">Codigo de categoria:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="id_cate" id="id_cate"  value="{{$categoria->id_cate}}" readonly placeholder="Ingresa el codigo de la categoria." >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre de categoria:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre" id="nombre"  value="{{$categoria->nombre}}"  placeholder="Ingresa el nombre del producto" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            
            <input type="submit" class="btn btn-success" value="Guardar" name="Guardar">
            <a class="btn btn-primary" href="/categorias">Volver</a>
        </form>
    </div>
    </div>
@endsection