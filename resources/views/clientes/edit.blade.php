@extends('layout.template')
@section('title','Editar Usuarios')
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
        <form role="form" action="{{ route('clientes.update',$cliente->id)}}"  method="POST">
            @csrf
            @method('PUT')
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group">
                <label for="id">Id del usuario:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="id" id="id" value="{{$cliente->id}}" readonly placeholder="" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Nombre del usuario:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name"  value="{{$cliente->name}}" placeholder="Ingresa el nombre del usuario" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Direccion de correo:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="email" id="email"  value="{{$cliente->email}}"  placeholder="Ingresa la direccion de correo del usuario" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="password" id="password" value="{{$cliente->password}}" readonly placeholder="" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="estado">Estado del usuario:</label>
                <div class="input-group">
                    <select name="estado" class="form-control" id="estado">
                        <option value="1" >Activo</option>
                        <option value="2">Inactivo</option>
                        <option value="{{$cliente->estado}}" selected></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="estado">Rol del usuario:</label>
                @if($cliente->rol=='usuario')
                <div class="input-group">
                    <input type="text" class="form-control" name="rol" id="rol"  value="{{$cliente->rol}}"  readonly  >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                
                @endif
            </div>
            <input type="submit" class="btn btn-success" value="Guardar" name="Guardar">
            <a class="btn btn-primary" href="/clientes">Volver</a>
        </form>
    </div>
    </div>



   

@endsection