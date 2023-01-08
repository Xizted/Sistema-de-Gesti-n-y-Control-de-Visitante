@extends('layouts.auth')

@section('imagen')
<img src="{{ asset('images/auth/login.png') }}" class="img-fluid" />
@endsection

@section('form')
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
@endsection
