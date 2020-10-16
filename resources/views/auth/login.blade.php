@extends('layouts.app')
@section('content')


    <!-- COPIA DE FORMULARIO DE INICIO DE SESIÓN -->

<!-- AGREGAR BOOTSTRAP Y HOJA DE ESTILO CSS3 -->

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

        
         <div class="row">

        <div class="col-sm-6 col-lg-4 col-md-4"></div>

        <div class="col-sm-6 col-lg-4 col-md-4 loginCard">
            <div>
                <div>
                    <div class="card cardplus">

                        <div class="card-body">

                            <div align="center" class="alinearCentro">
                                <img class="rounded-circle imagenCard" src="{{ asset('logos/logoCine.jpg') }}" alt="">
                            </div>



                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <!-- <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                    <div class="col">
                                        <input id="email" placeholder="Dirección de correo electrónico" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                    <div class="col">
                                        <input placeholder="Contraseña" id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="col-sm-2 col-lg-4 col-md-4"></div>



 @endsection