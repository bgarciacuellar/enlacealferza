@extends('partials.menu-employee')

@section('title')
    Detalles de empresa
@endsection

@section('content')
    <div class="card mb-0 pb-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt="logo"
                                        src="{{ $company->logo ? asset('storage/logos/' . $company->logo) : asset('img/company-default.jpg') }}"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">{{ $company->name }}</h3>
                                        <h6 class="text-muted">{{ $company->business_name }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Dirección:</div>
                                            <div class="text">
                                                <span>{{ $company->address ? $company->address : '-' }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Teléfono:</div>
                                            <div class="text">
                                                <span>{{ $company->phone_number ? $company->phone_number : '-' }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Contacto principal:</div>
                                            <div class="text">
                                                <span>{{ $company->email ? $company->email : '-' }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Sitio web:</div>
                                            <div class="text">
                                                {{ $company->website ? $company->website : '-' }}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit"><a data-bs-target="#edit-password" data-bs-toggle="modal" class="edit-icon"
                                href="#"><i class="fas fa-pencil-alt"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card tab-box mt-3">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom pt-3 pb-2">
                    <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Mi Empresa</a>
                    </li>
                    <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Créditos</a>
                    </li>
                    {{-- <li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank &
                        Statutory <small class="text-danger">(Admin Only)</small></a></li> --}}
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- employees -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Historial de archivos <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#records_files"><i
                                        class="fas fa-pencil-alt"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="row">
                                        <div class="title-custom col-6">Acta costitutiva</div>
                                        @if ($company->constitutive_act)
                                            <div class="text-custom col-4">
                                                <a href="{{ asset('storage/records_files/' . $company->constitutive_act) }}"
                                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                            </div>
                                            <div class="col-2 ico-sec"><a href="#" data-bs-toggle="modal"
                                                    onclick="getUserId('constitutive_act', 'delete_file_name')"
                                                    data-bs-target="#delete_file" class="p-0"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @else
                                            <div class="text-custom col-4">
                                                <p class="mb-0"> - </p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="title-custom col-6">Comprobante de situación fiscal</div>
                                        @if ($company->tax_identification_card)
                                            <div class="text-custom col-4">
                                                <a href="{{ asset('storage/records_files/' . $company->tax_identification_card) }}"
                                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                            </div>
                                            <div class="col-2 ico-sec"><a href="#" data-bs-toggle="modal"
                                                    onclick="getUserId('tax_identification_card', 'delete_file_name')"
                                                    data-bs-target="#delete_file" class="p-0"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @else
                                            <div class="text-custom col-4">
                                                <p class="mb-0"> - </p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="title-custom col-6">Comprobante de domicilio</div>
                                        @if ($company->proof_residency)
                                            <div class="text-custom col-4">
                                                <a href="{{ asset('storage/records_files/' . $company->proof_residency) }}"
                                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                            </div>
                                            <div class="col-2 ico-sec"><a href="#" data-bs-toggle="modal"
                                                    onclick="getUserId('proof_residency', 'delete_file_name')"
                                                    data-bs-target="#delete_file" class="p-0"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @else
                                            <div class="text-custom col-4">
                                                <p class="mb-0"> - </p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="title-custom col-6">Registro patronal</div>
                                        @if ($company->employer_registration)
                                            <div class="text-custom col-4">
                                                <a href="{{ asset('storage/records_files/' . $company->employer_registration) }}"
                                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                            </div>
                                            <div class="col-2 ico-sec"><a href="#" data-bs-toggle="modal"
                                                    onclick="getUserId('employer_registration', 'delete_file_name')"
                                                    data-bs-target="#delete_file" class="p-0"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @else
                                            <div class="text-custom col-4">
                                                <p class="mb-0"> - </p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="title-custom col-6">INE representante legal</div>
                                        @if ($company->legal_represantative_identification)
                                            <div class="text-custom col-4">
                                                <a href="{{ asset('storage/records_files/' . $company->legal_represantative_identification) }}"
                                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                            </div>
                                            <div class="col-2 ico-sec"><a href="#" data-bs-toggle="modal"
                                                    onclick="getUserId('legal_represantative_identification', 'delete_file_name')"
                                                    data-bs-target="#delete_file" class="p-0"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @else
                                            <div class="text-custom col-4">
                                                <p class="mb-0"> - </p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="title-custom col-6">Poder del representante legal</div>
                                        @if ($company->legal_represantative_power)
                                            <div class="text-custom col-4">
                                                <a href="{{ asset('storage/records_files/' . $company->legal_represantative_power) }}"
                                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                            </div>
                                            <div class="col-2 ico-sec"><a href="#" data-bs-toggle="modal"
                                                    onclick="getUserId('legal_represantative_power', 'delete_file_name')"
                                                    data-bs-target="#delete_file" class="p-0"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @else
                                            <div class="text-custom col-4">
                                                <p class="mb-0"> - </p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Domicilios secundarios </h3>
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Dirección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($additionalsAddresses as $additionalAddress)
                                        <tr>
                                            <td>{{ $additionalAddress->address }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Contactos </h3>
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($additionalsContacts as $additionalContact)
                                        <tr>
                                            <td>{{ $additionalContact->name }}</td>
                                            <td>{{ $additionalContact->phone_number }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Teléfonos secundarios </h3>
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($additionalsPhoneNumbers as $additionalPhoneNumber)
                                        <tr>
                                            <td>{{ $additionalPhoneNumber->phone_number }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Empleados </h3>
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companyEmployees as $companyEmployee)
                                        <tr>
                                            <td>{{ $companyEmployee['name'] }}</td>
                                            <td>{{ $companyEmployee['email'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Incidencias </h3>
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Número de ticket</th>
                                        <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incidents as $incident)
                                        <tr>
                                            <td>
                                                <a href="{{ route('ticket.details', $incident->id) }}">
                                                    # {{ $incident->id }}
                                                </a>
                                            </td>
                                            <td>{{ $incident->statusString }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- credits Tab -->
        <div class="tab-pane fade" id="emp_projects">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Mis prestamos</h3>
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Créditos totales</th>
                                        <th>Créditos pagados</th>
                                        <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($credits as $credit)
                                        <tr>
                                            <td>${{ number_format($credit->total_amount, 2) }}</td>
                                            <td>${{ number_format($credit->paid, 2) }}</td>
                                            <td>{{ $credit->status ? 'Al corriente' : 'Pagado' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /credits Tab -->

    </div>
    <!-- /Page Content -->

    <!-- Delete file Modal -->
    <div class="modal custom-modal fade" id="delete_file" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Eliminar Archivo</h3>
                        <p>¿Estás seguro de eliminar el archivo?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('company.deleteFiles', $company->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="file" class="delete_file_name">
                                    <button type="submit" class="btn btn-primary continue-btn">Eliminar</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete file Modal -->

    <!-- edit password info -->
    <div id="edit-password" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Contraseña</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('auth.resetPassword') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nueva contraseña</label>
                                    <input class="form-control password" type="password" name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirmar nueva contraseña</label>
                                    <input class="form-control password" type="password" name="confirm_password">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /edit password info -->

    @include('modals.company')
@endsection

@section('js')
    {{-- delete a recurrency service --}}
    <script>
        $(".change_password").change(function() {
            if ($(this).is(':checked')) {
                $('.password').show();
            } else {
                $('.password').hide();
                $('.password').val('');
            }
        });
    </script>
    <script>
        let menuIcon = "home";
    </script>
@endsection
