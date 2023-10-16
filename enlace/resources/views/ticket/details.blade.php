@if (auth()->user()->role != 'admin')
    {{ $menu = 'partials.menu-user' }}
@else
    {{ $menu = 'partials.menu' }}
@endif
@extends($menu)



@section('title')
    Detalles de nóminas
@endsection

@section('content')
    <div class="mb-4 card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        {{-- <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img alt="" src="{{ asset('img/profiles/avatar-02.jpg')}}"></a>
                        </div>
                    </div> --}}
                        <div class="profile-basic ms-0">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">Creado Por:</h3>
                                        <h6 class="text-muted">
                                            {{ $ticketowner ? $ticketowner->name . ' ' . $ticketownerAdditionalInfo->last_name : 'Usuario de alferza' }}
                                            <br>
                                            <span
                                                style="display: inline-block">{{ $ticketowner ? $ticketownerAdditionalInfo->work_area : '' }}</span>
                                        </h6>
                                        <small
                                            class="text-muted">{{ $ticketowner ? $ticketownerAdditionalInfo->position : '' }}</small>
                                        <div class="staff-id">ID : {{ $ticketowner ? $ticketowner->employee_id : '' }}</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        @if ($ticket->category)
                                            <li>
                                                <div class="title">Tipo de nómina:</div>
                                                <div class="text"><a href="">{{ $ticket->category }}</a></div>
                                            </li>
                                        @endif

                                        @if ($ticket->limit_date)
                                            <li>
                                                <div class="title">Fecha Limite de nómina:</div>
                                                <div class="text">{{ $ticket->limit_date->format('d/m/Y') }}</div>
                                            </li>
                                        @endif
                                        <li>
                                            <div class="title">Empresa:</div>
                                            <div class="text">{{ $company->name }}</div>
                                        </li>
                                        {{-- <li>
                                        <div class="title">Estatus:</div>
                                        <div class="text">{{ $ticket->status }}</div>
                                    </li> --}}
                                        <li>
                                            <div class="title">Periodo de pago:</div>
                                            <div class="text">{{ ucfirst($ticket->payment_period) }}</div>
                                        </li>
                                        @if ($ticket->master_file)
                                            <li>
                                                <div class="title">Archivo maestro:</div>
                                                <div class="text btn-master-file" style="cursor: pointer;"><a
                                                        href="{{ asset('storage/archivos_maestro/' . $ticket->master_file) }}"
                                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                                            </li>
                                        @endif
                                        @if ($ticket->master_file)
                                            <li>
                                                <div class="title">Aplicar créditos autorizado</div>
                                                <div class="text btn-master-file" style="cursor: pointer;"><a
                                                        data-bs-target="#use_credits" data-bs-toggle="modal"> Aplicar <i
                                                            class="fas fa-coins"></i></a></div>
                                            </li>
                                        @endif
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
                        <div class="pro-edit"><a data-bs-target="#edit_ticket" data-bs-toggle="modal" class="edit-icon"
                                href="#"><i class="fas fa-pencil-alt"></i></a></div>
                    </div>
                    <div class="col-12">
                        <h4>Estatus actual: <strong>{{ $ticket->statusString }}</strong></h4>
                        @if ($ticket->status >= 9 && $ticket->status < 11)
                            <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#step_back">Agregar
                                observaciones</button>
                        @endif
                        @if ($ticket->status < 11)
                            <form action="{{ route('ticket.nextStep', $ticket->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success">{{ $ticket->statusButton }}</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card tab-box mt-3">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom pt-3 pb-2">
                    <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Archivos</a>
                    </li>
                    <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Comentarios</a>
                    </li>
                    @if ($ticket->extraordinario_file)
                        <li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Extraordinario
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-6">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Historial de archivos</h3>
                            <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                @foreach ($ticketFilesHistory as $ticketFileHistory)
                                    <div class="col-6 align-self-center">
                                        <span> Creado el: <strong>{{ $ticketFileHistory['created_at'] }}</strong> por:
                                            <strong>{{ $ticketFileHistory['user_name'] }} -
                                                {{ $ticketFileHistory['role'] }}</strong></span>
                                    </div>
                                    <div class="col-6 pb-3">
                                        <a class="download_catega_file"
                                            href="{{ asset('storage/incidencias/' . $ticketFileHistory['file']) }}"
                                            target="_blank"><button class="btn btn-primary mt-3 submit-btn">Descargar <i
                                                    class="fas fa-download"></i></button>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Archivo</h3>
                            <div class="row">
                                <div class="col-7">
                                    @if (count($ticketFilesHistory) > 0)
                                        <form action="{{ route('ticket.uploadFile', $ticket->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <label class="col-form-label">Subir nuevo archivo<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="file" required>
                                            <button type="submit" class="btn btn-primary mt-3 submit-btn">Subir</button>
                                        </form>
                                    @else
                                        <h3 class="text-center">En espera de que el cliente suba su archivo</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($ticket->status >= 4)
                @if ($ticket->ticket_type == 'nómina')
                    <div class="row">
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Archivo Pre-factura</h3>
                                    <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                        {{-- <div class="col-6 align-self-center">
                                <span> Creado el: <strong>{{ $ticketFileHistory['created_at'] }}</strong> por:
                                    <strong>{{ $ticketFileHistory['user_name'] }}</strong></span>
                            </div> --}}
                                        <div class="col-6 pb-3">
                                            @if ($ticket->preinvoices)
                                                <a href="{{ asset('storage/preinvoice/' . $ticket->preinvoices) }}"
                                                    target="_blank"><button
                                                        class="btn btn-primary mt-3 submit-btn">Descargar
                                                        <i class="fas fa-download"></i></button>
                                                </a>
                                            @else
                                                <h2 class="ps-4 pt-4">No se ha subido ningún archivo</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Archivo Pre-factura</h3>
                                    <div class="row">
                                        <div class="col-7">
                                            @if ($ticket->status == 5)
                                                <h3 class="text-center">Nómina pagada</h3>
                                            @else
                                                <form action="{{ route('ticket.uploadPreinvoice', $ticket->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <label class="col-form-label">Subir nuevo archivo<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="preinvoice"
                                                        required>
                                                    <button type="submit"
                                                        class="btn btn-primary mt-3 submit-btn">Subir</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-6">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Recibos de nómina</h3>
                                <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                    <div class="col-6 pb-3">
                                        @if ($ticket->payroll_receipt)
                                            <a href="{{ asset('storage/payroll_receipt/' . $ticket->payroll_receipt) }}"
                                                target="_blank"><button class="btn btn-primary mt-3 submit-btn">Descargar
                                                    <i class="fas fa-download"></i></button>
                                            </a>
                                        @else
                                            <h2 class="ps-4 pt-4">No se ha subido ningún archivo</h2>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Recibos de nómina</h3>
                                <div class="row">
                                    <div class="col-7">
                                        <form action="{{ route('ticket.uploadPayrollReceipt', $ticket->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label class="col-form-label">Subir nuevos recibos de nómina<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="payroll_receipt" required>
                                            <button type="submit" class="btn btn-primary mt-3 submit-btn">Subir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($ticket->status >= 7)
                <div class="row ">
                    @if ($ticket->ticket_type == 'nómina')
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Comprobante de pago de la pre-factura</h3>
                                    <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                        <div class="col-12 pb-3 text-center">
                                            @if ($ticket->payment_receipt)
                                                <a href="{{ asset('storage/payment_receipt/' . $ticket->payment_receipt) }}"
                                                    target="_blank"><button
                                                        class="btn btn-primary mt-3 submit-btn">Descargar <i
                                                            class="fas fa-download"></i></button>
                                                </a>
                                            @else
                                                <h2 class="ps-4 pt-4">No se ha subido ningún archivo</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            @if ($ticket->status >= 9)
                <div class="row ">
                    @if ($ticket->ticket_type == 'nómina')
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Kardex</h3>
                                    <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                        <div class="col-12 pb-3 text-center">
                                            @if ($ticket->kardex)
                                                <a href="{{ asset('storage/kardex/' . $ticket->kardex) }}"
                                                    target="_blank"><button
                                                        class="btn btn-primary mt-3 submit-btn">Descargar <i
                                                            class="fas fa-download"></i></button>
                                                </a>
                                            @else
                                                <h2 class="ps-4 pt-4">No se ha subido ningún archivo</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Kardex</h3>
                                    <div class="row">
                                        <div class="col-7">
                                            <form action="{{ route('ticket.uploadKardex', $ticket->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <label class="col-form-label">Subir kardex<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control" name="kardex" required>
                                                <button type="submit"
                                                    class="btn btn-primary mt-3 submit-btn">Subir</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </div>
        <!-- /Profile Info Tab -->

        <!-- comments Tab -->
        <div class="tab-pane fade" id="emp_projects">
            <div class="row">
                <div class="col-6">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Comentarios</h3>
                            <div class="row" style=" max-height: 400px; overflow: auto;">
                                <div class="col-11">
                                    @foreach ($ticketComments as $ticketComment)
                                        <p>
                                            <strong>{{ $ticketComment['user_name'] . ' - ' . $ticketComment['created_at'] }}:
                                            </strong>
                                            {{ $ticketComment['comment'] }}
                                            @if ($ticketComment['file'])
                                                <div class="col-6 pb-3">
                                                    <a href="{{ asset('storage/payroll_observation/' . $ticketComment['file']) }}"
                                                        target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                                </div>
                                            @endif
                                        <div style="height: 2px; background:#7870704c"></div>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Agregar Comentario</h3>
                            <div class="row">
                                <div class="col-11 justify-content-center">
                                    <form action="{{ route('ticket.addComment', $ticket->id) }}" method="POST">
                                        @csrf
                                        <textarea name="comment" class="form-control" id="" cols="30" rows="10" required></textarea>
                                        <button type="submit" class="btn btn-primary mt-3 submit-btn">Agregar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Projects Tab -->

        <!-- Bank Statutory Tab -->
        @if ($ticket->extraordinario_file)
            <div class="tab-pane fade" id="bank_statutory">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-4 pb-3">
                                <h3 class="card-title">Archivo extraordinario</h3>
                                <a href="{{ asset('storage/extraordinario/' . $ticket->extraordinario_file) }}"
                                    target="_blank"><button class="btn btn-primary mt-3 submit-btn">Descargar <i
                                            class="fas fa-download"></i></button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-8 pb-3">
                                <h3 class="card-title">Comentario extraordinario</h3>
                                <p>{{ $ticket->observations }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
        <!-- /Bank Statutory Tab -->

    </div>

    <!-- /Page Content -->

    <!-- update ticket -->
    <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Ticket</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            @if ($ticket->ticket_type == 'nómina')
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Fecha limite de nómina <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="date"
                                            value="{{ $ticket->limit_date->format('Y-m-d') }}" name="limit_date"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Tipo de nómina <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="category" required>
                                            <option value="">Selecciona una opción</option>
                                            @foreach ($payrolls as $payroll)
                                                <option value="{{ $payroll->type }}"
                                                    {{ $ticket->category == $payroll->type ? 'selected' : null }}>
                                                    {{ $payroll->type . ' - ' . $payroll->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Periodo de pago <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="payment_period" required>
                                        <option value="">Selecciona una opción</option>
                                        @foreach ($paymentsPeriod as $paymentPeriod)
                                            <option value="{{ $paymentPeriod }}"
                                                {{ $ticket->payment_period == $paymentPeriod ? 'selected' : null }}>
                                                {{ ucfirst($paymentPeriod) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                type="button">Cancelar</button>
                            <button type="submit" class="btn btn-primary submit-btn">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /update ticket -->

    <!-- use credits -->
    <div id="use_credits" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aplicar créditos autorizados</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <p class="text-center">Seleccione la cantidad solicitada sobre la linea de crédito disponible</p>
                <div class="modal-body">
                    <form action="{{ route('company.useCredits', $ticket->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Cantidad solicitada<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="amount" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Linea de crédito disponible<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="credit" required>
                                        <option value="">Disponible para prestar</option>
                                        @foreach ($credits as $credit)
                                            <option value="{{ $credit->id }}">Disponible:
                                                {{ $credit->total_amount - $credit->used }}
                                                Ocupados: %{{ ($credit->used * 100) / $credit->total_amount }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                type="button">Cancelar</button>
                            <button type="submit" class="btn btn-primary submit-btn">Aplicar créditos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /use credits -->

    <!-- Personal Info Modal -->
    <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Passport No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Passport Expiry Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tel</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nationality <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <div class="cal-icon">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marital status <span class="text-danger">*</span></label>
                                    <select class="select form-control">
                                        <option>-</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employment of spouse</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. of children </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Personal Info Modal -->

    <!-- Family Info Modal -->
    <div id="family_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Family Informations</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Family Member <a href="javascript:void(0);"
                                            class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);"
                                            class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Family Info Modal -->

    <!-- step back Modal -->
    <div id="step_back" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Comentario</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Agregar Comentario</h3>
                            <p class="">Por favor, anexe las observaciones correspondientes y serán atendidas
                                de forma oportuna.</p>
                            <div class="row">
                                <div class="col-11 justify-content-center">
                                    <form action="{{ route('ticket.lastStep', $ticket->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <select class="form-control" name="comment" required>
                                            <option value="">Selecciona una opción</option>
                                            <option value="Ide Solicitan">Ide Solicitan</option>
                                            <option value="Mov. $ limite">Mov. $ limite</option>
                                            <option value="Error general.">Error general.</option>
                                        </select>
                                        {{-- <textarea name="comment" class="form-control" cols="30" rows="10" required></textarea> --}}
                                        <input type="file" class="form-control" name="file">
                                        <button type="submit" class="btn btn-primary mt-3 submit-btn">Envíar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /step back Modal -->
@endsection

@section('js')
    @if ($ticket->ticket_type == 'catega')
        <script>
            $('.download_catega_file').click(function() {
                $.ajax({
                    url: "{{ route('ticket.downloadCategaFile', [$company->id, $ticket->id]) }}",
                    method: 'GET',
                }).done(function(res) {
                    if (res) {
                        console.log(res)
                    }
                });
            });
        </script>
    @endif
    <script>
        let menuIcon = "topic";
    </script>
@endsection
