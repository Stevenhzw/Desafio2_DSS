@extends('layout.template')

@section('title','Nuevo Producto')

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
        <form role="form" action="{{route('productos.store')}}"  method="POST">
            @csrf
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group">
                <label for="id_prod">Codigo del Producto:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="id_prod" id="id_prod"  placeholder="Ingresa el codigo del producto PROD#####." >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del producto:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre" id="nombre"   placeholder="Ingresa el nombre del producto" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del producto:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="descripcion" id="descripcion"   placeholder="Ingresa la descripcion del producto" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
            
                <label for="categoria">categoria del producto:</label>
            <div class="input-group">
                    <select name="categoria" class="form-control" id="categoria">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id_cate}}" selected>{{$categoria->nombre}}</option>
                    @endforeach
                    </select>
                    </div>
                    </div>
            <div class="form-group">
                <label for="precio">Precio del producto:</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="precio" id="precio"   placeholder="Ingresa el precio del producto" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="existencias">existencias del producto:</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="existencias" id="existencias"   placeholder="Ingresa la existencia del producto" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen del producto:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="imagen" id="imagen"   placeholder="Ingresa la Imagen del producto" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            
            <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
            <a class="btn btn-danger" href="#">Cancelar</a>
        </form>
    </div>
     </div>
@endsection