@extends('partials.menu')

@section('title')
Incidencias Archivadas
@endsection

@section('content')

<!-- Page Content -->
<div class="content container-fluid">

    <!-- Search Filter -->
    <div class="row filter-row">
        <div class="col-md-8">
            {{-- <form action="{{ route('admin.searchUsers') }}">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus mb-0">
                            <input type="text" class="form-control floating" name="employee_id">
                            <label class="focus-label">ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus mb-0">
                            <input type="text" class="form-control floating" name="name">
                            <label class="focus-label">Fecha</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" href="#" class="btn btn-success btn-search"><i
                                class="fas fa-search me-2"></i> Buscar </button>
                    </div>
                </div>
            </form> --}}
        </div>
        <div class="col-md-4">
            <div class="add-emp-section">
                <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                    data-bs-target="#create_incident"><i class="fas fa-plus"></i> Crear Incidencia</a>
            </div>
        </div>
    </div>
    <!-- /Search Filter -->
    @if ($errors->any())
    <div class="mx-auto text-center">
        <ul
            style="top: 20px; left: 0; right: 0; position: fixed; width: 310px; height: auto; margin: auto; padding: 0px; list-style-type: none; z-index: 10000000;">
            @foreach ($errors->all() as $error)
            <li style="overflow: hidden; border-radius: 2px; color: rgb(255, 255, 255); width: 310px; cursor: pointer;">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Tipo de nómina</th>
                            <th>Fecha limite</th>
                            <th class="text-nowrap">Empresa</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($archivedTickets as $archivedTicket)
                        <tr>
                            <td>
                                <a href="{{ route('ticket.details', $archivedTicket['id']) }}">
                                    {{ $archivedTicket['category'] }}
                                </a>
                            </td>
                            <td>{{ $archivedTicket['limit_date'] }}</td>
                            <td>{{ $archivedTicket['company'] }}</td>
                            <td>
                                <span class="role-info role-bg-one">{{ $archivedTicket['status'] }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->

@endsection