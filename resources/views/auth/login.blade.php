@extends('layouts.app')

@section('content')



<div class="container">

    <div class="row justify-content-center" >
        <div class="col-md-8" style="background-color: black; color: white ;">
            <div class="card" style="background-color: black; color: white ;">
                <div class="card-header" style="background-color: black; color: white ;">{{ __('Registro de Compra') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" style="background-color: black; color:aliceblue;">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Ingrese su correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 <p style="font-size: 10.5px; color:grey;">usar sus caracteristicas personales reales para mejorar la calidad del resultado</p> 

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <p style="font-size: 10.5px; color:grey;">utilizar espacios, caracteres minimos 8 </p> 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar cuenta') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color: white; background-color:black;border: solid 2px red">
                                    {{ __('Registrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" style="color: red;" href="{{ route('password.request') }}">
                                    {{ __('¡Olvide mi contraseña!') }}
                                </a>
                                @endif
                            </div>
                        </div><br>
                        <table class="table table-bordered" style="border: solid 1px red;">
                            <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Franco</td>
                                    <td>Mamani Mamani</td>
                                    <td>franconilvermamanimamani@gmail.com</td>
                                </tr>                         
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection