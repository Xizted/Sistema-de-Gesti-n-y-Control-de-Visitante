@extends('layouts.auth')

@section('imagen')
<img src="{{ asset('images/auth/register.png') }}" class="img-fluid" />
@endsection

@section('form')
<h2 class="mb-3">Registrar Nuevo Usuario</h2>
<form novalidate method="POST" action="{{ route('register') }}">
    @csrf
    <x-input name="firstName" inputType="text" placeholder="Ingrese su Nombre" labelText="Nombre" />
    <x-input name="lastName" inputType="text" placeholder="Ingrese su Apellido" labelText="Apellido" />
    <x-input name="email" inputType="email" placeholder="Ingrese su Correo" :labelText="__('Email')" />
    <x-input name="password" inputType="password" placeholder="Ingrese su Contraseña" :labelText="__('Password')" />
    <x-input name="password-confirm" inputType="password" placeholder="Confirme su Contraseña" :labelText="__('Confirm Password')" />
    <div class="form-group row mb-0">
        <button type="submit" class="btn btn-primary w-100">
            {{ __('Register') }}
        </button>
    </div>
</form>
<p class="text-center mt-3">¿Ya tienes una Cuenta?, <a href="{{ route('login') }}">Inicia Sesión</a></p>
@endsection
