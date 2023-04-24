@extends('partials.menu-employee')


@section('title')
    Altas
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <div class="add-emp-section">
                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                        data-bs-target="#request_register"><i class="fas fa-plus"></i> Solicitar alta</a>
                </div>
            </div>
        </div>
        <!-- /Search Filter -->
        @if ($errors->any())
            <div class="mx-auto text-center">
                <ul
                    style="top: 20px; left: 0; right: 0; position: fixed; width: 310px; height: auto; margin: auto; padding: 0px; list-style-type: none; z-index: 10000000;">
                    @foreach ($errors->all() as $error)
                        <li
                            style="overflow: hidden; border-radius: 2px; color: rgb(255, 255, 255); width: 310px; cursor: pointer;">
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
                                <th>Correo</th>
                                <th>Fecha de alta</th>
                                <th>Estatus</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registersImss as $registerImss)
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a
                                                href="{{ route('imss.registerImssDetails', $registerImss->id) }}">{{ $registerImss->email }}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $registerImss->register_date_formated }}</td>
                                    <td>{{ $registerImss->statusString }}</td>
                                    <td class="text-end ico-sec">
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="getUserId({{ $registerImss->id }}, 'request_delete')"
                                            data-bs-target="#delete_request"><i
                                                class="far fa-trash-alt text-danger"></i></a>
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

    <!-- request a register -->
    <div id="request_register" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Solicitar alta</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('imss.registerImss', $companyID) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Acta de nacimiento <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="birth_certificate" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">INE <span class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="identification" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Número de seguro social, constancia, no número <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="social_security_number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">RFC, constancia, no número <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="rfc" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Comprobante de domicilio, no mayor a tres meses <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="proof_address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">CURP <span class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="curp" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Datos bancarios</label>
                                    <input class="form-control" name="bank_data" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Retención de Infonavit </label>
                                    <input class="form-control" name="infonavit_retention" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Correo electrónico </label>
                                    <input class="form-control" name="email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Teléfono </label>
                                    <input class="form-control" name="phone_number" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Fecha de alta <span class="text-danger">*</span></label>
                                    <input class="form-control" type="date" name="register_date" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Contacto de emergencia </label>
                                    <input class="form-control" name="emergency_contact" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Sueldo (IMSS) </label>
                                    <input class="form-control" name="imss_salary" type="text">
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                    type="button">Cancelar</button>
                                <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete request -->
    <div class="modal custom-modal fade" id="delete_request" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Eliminar solicitud</h3>
                        <p>Esta seguro de eliminar está solicitud?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('imss.deleteRegisterImssRequest') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="request_registed" class="request_delete">
                                    <button type="submit" class="btn btn-primary continue-btn">Eliminar</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" data-bs-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        let menuIcon = "authentication";
    </script>
@endsection
