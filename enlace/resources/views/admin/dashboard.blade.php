@extends('partials.menu')

@section('title')
    Panel de administración
@endsection
@section('content')
<!-- Page Content -->
<!-- Page Content -->
<div class="content container-fluid pb-0">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card flex-fill tickets-card">
                <div class="card-header">
                    <div class="text-center w-100 p-3">
                        <h3 class="bl-text mb-1">{{ $companies }}</h3>
                        <a href="{{ route('company.list') }}">
                            <h2>Compañías en el sistema</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card flex-fill tickets-card">
                <div class="card-header">
                    <div class="text-center w-100 p-3">
                        <h3 class="bl-text mb-1">{{ $tickets }}</h3>
                        <a href="{{ route('ticket.list') }}">
                            <h2>Tickets abiertos</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card flex-fill tickets-card">
                <div class="card-header">
                    <div class="text-center w-100 p-3">
                        <h3 class="bl-text mb-1">37</h3>
                        <h2>Tareas</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card flex-fill tickets-card">
                <div class="card-header">
                    <div class="text-center w-100 p-3">
                        <h3 class="bl-text mb-1">218</h3>
                        <h2>Empleados</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /Page Content -->

@endsection

@section('js')

@endsection