@extends('partials.menu')

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
                                    {{--<small class="text-muted">Web Designer</small>
                                    <div class="staff-id">Employee ID : FT-0001</div>
                                    <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                    <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send
                                            Message</a></div> --}}
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Dirección:</div>
                                        <div class="text">
                                            <span>{{ $company->address ? $company->address : '-'}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Teléfono:</div>
                                        <div class="text">
                                            <span>{{ $company->phone_number ? $company->phone_number : '-'}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Contacto principal:</div>
                                        <div class="text">
                                            <span>{{ $company->email ? $company->email : '-'}}</span>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="title">Birthday:</div>
                                        <div class="text">{{ $additionalUserInfo->birthday ?
                                            $additionalUserInfo->birthday : '-' }}</div>
                                    </li>
                                    <li>
                                        <div class="title">Address:</div>
                                        <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Gender:</div>
                                        <div class="text">{{ $additionalUserInfo->gender ? $additionalUserInfo->gender :
                                            '-' }}</div>
                                    </li> --}}
                                    {{-- <li>
                                        <div class="title">Reports to:</div>
                                        <div class="text">
                                            <div class="avatar-box">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                </div>
                                            </div>
                                            <a href="profile.html">
                                                Jeffery Lalor
                                            </a>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon"
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
                {{--<li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank &
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
                                <div class="title">Acta costitutiva</div>
                                <div class="text"><a
                                        href="{{ asset('storage/records_files/' . $company->constitutive_act) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                            </li>
                            <li>
                                <div class="title">Comprobante de situación fiscal</div>
                                <div class="text"><a
                                        href="{{ asset('storage/records_files/' . $company->tax_identification_card) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                            </li>
                            <li>
                                <div class="title">Comprobante de domicilio</div>
                                <div class="text"><a
                                        href="{{ asset('storage/records_files/' . $company->proof_residency) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                            </li>
                            <li>
                                <div class="title">Registro patronal</div>
                                <div class="text"><a
                                        href="{{ asset('storage/records_files/' . $company->employer_registration) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                            </li>
                            <li>
                                <div class="title">INE representante legal</div>
                                <div class="text"><a
                                        href="{{ asset('storage/records_files/' . $company->legal_represantative_identification) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                            </li>
                            <li>
                                <div class="title">Poder del representante legal</div>
                                <div class="text"><a
                                        href="{{ asset('storage/records_files/' . $company->legal_represantative_power) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Domicilios secundarios <a href="#" class="edit-icon"
                                data-bs-toggle="modal" data-bs-target="#create_additional_address"><i
                                    class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Dirección</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($additionalsAddresses as $additionalAddress)
                                <tr>
                                    <td>{{ $additionalAddress->address }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="getAdditinalAddressData({{ json_encode($additionalAddress) }})"
                                            data-bs-target="#update_additional_address"><i class="fas fa-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" class="text-danger ps-3"
                                            onclick="getUserId({{ $additionalAddress['id'] }}, 'delete_additional_address_id')"
                                            data-bs-target="#delete_additional_address"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
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
                        <h3 class="card-title">Correos electrónicos secundarios <a href="#" class="edit-icon"
                                data-bs-toggle="modal" data-bs-target="#create_additional_email"><i
                                    class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Correo electrónico</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($additionalsEmails as $additionalEmail)
                                <tr>
                                    <td>{{ $additionalEmail->email }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="getAdditinalEmailData({{ json_encode($additionalEmail) }})"
                                            data-bs-target="#update_additional_email"><i class="fas fa-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" class="text-danger ps-3"
                                            onclick="getUserId({{ $additionalEmail['id'] }}, 'delete_additional_email_id')"
                                            data-bs-target="#delete_additional_email"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
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
                        <h3 class="card-title">Contactos <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#create_additional_contact"><i class="fas fa-plus-circle"></i></a>
                        </h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($additionalsContacts as $additionalContact)
                                <tr>
                                    <td>{{ $additionalContact->name }}</td>
                                    <td>{{ $additionalContact->phone_number }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="getAdditionalContactData({{ json_encode($additionalContact) }})"
                                            data-bs-target="#update_additional_contact"><i class="fas fa-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" class="text-danger ps-3"
                                            onclick="getUserId({{ $additionalContact['id'] }}, 'delete_additional_contact_id')"
                                            data-bs-target="#delete_additional_contact"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
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
                        <h3 class="card-title">Teléfonos secundarios <a href="#" class="edit-icon"
                                data-bs-toggle="modal" data-bs-target="#create_additional_phone_number"><i
                                    class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($additionalsPhoneNumbers as $additionalPhoneNumber)
                                <tr>
                                    <td>{{ $additionalPhoneNumber->phone_number }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="getAdditinalPhoneNumberData({{ json_encode($additionalPhoneNumber) }})"
                                            data-bs-target="#update_additional_phone_number"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" class="text-danger ps-3"
                                            onclick="getUserId({{ $additionalPhoneNumber['id'] }}, 'delete_additional_phone_number_id')"
                                            data-bs-target="#delete_additional_phone_number"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
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
                        <h3 class="card-title">Empleados <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#create_employee"><i class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companyEmployees as $companyEmployee)
                                <tr>
                                    <td>{{ $companyEmployee['name'] }}</td>
                                    <td>{{ $companyEmployee['email'] }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="geEmployeeData({{ json_encode($companyEmployee) }})"
                                            data-bs-target="#update_employee"><i class="fas fa-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" class="text-danger ps-3"
                                            onclick="getUserId({{ $companyEmployee['id'] }}, 'delete_user_id')"
                                            data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                    </td>
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
                        <h3 class="card-title">Incidencias <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#create_incident"><i class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Estatus de incidencias</th>
                                    <th>Fecha limite de incidencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidents as $incident)
                                <tr>
                                    <td>{{ $incident->statusString }}</td>
                                    <td>{{ $incident->limit_date->format('d/m/Y') }}</td>
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
            <div class="col-md-8 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Mis prestamos</h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Créditos totales</th>
                                    <th>Créditos pagados</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($credits as $credit)
                                <tr>
                                    <td>${{ number_format($credit->total_amount, 2) }}</td>
                                    <td>${{ number_format($credit->paid, 2) }}</td>
                                    <td>{{ $credit->status ? 'Al corriente' : 'Pagado'}}</td>
                                    <td>
                                        <a href="{{ route('company.creditDetails', $credit->id) }}"><i
                                                class="far fa-eye"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_credit"
                                            class="text-danger ps-3"
                                            onclick="getUserId({{ $credit->id }}, 'delete_credit_id')"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Autorizar nuevo crédito</h3>
                        <div class="row">
                            <div class="col-11 justify-content-center">
                                <form action="{{ route('company.createNewCredit', $company->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>¿Que cantidad necesita? <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="total_amount" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Plazo a diferir <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="due_date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Comentarios <span class="text-danger">*</span></label>
                                        <textarea name="comment" class="form-control" id="" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 submit-btn">Solicitar
                                        crédito</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /credits Tab -->

    <!-- Bank Statutory Tab -->
    <div class="tab-pane fade" id="bank_statutory">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title"> Basic Salary Information</h3>
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select salary basis type</option>
                                    <option>Hourly</option>
                                    <option>Daily</option>
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Salary amount <small class="text-muted">per
                                        month</small></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" placeholder="Type your salary amount"
                                        value="0.00">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Payment type</label>
                                <select class="select">
                                    <option>Select payment type</option>
                                    <option>Bank transfer</option>
                                    <option>Check</option>
                                    <option>Cash</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="card-title"> PF Information</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">PF contribution</label>
                                <select class="select">
                                    <option>Select PF contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">PF No. <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select PF contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Employee PF rate</label>
                                <select class="select">
                                    <option>Select PF contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select additional rate</option>
                                    <option>0%</option>
                                    <option>1%</option>
                                    <option>2%</option>
                                    <option>3%</option>
                                    <option>4%</option>
                                    <option>5%</option>
                                    <option>6%</option>
                                    <option>7%</option>
                                    <option>8%</option>
                                    <option>9%</option>
                                    <option>10%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Total rate</label>
                                <input type="text" class="form-control" placeholder="N/A" value="11%">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Employee PF rate</label>
                                <select class="select">
                                    <option>Select PF contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select additional rate</option>
                                    <option>0%</option>
                                    <option>1%</option>
                                    <option>2%</option>
                                    <option>3%</option>
                                    <option>4%</option>
                                    <option>5%</option>
                                    <option>6%</option>
                                    <option>7%</option>
                                    <option>8%</option>
                                    <option>9%</option>
                                    <option>10%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Total rate</label>
                                <input type="text" class="form-control" placeholder="N/A" value="11%">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h3 class="card-title"> ESI Information</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">ESI contribution</label>
                                <select class="select">
                                    <option>Select ESI contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select ESI contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Employee ESI rate</label>
                                <select class="select">
                                    <option>Select ESI contribution</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select additional rate</option>
                                    <option>0%</option>
                                    <option>1%</option>
                                    <option>2%</option>
                                    <option>3%</option>
                                    <option>4%</option>
                                    <option>5%</option>
                                    <option>6%</option>
                                    <option>7%</option>
                                    <option>8%</option>
                                    <option>9%</option>
                                    <option>10%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Total rate</label>
                                <input type="text" class="form-control" placeholder="N/A" value="11%">
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Bank Statutory Tab -->

</div>
<!-- /Page Content -->

<!-- update company -->
<div id="profile_info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar datos</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre <span class="text-danger">*</span></label>
                                <input class="form-control" name="name" type="text" value="{{ $company->name }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Razón social </label>
                                <input class="form-control" name="business_name" type="text"
                                    value="{{ $company->business_name }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">RFC </label>
                                <input class="form-control" name="rfc" type="text" value="{{ $company->rfc }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Dirección</label>
                                <input class="form-control" name="address" type="text" value="{{ $company->address }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Teléfono</label>
                                <input class="form-control" name="phone_number" type="text"
                                    value="{{ $company->phone_number }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Contacto principal</label>
                                <input class="form-control" name="email" type="email" value="{{ $company->email }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Logo</label>
                                <input class="form-control" name="logo" type="file" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                            type="button">Cancelar</button>
                        <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Create employee -->
<div id="create_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Usuario</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.createEmployee', $company->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo electrónico: <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol <span class="text-danger">*</span></label>
                                <select class="form-control" name="role" required>
                                    <option value="">Selecciona el tipo de rol</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role }}">{{ $role == "cliente" ? "Capturista + Validador" :
                                        ucfirst($role) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contraseña <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- update employee -->
<div id="update_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Empleado</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.udpateEmployee', $company->id) }}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control update-employee-id" name="user_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control update-employee-name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo electrónico: <span class="text-danger">*</span></label>
                                <input class="form-control update-employee-email" type="text" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol <span class="text-danger">*</span></label>
                                <select class="form-control update-employee-role" name="role" required>
                                    <option value="">Selecciona el tipo de rol</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                                    @endforeach
                                </select>
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

<!-- create new ticket -->
<div id="create_incident" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Solicitar Incidencias</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ticket.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Empresa<span class="text-danger">*</span></label>
                                <select class="form-control" name="company" required>
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha limite de incidencia <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="limit_date">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Tipo de nómina <span class="text-danger">*</span></label>
                                <select class="form-control" name="category" required>
                                    <option value="">Selecciona una opción</option>
                                    @foreach ($payrolls as $payroll)
                                    <option value="{{ $payroll->type }}">{{ $payroll->type . " - " . $payroll->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Periodo de pago <span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_period" required>
                                    <option value="">Selecciona una opción</option>
                                    @foreach ($paymentsPeriod as $paymentPeriod)
                                    <option value="{{ $paymentPeriod }}">{{ ucfirst($paymentPeriod) }}
                                    </option>
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
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                            type="button">Cancelar</button>
                        <button type="submit" class="btn btn-primary submit-btn">Solicitar incidencias</button>
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
                    <h3>Eliminar Empleado</h3>
                    <p>Estas seguro de eliminar a este empleado?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('company.deleteEmployee') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="user_id" class="delete_user_id">
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

<!-- Delete credit Modal -->
<div class="modal custom-modal fade" id="delete_credit" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Eliminar crédito</h3>
                    <p>¿Estas seguro de eliminar este crédito?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('company.deleteCredit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="credit_id" class="delete_credit_id">
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

@include('modals.company')

@endsection