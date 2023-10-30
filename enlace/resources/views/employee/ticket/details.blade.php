@extends('partials.menu-employee')

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
                                            <br> {{ $ticketowner ? $ticketownerAdditionalInfo->work_area : '' }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Categoría:</div>
                                            <div class="text"><a href="">{{ $ticket->category }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Fecha Limite de nómina:</div>
                                            <div class="text">
                                                {{ $ticket->limit_date ? $ticket->limit_date->format('d/m/Y') : '-' }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Empresa:</div>
                                            <div class="text">{{ $company->name }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Fecha de creación:</div>
                                            <div class="text">{{ $ticket->created_at->format('d/m/Y') }}</div>
                                        </li>
                                        @if ($ticket->master_file)
                                            <li>
                                                <div class="title">Archivo maestro:</div>
                                                <div class="text btn-master-file" style="cursor: pointer;"><a
                                                        href="{{ asset('storage/archivos_maestro/' . $ticket->master_file) }}"
                                                        target="_blank"> Descargar <i class="fas fa-download"></i></a></div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <h4>Estatus actual: <strong>{{ $ticket->statusString }}</strong>
                                        @if ($ticket->statusDescription != '-')
                                            <i class="fas fa-exclamation-circle" data-bs-toggle="tooltip"
                                                data-placement="top" title="{{ $ticket->statusDescription }}"></i>
                                        @endif
                                    </h4>
                                    @if (
                                        $ticket->status == 3 &&
                                            auth()->user()->hasRoles(['cliente', 'validador']))
                                        <button class="btn btn-orange" data-bs-toggle="modal"
                                            data-bs-target="#step_back">Agregar observaciones</button>
                                    @endif
                                    @if (
                                        ($ticket->status == 1 &&
                                            auth()->user()->hasRoles(['cliente', 'capturista'])) ||
                                            ($ticket->status == 3 &&
                                                auth()->user()->hasRoles(['cliente', 'validador'])) ||
                                            ($ticket->status == 4 &&
                                                auth()->user()->hasRoles(['cliente', 'validador'])) ||
                                            ($ticket->status == 5 &&
                                                auth()->user()->hasRoles(['cliente', 'validador'])))
                                        <form action="{{ route('ticket.nextStep', $ticket->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-success">{{ $ticket->statusButton }}</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- <div class="pro-edit"><a data-bs-target="#edit_ticket" data-bs-toggle="modal" class="edit-icon"
                            href="#"><i class="fas fa-pencil-alt"></i></a></div> --}}
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
                    <li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Extraordinario </a>
                    </li>
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
                        @if ($ticketFileHistory)
                            <div class="card-body">
                                <h3 class="card-title">Último Archivo</h3>
                                <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                    <div class="col-6 align-self-center">
                                        <span> Creado el:
                                            <strong>{{ $ticketFileHistory->created_at->format('d/m/Y H:i') }}</strong>
                                            por:
                                            <strong>{{ $ticketFileUser ? $ticketFileUser->name : 'Usuario de alferza' }}</strong></span>
                                    </div>
                                    <div class="col-6 pb-3">
                                        <a href="{{ asset('storage/incidencias/' . $ticketFileHistory->file) }}"
                                            target="_blank"><button class="btn btn-primary mt-3 submit-btn">Descargar <i
                                                    class="fas fa-download"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h2 class="ps-4 pt-4">No se ha subido ningún archivo</h2>
                        @endif
                    </div>
                </div>
                @if (
                    ($ticket->status == 1 &&
                        auth()->user()->hasRoles(['cliente', 'capturista'])) ||
                        ($ticket->status == 3 &&
                            auth()->user()->hasRoles(['cliente', 'validador'])))
                    <div class="col-6">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Archivo</h3>
                                <div class="row">
                                    {{-- <div class="col-4 offset-lg-1 align-self-center text-center">
                                <div>
                                    <i class="fas fa-file-download" style="font-size: 50px;"></i>
                                    <button class="btn btn-primary mt-3 submit-btn">Descargar <i
                                            class="fas fa-download"></i></button>
                                </div>
                            </div> --}}

                                    <div class="col-7">
                                        <form action="{{ route('ticket.uploadFile', $ticket->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <label class="col-form-label">Subir nuevo archivo<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="file">
                                            <button type="submit" class="btn btn-primary mt-3 submit-btn">Subir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            @if ($ticket->status >= 5)
                <div class="row">
                    @if ($ticket->ticket_type == 'nómina')
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Comprobante de pago</h3>
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
                    @if ($ticket->status == 5)
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Comprobante de pago</h3>
                                    <div class="row">
                                        <div class="col-7">
                                            <form action="{{ route('ticket.uploadPaymentReceipt', $ticket->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <label class="col-form-label">Subir nuevo comprobante<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control" name="payment_receipt"
                                                    required>
                                                <button type="submit"
                                                    class="btn btn-primary mt-3 submit-btn">Subir</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($ticket->status >= 7)
                        <div class="col-6">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Kardex</h3>
                                    <div class="row align-content-center" style=" max-height: 400px; overflow: auto;">
                                        <div class="col-12 pb-3 text-center">
                                            @if ($ticket->kardex)
                                                <a href="{{ asset('storage/kardex/' . $ticket->kardex) }}"
                                                    target="_blank" class="download_kardex"><button
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
        </div>
        <!-- /Profile Info Tab -->

        <!-- Projects Tab -->
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
                                        <textarea name="comment" class="form-control" id="" cols="30" rows="10"></textarea>
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
        <div class="tab-pane fade" id="bank_statutory">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-danger"> Te recordamos que el horario limite para la solicitud de un periodo
                        extraordinaro es antes de las 10:00 am para ser aplicado el mismo día. De lo contrario serán
                        aplicados hasta el siguiente día habíl</p>
                    @if ($ticket->extraordinario_file)
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
                    @else
                        <form action="{{ route('employee.createExtraordinario', $ticket->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <h4 class="card-title">Archivo</h4>
                                    <input type="file" class="form-control" name="file" required>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <h4 class="card-title">Observaciones</h4>
                                    <textarea name="observations" class="form-control" id="" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary submit-btn" type="submit">Crear</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        <!-- /Bank Statutory Tab -->

    </div>
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
                                        <textarea name="comment" class="form-control" cols="30" rows="10" required></textarea>
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

    <!-- Education Modal -->
    <div id="education_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Education Informations</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);"
                                            class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Oxford University"
                                                    class="form-control floating">
                                                <label class="focus-label">Institution</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Computer Science"
                                                    class="form-control floating">
                                                <label class="focus-label">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="01/06/2002"
                                                        class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Starting Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="31/05/2006"
                                                        class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Complete Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="BE Computer Science"
                                                    class="form-control floating">
                                                <label class="focus-label">Degree</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Grade A" class="form-control floating">
                                                <label class="focus-label">Grade</label>
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
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Oxford University"
                                                    class="form-control floating">
                                                <label class="focus-label">Institution</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Computer Science"
                                                    class="form-control floating">
                                                <label class="focus-label">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="01/06/2002"
                                                        class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Starting Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="31/05/2006"
                                                        class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Complete Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="BE Computer Science"
                                                    class="form-control floating">
                                                <label class="focus-label">Degree</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Grade A" class="form-control floating">
                                                <label class="focus-label">Grade</label>
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
    <!-- /Education Modal -->

    <!-- Experience Modal -->
    <div id="experience_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Experience Informations</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Experience Informations <a href="javascript:void(0);"
                                            class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"
                                                    value="Digital Devlopment Inc">
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"
                                                    value="United States">
                                                <label class="focus-label">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"
                                                    value="Web Developer">
                                                <label class="focus-label">Job Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker"
                                                        value="01/07/2007">
                                                </div>
                                                <label class="focus-label">Period From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker"
                                                        value="08/06/2018">
                                                </div>
                                                <label class="focus-label">Period To</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Experience Informations <a href="javascript:void(0);"
                                            class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"
                                                    value="Digital Devlopment Inc">
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"
                                                    value="United States">
                                                <label class="focus-label">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"
                                                    value="Web Developer">
                                                <label class="focus-label">Job Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker"
                                                        value="01/07/2007">
                                                </div>
                                                <label class="focus-label">Period From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker"
                                                        value="08/06/2018">
                                                </div>
                                                <label class="focus-label">Period To</label>
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
    <!-- /Experience Modal -->
@endsection

@section('js')
    @if ($ticket->ticket_type == 'nómina')
        <script>
            $('.download_kardex').click(function() {
                $.ajax({
                    url: "{{ route('ticket.downloadKardex', [$company->id, $ticket->id]) }}",
                    method: 'GET',
                }).done(function(result) {
                    if (result) {
                        //console.log(result);
                    }
                });
            });
        </script>
    @endif
    <script>
        let menuIcon = "home";
    </script>
@endsection
