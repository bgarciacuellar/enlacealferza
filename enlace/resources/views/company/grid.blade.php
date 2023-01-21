@extends('partials.menu')

@section('title')
    Empresas
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-md-8">
                <form action="{{ route('company.listSearch') }}">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus mb-0">
                                <input type="text" class="form-control floating search-name" name="name">
                                <label class="focus-label">Nombre de la empresa</label>
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
                    <div class="add-emp-section">
                        <a href="{{ route('company.grid') }}" class="grid-icon active"><i class="fas fa-th"></i></a>
                        <a href="{{ route('company.list') }}" class="list-icon"><i class="fas fa-bars ps-3"></i></a>
                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                            data-bs-target="#add_company"><i class="fas fa-plus"></i> Agregar Empresa</a>
                    </div>
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
            @foreach ($companies as $company)
                <div class="col-md-4 col-lg-4 col-xl-3">
                    <div class="card user-card emp-card">
                        <div class="user-img-sec">
                            <img src="{{ $company->logo ? asset('/storage/logos/' . $company->logo) : asset('/img/company-default.jpg') }}"
                                alt="Logo">
                            <h4>{{ $company->name }}</h4>
                            <h5>{{ $company->address ? $company->address : '-' }}</h5>
                            <h6 class="bg-1">{{ $company->phone_number ? $company->phone_number : '-' }}</h6>

                            {{-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        onclick="getUserId({{ $user['id'] }}, 'delete_user_id')"
                                        data-bs-target="#delete_employee">Delete</a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('company.details', $company->id) }}">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add company -->
    <div id="add_company" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Empresa</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('company.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre de la empresa <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Razón social</label>
                                    <input class="form-control" name="business_name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">RFC</label>
                                    <input class="form-control" name="rfc" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Dirección</label>
                                    <input class="form-control" name="address" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Teléfono</label>
                                    <input class="form-control" name="phone_number" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Contacto principal</label>
                                    <input class="form-control" name="email" type="email">
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
                            <button type="submit" class="btn btn-primary submit-btn">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add company -->

@endsection
