@if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
    {{ $menu = 'partials.menu-employee' }}
@elseif(auth()->user()->hasRoles(['admin']))
    {{ $menu = 'partials.menu' }}
@else
    {{ $menu = 'partials.menu-user' }}
@endif
@extends($menu)

@section('title')
    Reportes
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="emp-card ">
                <div class="card-footer col-3">
                    @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                        <a href="{{ route('imss.cancelImssList') }}">Regresar a todas las bajas</a>
                    @else
                        <a href="{{ route('company.details', $company->id) }}">Regresar a {{ $company->name }}</a>
                    @endif
                </div>
            </div>
            <div class="col-md-8 text-center m-auto">
                @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                    <form>
                        @csrf
                @endif
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Nombre completo del colaborador <span
                                    class="text-danger">*</span></label>
                            <input class="form-control" name="name" type="text" value="{{ $cancelsImss->name }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Fecha de baja <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" name="cancel_date"
                                value="{{ $cancelsImss->cancel_date }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Observación <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="notes" type="text">{{ $cancelsImss->notes }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Comprobante de baja <span class="text-danger">*</span></label>
                            <input class="form-control" name="leave_receipt" type="text"
                                value="{{ $cancelsImss->leave_receipt }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Estatus </label>
                            <input class="form-control" type="text" value="{{ $cancelsImss->statusString }}" disabled>
                        </div>
                    </div>
                    @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Editar</button>
                        </div>
                    @else
                        <div class="row">
                            <div class="submit-section col-lg-6">
                                <form action="{{ route('company.cancelImssCanceled', [$company->id, $cancelsImss->id]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary submit-btn">Proceder</button>
                                </form>
                            </div>
                            <div class="submit-section col-lg-6">
                                <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                    type="button">Declinar</button>
                            </div>
                        </div>
                    @endif
                </div>
                @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                    </form>
                @endif
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

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection

@section('js')
    <script>
        let menuIcon = "home";
    </script>
@endsection
