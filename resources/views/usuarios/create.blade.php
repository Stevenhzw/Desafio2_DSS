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
        <form role="form" action="{{route('usuarios.store')}}"  method="POST">
            @csrf
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            
            <div class="form-group">
                <label for="name">Nombre del usuario:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name"   placeholder="Ingresa el nombre del usuario" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Direccion de correo:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="email" id="email"   placeholder="Ingresa la direccion de correo del usuario" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password"   placeholder="" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="estado">Estado del usuario:</label>
                <div class="input-group">
                    
                    <select name="estado" class="form-control" id="estado">
                        <option value="1" selected>Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="estado">Rol del usuario:</label>
                <div class="input-group">
                    
                    <select name="rol" class="form-control" id="rol">
                        <option value="Administrador" selected>Administrador</option>
                        <option value="Empleado">Empleado</option>
                    </select>
                </div>
            </div>
            
            <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
            <a class="btn btn-danger" href="#">Cancelar</a>
        </form>
    </div>
    </div>
@endsection