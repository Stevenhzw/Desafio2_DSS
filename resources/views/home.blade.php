@extends('layout.template')

@section('title','Inicio de sesion')

@section('content')

    
       <h3> Bienvenido, {{ Auth::user()->name }}</h3>
   
    
</body>
</html>
@endsection