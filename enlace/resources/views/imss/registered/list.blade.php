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
                            <h3 class="pt-4 pb-2">Datos personales</h3>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre del trabajador <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="user_name" type="text" required>
                                </div>
                            </div>
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
                                    <label class="col-form-label">Constancia de seguro social <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="social_security_number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Constancia de situación fiscal <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="certificate_tax_status" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Comprobante de domicilio (no mayor a tres meses) <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="proof_address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Clave Única de Registro de Población (CURP) <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="curp" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Correo electrónico <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="email" type="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Teléfono <span class="text-danger">*</span></label>
                                    <input class="form-control" name="phone_number" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Fecha de alta <span class="text-danger">*</span></label>
                                    <input class="form-control" type="date" name="register_date" required>
                                </div>
                            </div>
                            <h3 class="pt-4 pb-2">Datos bancarios</h3>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre del banco <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="bank_name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Número de cuenta <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="bank_account" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">CLABE interbancaria <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="bank_clabe" type="number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Formato de banco</label>
                                    <input class="form-control" name="bank_format" type="file">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Retención de Infonavit <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="infonavit_retention" type="file" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">¿Crédito de archivo?</label>
                                    <input type="checkbox" name="file_credit_checkbox" class="add_file_credit">
                                    <input class="form-control file_credit" type="file" name="file_credit"
                                        style="display: none;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">¿Crédito FONACOT?</label>
                                    <input type="checkbox" name="fonacot_credit_checkbox" class="add_fonacot_credit">
                                    <input class="form-control fonacot_credit" type="file" name="fonacot_credit"
                                        style="display: none;">
                                </div>
                            </div>
                            <h3 class="pt-4 pb-2">Sueldos y salario</h3>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Sueldo mensual en IMSS <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="imss_monthly_salary" type="number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Salario real mensual <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="monthly_real_salary" type="number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Periodo de pago <span class="text-danger">*</span></label>
                                    <select class="form-control" name="payment_period" required>
                                        <option value="">Selecciona un periodo de pago</option>
                                        <option value="Semanal">Semanal</option>
                                        <option value="Quincenal">Quincenal</option>
                                        <option value="Catorcenal">Catorcenal</option>
                                        <option value="Menusal">Menusal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre de la nómina <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="payroll_name" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de alta <span class="text-danger">*</span></label>
                                    <select class="form-control" name="register_type" required>
                                        <option value="">Selecciona el tipo de alta</option>
                                        <option value="Tradicional">Tradicional</option>
                                        <option value="Mixto">Mixto</option>
                                        <option value="Comisiones">Comisiones</option>
                                    </select>
                                </div>
                            </div>
                            <h3 class="pt-4 pb-2">Contacto de emergencia</h3>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre completo <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="emergency_contact_full_name" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Teléfono <span class="text-danger">*</span></label>
                                    <input class="form-control" name="emergency_contact_phone_number" type="number"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Parentesco <span class="text-danger">*</span></label>
                                    <input class="form-control" name="emergency_contact_relationship" type="text"
                                        required>
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
        $(".add_file_credit").change(function() {
            if ($(this).is(':checked')) {
                $('.file_credit').show();
                $('.file_credit').prop('required', true);
            } else {
                $('.file_credit').hide();
            }
        });
        $(".add_fonacot_credit").change(function() {
            if ($(this).is(':checked')) {
                $('.fonacot_credit').show();
                $('.fonacot_credit').prop('required', true);
            } else {
                $('.fonacot_credit').hide();
            }
        });
    </script>
@endsection
