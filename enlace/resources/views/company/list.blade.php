@if (auth()->user()->hasRoles(['admin']))
    {{ $menu = 'partials.menu' }}
@else
    {{ $menu = 'partials.menu-user' }}
@endif
@extends($menu)

@section('title')
    Empresas
@endsection

@section('content')

    <div class="content container-fluid">
        @if (auth()->user()->hasRoles(['admin']))
            <div class="row filter-row">
                <div class="col-md-9">
                    <form action="{{ route('company.listSearch') }}">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group form-focus mb-0">
                                    <input type="text" class="form-control floating search-name" name="name" required>
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
                <div class="col-md-3">
                    <div class="add-emp-section">
                        <a href="{{ route('company.grid') }}" class="grid-icon"><i class="fas fa-th"></i></a>
                        <a href="{{ route('company.list') }}" class="list-icon active"><i class="fas fa-bars ps-3"></i></a>
                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                            data-bs-target="#add_company"><i class="fas fa-plus"></i> Agregar Empresa</a>
                    </div>
                </div>
            </div>
        @endif

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
                                <th>Empresa</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th class="no-sort">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ route('company.details', $company['id']) }}" class="avatar"><img
                                                    alt="logo"
                                                    src="{{ $company['logo'] ? asset('storage/logos/' . $company['logo']) : asset('img/company-default.jpg') }}"></a>
                                            <a
                                                href="{{ route('company.details', $company['id']) }}">{{ $company['name'] }}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $company['address'] }}</td>
                                    <td>{{ $company['phone_number'] }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i
                                                onclick="getUserId({{ $company['id'] }}, 'delete_company')"
                                                class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


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

    <!-- Delete Employee Modal -->
    <div class="modal custom-modal fade" id="delete_company" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Eliminar empresa</h3>
                        <p>¿Estás seguro de eliminar a esta empresa?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('company.delete') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="company" class="delete_company">
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
        let menuIcon = "home";
    </script>
@endsection
