@extends('partials.menu')

@section('title')
    Lista de usuarios
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-md-8">
                <form action="{{ route('admin.searchUsers') }}">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus mb-0">
                                <input type="text" class="form-control floating search-id" name="employee_id">
                                <label class="focus-label">ID</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus mb-0">
                                <input type="text" class="form-control floating search-name" name="name">
                                <label class="focus-label">Nombre</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="submit" href="#" class="btn btn-success btn-search"><i
                                    class="fas fa-search me-2"></i> Buscar </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="add-emp-section">
                    <a href="{{ route('admin.usersListGrid') }}" class="grid-icon active"><i class="fas fa-th"></i></a>
                    <a href="{{ route('admin.userList') }}" class="list-icon"><i class="fas fa-bars ps-3"></i></a>
                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                        data-bs-target="#add_employee"><i class="fas fa-plus"></i> Agregar Empleado</a>
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
            @foreach ($users as $user)
                <div class="col-md-4 col-lg-4 col-xl-3">
                    <div class="card user-card emp-card">
                        <div class="user-img-sec">
                            <img src="{{ $user['profile_image']
                                ? asset('/storage/profile_images/' . $user['profile_image'])
                                : asset('/img/user-default.jpg/') }}"
                                alt="User Image">
                            <h4>{{ $user['name'] }}</h4>
                            <h5>{{ $user['position'] ? $user['position'] : '-' }}</h5>
                            <h6 class="bg-1">{{ $user['work_area'] ? $user['work_area'] : '-' }}</h6>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        onclick="getUserId({{ $user['id'] }}, 'delete_user_id')"
                                        data-bs-target="#delete_employee">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <h4>ID de empleado <span>{{ $user['employee_id'] ? $user['employee_id'] : '-' }}</span></h4>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.userDetails', $user['id']) }}">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add Employee Modal -->
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Usuario</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.createNewUser') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre(s) <span class="text-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Apellido(s)</label>
                                    <input class="form-control" name="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Id de empleado </label>
                                    <input class="form-control" name="employee_id" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Rol <span class="text-danger">*</span></label>
                                    <select class="form-control" name="role" required>
                                        <option value="">Selecciona el tipo de rol</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Correo electrónico: <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="email" type="email" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Contraseña <span class="text-danger">*</span></label>
                                    <input class="form-control" name="password" type="password" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Confirmar Contraseña <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="confirm_password" type="password" required>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal"
                                aria-label="Close">Cancelar</button>
                            <button type="submit" class="btn btn-primary submit-btn">Agregar</button>
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
                        <h3>Eliminar Usuario</h3>
                        <p>¿Estás seguro? Al eliminar el usuario se perderan todos sus datos.</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('admin.disableUser') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="user_id" class="delete_user_id">
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
    <!-- /Delete Employee Modal -->

@endsection

@section('js')
    <script>
        $('.search-id').keyup(function() {
            console.log("first")
            if ($(this).val().trim() !== '') {
                $('.search-name').attr('disabled', 'disabled');
            } else {
                $('.search-name').removeAttr('disabled');
            }
        });
        $('.search-name').keyup(function() {
            console.log("first")
            if ($(this).val().trim() !== '') {
                $('.search-id').attr('disabled', 'disabled');
            } else {
                $('.search-id').removeAttr('disabled');
            }
        });
    </script>
@endsection
