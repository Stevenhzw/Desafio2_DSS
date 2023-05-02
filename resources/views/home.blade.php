@extends('layout.template')

@section('title','Inicio de sesion')

@section('content')

    
       <h1> Bienvenido, {{ Auth::user()->name }}</h1>
   
    
</body>
</html>
@endsection