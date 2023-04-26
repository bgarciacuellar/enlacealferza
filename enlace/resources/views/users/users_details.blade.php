@extends('partials.menu-user')

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
                    <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link active">Perfil</a>
                    </li>
                    <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link">Empresas</a>
                    </li>
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
                            <h3 class="card-title">Empresas a cargo</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($myCompanies as $myCompany)
                                        <tr>
                                            <th scope="row">{{ $myCompany->company_name }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /profile Info Tab -->

        <!-- company Tab -->
        <div class=" pro-overview tab-pane fade show active" id="emp_projects">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Información personal</h3>
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
                            <h3 class="card-title">Información de la compañía</h3>
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
                            <h3 class="card-title">Contacto de emergencia</h3>
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
    </div>
    <!-- /Page Content -->

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
@endsection

@section('js')
    <script>
        let menuIcon = "home";
    </script>
@endsection
