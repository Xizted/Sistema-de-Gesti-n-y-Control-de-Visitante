@extends('layouts.dashboard')

@section('contenido')
<div class="container-main">
    <div class="row gap-row-2">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card bg-secondary rounder-1">
                <div class="card-content p-4 d-flex justify-content-between align-items-center gap-2">
                    <div>
                        <span class="font-weight-bold h4 m-0">1000</span>
                        <p class="m-0 text-white-50">Hoy</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center rounded-circle bg-icons-primary" style="width: 46px; height: 46px;">
                        <i class="fa-solid fa-user h4 m-0 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card bg-secondary rounder-1">
                <div class="card-content p-4 d-flex justify-content-between align-items-center gap-2">
                    <div>
                        <span class="font-weight-bold h4 m-0">1000</span>
                        <p class="m-0 text-white-50">Ayer</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center rounded-circle bg-icons-primary" style="width: 46px; height: 46px;">
                        <i class="fa-solid fa-user h4 m-0 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card bg-secondary rounder-1">
                <div class="card-content p-4 d-flex justify-content-between align-items-center gap-2">
                    <div>
                        <span class="font-weight-bold h4 m-0">1000</span>
                        <p class="m-0 text-white-50">Últ. 7 Días</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center rounded-circle bg-icons-primary" style="width: 46px; height: 46px;">
                        <i class="fa-solid fa-user h4 m-0 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card bg-secondary rounder-1">
                <div class="card-content p-4 d-flex justify-content-between align-items-center gap-2">
                    <div>
                        <span class="font-weight-bold h4 m-0">1000</span>
                        <p class="m-0 text-white-50">Total</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center rounded-circle bg-icons-primary" style="width: 46px; height: 46px;">
                        <i class="fa-solid fa-user h4 m-0 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
