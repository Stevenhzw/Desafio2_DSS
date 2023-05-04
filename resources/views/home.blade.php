@extends('layout.template')
@section('title','Lista de Productos')
@section('content')


<h3>Productos</h3>
    <div class="row">
    @foreach($productos as $producto)
    <div class="card col-lg-4 col-md-6 col-sm-12 col-xs-12" id="carta" >
  <img class="card-img-top" id="imagen-card" src="{{ URL::to('/') }}/img/{{$producto->imagen}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$producto->nombre}}</h5>
    <div><p class="card-text">{{$producto->descripcion}}</p></div><div><p class="card-text"> Existencias: {{$producto->existencias}}</p></div>
    <div><p class="card-text"> Precio: ${{$producto->precio}}</p></div>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
    </div>


    @endforeach
    </div>


   

@endsection