@extends('partials.menu')

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
                            <label class="focus-label">Nombre</label>
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
                <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_company"><i
                        class="fas fa-plus"></i> Crear nómina</a>
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
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payrolls as $payroll)
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    {{-- <a href="{{ route('admin.userDetails', $user['id']) }}" class="avatar"><img
                                            alt="" src="assets/img/profiles/avatar-02.jpg"></a> --}}
                                    <a href="{{ route('payroll.details', $payroll->id) }}">{{ $payroll->type }}</a>
                                </h2>
                            </td>
                            <td>{{ $payroll->name }}</td>
                            <td class="text-end ico-sec">
                                <a href="#" data-bs-toggle="modal"
                                    onclick="getPayrollId({{ $payroll->id }}, 'delete_payroll')"
                                    data-bs-target="#delete_employee"><i class="far fa-trash-alt text-danger"></i></a>
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

<!-- Add company -->
<div id="add_company" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Nómina</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('payroll.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Tipo <span class="text-danger">*</span></label>
                                <input class="form-control" name="type" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre</label>
                                <input class="form-control" name="name" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="submit" class="btn btn-primary submit-btn">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete payroll -->
<div class="modal custom-modal fade" id="delete_employee" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Eliminar Nómina</h3>
                    <p>Esta seguro de eliminar está nómina?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('payroll.delete') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="payroll" class="delete_payroll">
                                <button type="submit" class="btn btn-primary continue-btn">Eliminar</button>
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

@section('js')

<script src="{{ asset('js/customize/payroll.js') }}"></script>

@endsection