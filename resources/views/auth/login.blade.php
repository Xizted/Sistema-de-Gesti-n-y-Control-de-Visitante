@extends('layouts.app')

@section('content')
<div class="container-fluid vh-100 overflow-hidden">
    <div class="row">
        <div class="d-none d-lg-flex col-lg-8 col-12 vh-100 ">
            <div class="d-none d-lg-flex align-items-center p-5 col-sm-12 col-lg-12">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                    <img src="{{ asset('images/auth/login.png') }}" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 vh-100 bg-secondary text-white">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100  p-5">
                <div class="col-sm-8 col-lg-12 d-flex justify-content-center flex-column">
                    <h2 class="mb-3 text-center">Iniciar Sesión</h2>
                    <form novalidate method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-input name="email" inputType="email" placeholder="Ingrese su Correo" :labelText="__('Email')" />
                        <x-input name="password" inputType="password" placeholder="Ingrese su Contraseña" :labelText="__('Password')" />
                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <p class="text-center mt-3">¿No tienes una Cuenta?, <a href="{{ route('register') }}">Registrate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
