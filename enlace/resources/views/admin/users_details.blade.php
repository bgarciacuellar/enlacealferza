@extends('partials.menu')

@section('title')
    Detalles de usuario
@endsection

@section('content')
    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt=""
                                        src="{{ $additionalUserInfo->profile_image ? asset('storage/profile_images/' . $additionalUserInfo->profile_image) : asset('/img/user-default.jpg/') }}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">
                                            {{ $user->name . ' ' . $additionalUserInfo->last_name }}
                                        </h3>
                                        <h6 class="text-muted">
                                            {{ $additionalUserInfo->position ? $additionalUserInfo->position : '-' }}
                                        </h6>
                                        <small
                                            class="text-muted">{{ $additionalUserInfo->work_area ? $additionalUserInfo->work_area : '-' }}</small>
                                        <div class="staff-id">ID : {{ $user->employee_id ? $user->employee_id : '-' }}</div>
                                        <div class="small doj text-muted">Fecha de ingreso :
                                            {{ $additionalUserInfo->entry_date ? $additionalUserInfo->entry_date : '-' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Teléfono:</div>
                                            <div class="text"><a
                                                    href="">{{ $additionalUserInfo->phone_number ? $additionalUserInfo->phone_number : '-' }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Correo electrónico: </div>
                                            <div class="text"><a href="">{{ $user->email }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Reporta a:</div>
                                            <div class="text">
                                                <div class="avatar-box">
                                                    <div class="avatar avatar-xs">
                                                        <img src="{{ $additionalUserInfo->boss_image ? asset('storage/profile_images/' . $additionalUserInfo->boss_image) : asset('img/user-default.jpg') }}"
                                                            alt="image-jefe">
                                                    </div>
                                                </div>
                                                <span>
                                                    {{ $additionalUserInfo->immediate_boss ? $additionalUserInfo->boss_name : '-' }}
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit"><a data-bs-target="#main_info" data-bs-toggle="modal" class="edit-icon"
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
                    <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link active">Perfil</a>
                    </li>
                    <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link">Empresas</a>
                    </li>
                    {{-- <li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank &
                        Statutory <small class="text-danger">(Admin Only)</small></a></li> --}}
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- profile Tab -->
        <div id="emp_profile" class="tab-pane fade">
            <div class="row">
                <div class="col-md-12 mx-auto d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Empresas a cargo <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#assign_company"><i
                                        class="fas fa-plus-circle"></i></a></h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Desasignar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userCompanies as $userCompany)
                                        <tr>
                                            <th scope="row">{{ $userCompany->company_name }}</th>
                                            <td class="text-center">
                                                <form
                                                    action="{{ route('admin.unassignCompany', [$userCompany->user_id, $userCompany->company_id]) }}"
                                                    method="POST" class="unassign-company">
                                                    @csrf
                                                    <button type="submit" class="button-icon">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#emergency_contact_modal"><i class="fas fa-pencil-alt"></i></a></h3>
                        <h5 class="section-title">Primary</h5>
                        <ul class="personal-info">
                            <li>
                                <div class="title">Name</div>
                                <div class="text">John Doe</div>
                            </li>
                            <li>
                                <div class="title">Relationship</div>
                                <div class="text">Father</div>
                            </li>
                            <li>
                                <div class="title">Phone </div>
                                <div class="text">9876543210, 9876543210</div>
                            </li>
                        </ul>
                        <hr>
                        <h5 class="section-title">Secondary</h5>
                        <ul class="personal-info">
                            <li>
                                <div class="title">Name</div>
                                <div class="text">Karen Wills</div>
                            </li>
                            <li>
                                <div class="title">Relationship</div>
                                <div class="text">Brother</div>
                            </li>
                            <li>
                                <div class="title">Phone </div>
                                <div class="text">9876543210, 9876543210</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            </div>
            {{--
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Education Informations <a href="#" class="edit-icon"
                                data-bs-toggle="modal" data-bs-target="#education_info"><i
                                    class="fas fa-pencil-alt"></i></a></h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">International College of Arts and
                                                Science (UG)</a>
                                            <div>Bsc Computer Science</div>
                                            <span class="time">2000 - 2003</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">International College of Arts and
                                                Science (PG)</a>
                                            <div>Msc Computer Science</div>
                                            <span class="time">2000 - 2003</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#experience_info"><i class="fas fa-pencil-alt"></i></a></h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Web Designer at Ron-tech</a>
                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
        <!-- /profile Info Tab -->

        <!-- company Tab -->
        <div class=" pro-overview tab-pane fade show active" id="emp_projects">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Información personal <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#profile_info"><i
                                        class="fas fa-pencil-alt"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Fecha de nacimiento</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->birthday ? $additionalUserInfo->birthday : '-' }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Genero</div>
                                    <div class="text">
                                        @if ($additionalUserInfo->gender)
                                            {{ $additionalUserInfo->gender == 'female' ? 'Mujer' : 'Hombre' }}
                                        @else
                                            -
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Estado civil</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->civil_status ? strtoupper($additionalUserInfo->civil_status) : '-' }}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Información de la compañía <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#company_info"><i
                                        class="fas fa-pencil-alt"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Compañía</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->company ? $additionalUserInfo->company : '-' }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Oficina</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->office ? $additionalUserInfo->office : '-' }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Municipio</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->municipality ? $additionalUserInfo->municipality : '-' }}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Contacto de emergencia <a href="#" class="edit-icon"
                                    data-bs-toggle="modal" data-bs-target="#emergency_contact"><i
                                        class="fas fa-pencil-alt"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Nombre</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->emergency_contact_name ? $additionalUserInfo->emergency_contact_name : '-' }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Teléfono</div>
                                    <div class="text">
                                        {{ $additionalUserInfo->emergency_contact_phone_number
                                            ? $additionalUserInfo->emergency_contact_phone_number
                                            : '-' }}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /company Tab -->

        <!-- Bank Statutory Tab -->
        {{-- <div class="tab-pane fade" id="bank_statutory">
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
    </div> --}}
        <!-- /Bank Statutory Tab -->

    </div>
    <!-- /Page Content -->

    <!-- edit main info -->
    <div id="main_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Información</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.updateUserMainInfo', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nombre(s) <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $user->name }}"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Apellido(s)</label>
                                            <input type="text" class="form-control"
                                                value="{{ $additionalUserInfo->last_name }}" name="last_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input type="text" class="form-control" value="{{ $user->employee_id }}"
                                                name="employee_id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo electrónico</label>
                                            <input type="email" class="form-control" value="{{ $user->email }}"
                                                name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Rol <span class="text-danger">*</span></label>
                                            <select class="form-control update-employee-role" name="role" required>
                                                <option value="">Selecciona el tipo de rol</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role }}"
                                                        {{ $user->role == $role ? 'selected' : null }}>
                                                        {{ ucfirst($role) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Area de trabajo</label>
                                    <input type="text" class="form-control"
                                        value="{{ $additionalUserInfo->work_area }}" name="work_area">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Posición</label>
                                    <input type="text" class="form-control"
                                        value="{{ $additionalUserInfo->position }}" name="position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control"
                                        value="{{ $additionalUserInfo->phone_number }}" name="phone_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Reporta a</label>
                                    <select name="immediate_boss" class="form-control">
                                        <option value="">Selecciona una opción</option>
                                        @foreach ($bosses as $boss)
                                            <option value="{{ $boss->id }}"
                                                {{ $additionalUserInfo->immediate_boss == $boss->id ? 'selected' : null }}>
                                                {{ $boss->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha de entrada</label>
                                    <input type="date" class="form-control"
                                        value="{{ $additionalUserInfo->entry_date }}" name="entry_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto de perfil</label>
                                    <input class="form-control" type="file" name="profile_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>¿Cambiar contraseña?</label>
                                    <input type="checkbox" name="change_password" class="change_password">
                                    <input class="form-control password" type="password" name="password"
                                        style="display:none;">
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
    <!-- /edit main info -->

    <!-- edit profile info -->
    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar información personal</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.updateUserPersonalInfo', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input class="form-control" type="date"
                                                value="{{ $additionalUserInfo->birthday }}" name="birthday">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Genero</label>
                                            <select class="select form-control" name="gender">
                                                <option value="male"
                                                    {{ $additionalUserInfo->gender == 'male' ? 'selected' : null }}>
                                                    Hombre</option>
                                                <option value="female"
                                                    {{ $additionalUserInfo->gender == 'female' ? 'selected' : null }}>
                                                    Mujer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Estado civil</label>
                                            <select class="select form-control" name="civil_status">
                                                <option value="casado"
                                                    {{ $additionalUserInfo->civil_status == 'casado' ? 'selected' : null }}>
                                                    Casado</option>
                                                <option value="soltero"
                                                    {{ $additionalUserInfo->civil_status == 'soltero' ? 'selected' : null }}>
                                                    Soltero</option>
                                                <option value="viudo"
                                                    {{ $additionalUserInfo->civil_status == 'viudo' ? 'selected' : null }}>
                                                    Viudo</option>
                                            </select>
                                        </div>
                                    </div>

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
    <!-- /edit profile info -->

    <!-- edit company info -->
    <div id="company_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar información de compañía</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.updateUserCompanyInfo', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Compañía <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $user->company }}"
                                                name="company" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Oficina</label>
                                            <input type="text" class="form-control"
                                                value="{{ $additionalUserInfo->office }}" name="office">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Municipio</label>
                                            <input class="form-control" type="text"
                                                value="{{ $additionalUserInfo->municipality }}" name="municipality">
                                        </div>
                                    </div>
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
    <!-- /edit company info -->

    <!-- edit emergency contact -->
    <div id="emergency_contact" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contacto de emergencia</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.updateUserEmergencyContact', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nombre completo <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ $additionalUserInfo->emergency_contact_name }}"
                                                name="emergency_contact_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input type="text" class="form-control"
                                                value="{{ $additionalUserInfo->emergency_contact_phone_number }}"
                                                name="emergency_contact_phone_number">
                                        </div>
                                    </div>
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
    <!-- /edit emergency contact -->

    <!-- assign company -->
    <div id="assign_company" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Asignar empresa</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.assignToCompany', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Empresas</label>
                                    <select name="company" class="form-control" required>
                                        <option value="">Selecciona una opción</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Asignar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /assign company -->
@endsection

@section('js')
    {{-- delete a recurrency service --}}
    <script>
        $('.unassign-company').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Desasignar Empresa',
                text: "¿Estas seguro(a) que quieres desasignar esta empresa?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, desasignar',
                cancelButtonText: 'Regresar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
        $(".change_password").change(function() {
            if ($(this).is(':checked')) {
                $('.password').show();
            } else {
                $('.password').hide();
                $('.password').val('');
            }
        });
    </script>
@endsection
