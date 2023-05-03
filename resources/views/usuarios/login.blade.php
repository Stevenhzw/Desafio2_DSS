@extends('layout.template')

@section('title','Inicio de sesion')

@section('content')


<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Inicio de sesion</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <input type="hidden" name="estado" class="form-control" id="estado" value="1" required>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Inicar sesion</button>
                               
                            </div>
                            <div class="d-grid">
                            <p>Eres nuevo? <a href="{{url('/register')}}">crea una cuenta</a></p>
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