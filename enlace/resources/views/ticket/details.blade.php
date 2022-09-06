@extends('partials.menu')

@section('title')
Detalles de incidencias
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
                                    <h6 class="text-muted">{{ $ticketowner->name . " " .
                                        $ticketownerAdditionalInfo->last_name}} <br>
                                        <span style="display: inline-block">{{
                                            $ticketownerAdditionalInfo->work_area }}</span>
                                    </h6>
                                    <small class="text-muted">{{ $ticketownerAdditionalInfo->position }}</small>
                                    <div class="staff-id">ID : {{ $ticketowner->employee_id }}</div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Tipo de nómina:</div>
                                        <div class="text"><a href="">{{ $ticket->category }}</a></div>
                                    </li>
                                    <li>
                                        <div class="title">Fecha Limite de incidencia:</div>
                                        <div class="text">{{ $ticket->limit_date->format('d/m/Y') }}</div>
                                    </li>
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
                <h4>Estatus actual: <strong>{{ $ticket->statusString }}</strong></h4>
                @if ($ticket->status < 5) <form action="{{ route('ticket.nextStep', $ticket->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Siguiente estatus</button>
                    </form>
                    @endif
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
                <li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Extraordinario </a>
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
                                    <strong>{{ $ticketFileHistory['user_name'] }} - {{ $ticketFileHistory['role']
                                        }}</strong></span>
                            </div>
                            <div class="col-6 pb-3">
                                <a href="{{ asset('storage/incidencias/' . $ticketFileHistory['file']) }}"
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
                            {{-- <div class="col-4 offset-lg-1 align-self-center text-center">
                                <div>
                                    <i class="fas fa-file-download" style="font-size: 50px;"></i>
                                    <button class="btn btn-primary mt-3 submit-btn">Descargar <i
                                            class="fas fa-download"></i></button>
                                </div>
                            </div> --}}
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
                                    target="_blank"><button class="btn btn-primary mt-3 submit-btn">Descargar <i
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
                        <h3 class="card-title">Archivo Pre-factura</h3>
                        <div class="row">
                            <div class="col-7">
                                @if ($ticket->status == 5)
                                <h3 class="text-center">Incidencia pagada</h3>
                                @else
                                <form action="{{ route('ticket.uploadPreinvoice', $ticket->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label class="col-form-label">Subir nuevo archivo<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="preinvoice" required>
                                    <button type="submit" class="btn btn-primary mt-3 submit-btn">Subir</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        {{-- <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Personal Informations <a href="#" class="edit-icon"
                                data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i
                                    class="fas fa-pencil-alt"></i></a></h3>
                        <ul class="personal-info">
                            <li>
                                <div class="title">Passport No.</div>
                                <div class="text">9876543210</div>
                            </li>
                            <li>
                                <div class="title">Passport Exp Date.</div>
                                <div class="text">9876543210</div>
                            </li>
                            <li>
                                <div class="title">Tel</div>
                                <div class="text"><a href="">9876543210</a></div>
                            </li>
                            <li>
                                <div class="title">Nationality</div>
                                <div class="text">Indian</div>
                            </li>
                            <li>
                                <div class="title">Religion</div>
                                <div class="text">Christian</div>
                            </li>
                            <li>
                                <div class="title">Marital status</div>
                                <div class="text">Married</div>
                            </li>
                            <li>
                                <div class="title">Employment of spouse</div>
                                <div class="text">No</div>
                            </li>
                            <li>
                                <div class="title">No. of children</div>
                                <div class="text">2</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Bank information</h3>
                        <ul class="personal-info">
                            <li>
                                <div class="title">Bank name</div>
                                <div class="text">ICICI Bank</div>
                            </li>
                            <li>
                                <div class="title">Bank account No.</div>
                                <div class="text">159843014641</div>
                            </li>
                            <li>
                                <div class="title">IFSC Code</div>
                                <div class="text">ICI24504</div>
                            </li>
                            <li>
                                <div class="title">PAN No</div>
                                <div class="text">TC000Y56</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#family_info_modal"><i class="fas fa-pencil-alt"></i></a></h3>
                        <div class="table-responsive">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Relationship</th>
                                        <th>Date of Birth</th>
                                        <th>Phone</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Leo</td>
                                        <td>Brother</td>
                                        <td>Feb 16th, 2019</td>
                                        <td>9876543210</td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a aria-expanded="false" data-bs-toggle="dropdown"
                                                    class="action-icon dropdown-toggle" href="#"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a href="#" class="dropdown-item"><i
                                                            class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <strong>{{ $ticketComment['user_name'] . ' - ' . $ticketComment['created_at']}}:
                                    </strong>
                                    {{ $ticketComment['comment'] }}
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
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="10"
                                        required></textarea>
                                    <button type="submit" class="btn btn-primary mt-3 submit-btn">Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown profile-action">
                            <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                href="#"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                        <h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
                        <small class="block text-ellipsis m-b-15">
                            <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                            <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                        </small>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. When an unknown printer took a galley of type and
                            scrambled it...
                        </p>
                        <div class="pro-deadline m-b-15">
                            <div class="sub-title">
                                Deadline:
                            </div>
                            <div class="text-muted">
                                17 Apr 2019
                            </div>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Project Leader :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                            src="assets/img/profiles/avatar-16.jpg"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Team :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                            src="assets/img/profiles/avatar-02.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt=""
                                            src="assets/img/profiles/avatar-09.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt=""
                                            src="assets/img/profiles/avatar-10.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt=""
                                            src="assets/img/profiles/avatar-05.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" class="all-users">+15</a>
                                </li>
                            </ul>
                        </div>
                        <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                        <div class="progress progress-xs mb-0">
                            <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                class="progress-bar bg-success" data-original-title="40%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown profile-action">
                            <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                href="#"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                        <h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
                        <small class="block text-ellipsis m-b-15">
                            <span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
                            <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                        </small>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. When an unknown printer took a galley of type and
                            scrambled it...
                        </p>
                        <div class="pro-deadline m-b-15">
                            <div class="sub-title">
                                Deadline:
                            </div>
                            <div class="text-muted">
                                17 Apr 2019
                            </div>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Project Leader :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                            src="assets/img/profiles/avatar-16.jpg"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Team :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                            src="assets/img/profiles/avatar-02.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt=""
                                            src="assets/img/profiles/avatar-09.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt=""
                                            src="assets/img/profiles/avatar-10.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt=""
                                            src="assets/img/profiles/avatar-05.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" class="all-users">+15</a>
                                </li>
                            </ul>
                        </div>
                        <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                        <div class="progress progress-xs mb-0">
                            <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                class="progress-bar bg-success" data-original-title="40%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown profile-action">
                            <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                href="#"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                        <h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
                        <small class="block text-ellipsis m-b-15">
                            <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                            <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                        </small>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. When an unknown printer took a galley of type and
                            scrambled it...
                        </p>
                        <div class="pro-deadline m-b-15">
                            <div class="sub-title">
                                Deadline:
                            </div>
                            <div class="text-muted">
                                17 Apr 2019
                            </div>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Project Leader :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                            src="assets/img/profiles/avatar-16.jpg"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Team :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                            src="assets/img/profiles/avatar-02.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt=""
                                            src="assets/img/profiles/avatar-09.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt=""
                                            src="assets/img/profiles/avatar-10.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt=""
                                            src="assets/img/profiles/avatar-05.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" class="all-users">+15</a>
                                </li>
                            </ul>
                        </div>
                        <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                        <div class="progress progress-xs mb-0">
                            <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                class="progress-bar bg-success" data-original-title="40%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown profile-action">
                            <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle"
                                href="#"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#"
                                    class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                        <h4 class="project-title"><a href="project-view.html">Hospital Administration</a>
                        </h4>
                        <small class="block text-ellipsis m-b-15">
                            <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                            <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                        </small>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. When an unknown printer took a galley of type and
                            scrambled it...
                        </p>
                        <div class="pro-deadline m-b-15">
                            <div class="sub-title">
                                Deadline:
                            </div>
                            <div class="text-muted">
                                17 Apr 2019
                            </div>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Project Leader :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                            src="assets/img/profiles/avatar-16.jpg"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="project-members m-b-15">
                            <div>Team :</div>
                            <ul class="team-members">
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt=""
                                            src="assets/img/profiles/avatar-02.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt=""
                                            src="assets/img/profiles/avatar-09.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt=""
                                            src="assets/img/profiles/avatar-10.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt=""
                                            src="assets/img/profiles/avatar-05.jpg"></a>
                                </li>
                                <li>
                                    <a href="#" class="all-users">+15</a>
                                </li>
                            </ul>
                        </div>
                        <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                        <div class="progress progress-xs mb-0">
                            <div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar"
                                class="progress-bar bg-success" data-original-title="40%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha limite de incidencia <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="limit_date" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Tipo de nómina <span class="text-danger">*</span></label>
                                <select class="form-control" name="category" required>
                                    <option value="">Selecciona una opción</option>
                                    @foreach ($payrolls as $payroll)
                                    <option value="{{ $payroll->type }}" {{ $ticket->category == $payroll->type ?
                                        "selected" : null
                                        }}>{{ $payroll->type . " - " . $payroll->name }}
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
                                    <option value="{{ $paymentPeriod }}" {{ $ticket->payment_period == $paymentPeriod ?
                                        "selected" : null
                                        }}>{{ ucfirst($paymentPeriod) }}
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
                                    <option value="{{ $credit->id }}">Disponible: {{ ($credit->total_amount -
                                        $credit->used ) }}
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

<!-- Emergency Contact Modal -->
<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
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
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Primary Contact</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
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
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Primary Contact</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
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
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <input class="form-control" type="text">
                                    </div>
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
<!-- /Emergency Contact Modal -->

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
                                            <input type="text" value="Oxford University" class="form-control floating">
                                            <label class="focus-label">Institution</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Computer Science" class="form-control floating">
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
                                            <input type="text" value="Oxford University" class="form-control floating">
                                            <label class="focus-label">Institution</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus focused">
                                            <input type="text" value="Computer Science" class="form-control floating">
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
                                            <input type="text" class="form-control floating" value="United States">
                                            <label class="focus-label">Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="Web Developer">
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
                                            <input type="text" class="form-control floating" value="United States">
                                            <label class="focus-label">Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" value="Web Developer">
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