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
    <div class="row mt-4">
        <div class="col-12">
            <div class="bg-secondary p-2">
                <form class="row p-2">
                    <div class="col-4">
                        <x-select name="type" :options="$options" labelText="Tipo de Visitante" />
                    </div>
                    <div class="col-4">
                        <x-input labelText="Desde" inputType="date" name="from" placeholder="desde" max="{{ date('Y-m-d') }}" />
                    </div>
                    <div class="col-4">
                        <x-input labelText="Hasta" inputType="date" name="to" placeholder="hasta" max="{{ date('Y-m-d') }}" />
                    </div>
                </form>
                <hr class="bg-white" />
                <div>
                    <canvas id="userChart" class="rounded shadow"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    const labels = [
        'January'
        , 'February'
        , 'March'
        , 'April'
        , 'May'
        , 'June'
    , ];

    const data = {
        labels: labels
        , datasets: [{
            label: 'My First dataset'
            , backgroundColor: 'rgb(255, 99, 132)'
            , borderColor: 'rgb(255, 99, 132)'
            , data: [0, 10, 5, 2, 20, 30, 45]
        , }]
    };

    const config = {
        type: 'line'
        , data: data
        , options: {}
    };

    new Chart(
        document.getElementById('userChart')
        , config
    );

</script>
@endpush
