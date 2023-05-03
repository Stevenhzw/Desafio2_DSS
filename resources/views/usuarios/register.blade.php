@extends('layout.template')

@section('title','Inicio de sesion')

@section('content')

<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Nuevo usuario</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ivan Calderon" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <input type="hidden" name="estado" class="form-control" id="estado" value="1" required>
                        <input type="hidden" name="rol" class="form-control" id="rol" value="usuario" required>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Registrarse</button>
                                
                            </div>
                            <div class="d-grid">
                            <p>Ya tienes cuenta? <a href="{{url('/login')}}">iniciar sesion</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection