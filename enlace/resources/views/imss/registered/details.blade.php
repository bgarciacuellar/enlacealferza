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
                        <a href="{{ route('imss.registerImssList') }}">Regresar a todas las altas</a>
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
                    @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Acta de nacimiento <span class="text-danger">*</span></label>
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
                    @else
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label d-block">Acta de nacimiento </label>
                                <a href="{{ asset('storage/imss/' . $registerImss->birth_certificate) }}" target="_blank">
                                    Descargar <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label d-block">INE </label>
                                <a href="{{ asset('storage/imss/' . $registerImss->identification) }}" target="_blank">
                                    Descargar <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label d-block">Número de seguro social, constancia, no número
                                </label>
                                <a href="{{ asset('storage/imss/' . $registerImss->social_security_number) }}"
                                    target="_blank"> Descargar <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label d-block">RFC, constancia, no número </label>
                                <a href="{{ asset('storage/imss/' . $registerImss->rfc) }}" target="_blank">
                                    Descargar <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label d-block">Comprobante de domicilio, no mayor a tres meses
                                </label>
                                <a href="{{ asset('storage/imss/' . $registerImss->proof_address) }}" target="_blank">
                                    Descargar <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label d-block">CURP </label>
                                <a href="{{ asset('storage/imss/' . $registerImss->curp) }}" target="_blank">
                                    Descargar <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                    @endif
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Datos bancarios</label>
                            <input class="form-control" name="bank_data" type="text"
                                value="{{ $registerImss->bank_data }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Retención de Infonavit </label>
                            <input class="form-control" name="infonavit_retention" type="text"
                                value="{{ $registerImss->infonavit_retention }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Correo electrónico </label>
                            <input class="form-control" name="email" type="email"
                                value="{{ $registerImss->email }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Teléfono </label>
                            <input class="form-control" name="phone_number" type="text"
                                value="{{ $registerImss->phone_number }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Fecha de alta <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" name="register_date"
                                value="{{ $registerImss->register_date }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Contacto de emergencia </label>
                            <input class="form-control" name="emergency_contact" type="text"
                                value="{{ $registerImss->emergency_contact }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Sueldo (IMSS) </label>
                            <input class="form-control" name="imss_salary" type="text"
                                value="{{ $registerImss->imss_salary }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Estatus </label>
                            <input class="form-control" type="text" value="{{ $registerImss->statusString }}"
                                disabled>
                        </div>
                    </div>
                    @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Editar</button>
                        </div>
                    @else
                        <div class="row">
                            <div class="submit-section col-lg-6">
                                <form
                                    action="{{ route('company.registerImssAccepted', [$company->id, $registerImss->id]) }}"
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
