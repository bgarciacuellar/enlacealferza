@extends('partials.menu-user')

@section('content')

<!-- Page Content -->
<div class="content container-fluid">

    <!-- Search Filter -->
    @if (auth()->user()->hasRoles(['ejecutivo']))
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
    @endif
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
        <div class="col-12 col-lg-4">
            <form action="{{ route('user.ticketList') }}">
                <label for="company">Selecciona una compañía</label>
                <select name="company" class="form-control" required>
                    <option value="">Selecciona una opción</option>
                    @foreach ($myCompanies as $myCompany)
                    <option value="{{ $myCompany['id'] }}" {{ $selectedCompany==$myCompany['id'] ? 'selected' : null}}>
                        {{ $myCompany['name'] }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success btn-add-emp">Elegir</button>
            </form>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                @if ($tickets)
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Categoría</th>
                            <th>Fecha limite</th>
                            <th>Estatus</th>
                            <th class="text-end no-sort">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <tr>
                            <td>
                                <a href="{{ route('ticket.details', $ticket->id) }}">
                                    {{ $ticket['category'] }}
                                </a>
                            </td>
                            <td>{{ $ticket->limit_date->format('d/m/Y') }}</td>
                            <td>
                                <span class="role-info role-bg-one">{{ $ticket->statusString }}</span>
                            </td>
                            <td class="text-end ico-sec">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->

<!-- Add Employee Modal -->
<div id="create_incident" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Incidencia</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ticket.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Estatus <span class="text-danger">*</span></label>
                                <select class="form-control" name="status">
                                    <option value="">Selecciona una opción</option>
                                    <option value="abierto">Abierto</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha limite <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="limit_date">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Categoría <span class="text-danger">*</span></label>
                                <select class="form-control" name="category" id="">
                                    <option value="">Selecciona una opción</option>
                                    <option value="Nomina 1">Nomina 1</option>
                                    <option value="Nomina 2">Nomina 2</option>
                                    <option value="Nomina 3">Nomina 3</option>
                                    <option value="Nomina 4">Nomina 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Empresa<span class="text-danger">*</span></label>
                                <select class="form-control" name="company" id="">
                                    <option value="">Selecciona una opción</option>
                                    @foreach ($myCompanies as $myCompany)
                                    <option value="{{ $myCompany['id'] }}">{{ $myCompany['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Comentarios</label>
                                <textarea name="comment" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="submit" class="btn btn-primary submit-btn">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Employee Modal -->
<div class="modal custom-modal fade" id="delete_employee" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Employee</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('admin.disableUser') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="user_id" class="delete_user_id">
                                <button type="submit" class="btn btn-primary continue-btn">Deshabilitar</button>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Employee Modal -->

@endsection