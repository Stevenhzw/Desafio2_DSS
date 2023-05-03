@extends('layout.template')

@section('title','Nueva Categoria')

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
        <form role="form" action="{{route('categorias.store')}}"  method="POST">
            @csrf
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            
            <div class="form-group">
                <label for="nombre">Nombre de categoria:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre" id="nombre"   placeholder="Ingresa el nombre de la categoria" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            
            <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
            <a class="btn btn-danger" href="#">Cancelar</a>
        </form>
    </div>
    </div>
@endsection