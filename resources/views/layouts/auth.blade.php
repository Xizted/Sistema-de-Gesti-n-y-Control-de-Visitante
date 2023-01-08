@extends('layouts.app')
@section('content')
<div class="container-fluid vh-100 overflow-hidden">
    <div class="row">
        <div class="d-none d-lg-flex col-lg-8 col-12 vh-100 ">
            <div class="d-none d-lg-flex align-items-center p-5 col-sm-12 col-lg-12">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                    {{-- <img src="{{ asset('images/auth/register.png') }}" class="img-fluid" /> --}}
                    @yield('imagen')
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 vh-100 bg-secondary text-white">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100 p-5">
                <div class="col-sm-8 col-lg-12 d-flex justify-content-center flex-column">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
