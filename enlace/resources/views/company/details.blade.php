@extends('partials.menu')

@section('content')
<div class="card mb-0">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    {{-- <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img alt="" src="{{ asset('img/profiles/avatar-02.jpg')}}"></a>
                        </div>
                    </div> --}}
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">{{ $company->name }}</h3>
                                    {{-- <h6 class="text-muted">UI/UX Design Team</h6>
                                    <small class="text-muted">Web Designer</small>
                                    <div class="staff-id">Employee ID : FT-0001</div>
                                    <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                    <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send
                                            Message</a></div> --}}
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Dirección:</div>
                                        <div class="text"><a href="">{{ $company->address }}</a></div>
                                    </li>
                                    <li>
                                        <div class="title">Teléfono:</div>
                                        <div class="text"><a href="">{{ $company->phone_number }}</a></div>
                                    </li>
                                    {{-- <li>
                                        <div class="title">Birthday:</div>
                                        <div class="text">{{ $additionalUserInfo->birthday ?
                                            $additionalUserInfo->birthday : '-' }}</div>
                                    </li>
                                    <li>
                                        <div class="title">Address:</div>
                                        <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Gender:</div>
                                        <div class="text">{{ $additionalUserInfo->gender ? $additionalUserInfo->gender :
                                            '-' }}</div>
                                    </li> --}}
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
                    <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon"
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
                <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Mi compañía</a>
                </li>
                {{-- <li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Comentarios</a>
                </li> --}}
                {{--<li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank &
                        Statutory <small class="text-danger">(Admin Only)</small></a></li> --}}
            </ul>
        </div>
    </div>
</div>

<div class="tab-content">

    <!-- Profile Info Tab -->
    <div id="emp_profile" class="pro-overview tab-pane fade show active">
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Ejecutivos de cuenta <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#create_employee"><i class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companyEmployees as $companyEmployee)
                                <tr>
                                    <td>{{ $companyEmployee['name'] }}</td>
                                    <td>{{ $companyEmployee['email'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Incidencias <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#create_incident"><i class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidents as $incident)
                                <tr>
                                    <td>{{ $incident->status }}</td>
                                    <td>{{ $incident->limit_date->format('d/m/Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row">
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
        </div>--}}
    </div>
    <!-- /Profile Info Tab -->

    <!-- Projects Tab -->
    <div class="tab-pane fade" id="emp_projects">
        <div class="row">
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
        </div>
    </div>
    <!-- /Projects Tab -->

    <!-- Bank Statutory Tab -->
    <div class="tab-pane fade" id="bank_statutory">
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
    </div>
    <!-- /Bank Statutory Tab -->

</div>
</div>
<!-- /Page Content -->

<!-- Profile Modal -->
<div id="profile_info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profile Information</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre <span class="text-danger">*</span></label>
                                <input class="form-control" name="name" type="text" value="{{ $company->name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Dirección</label>
                                <input class="form-control" name="address" type="text" value="{{ $company->address }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Teléfono <span class="text-danger">*</span></label>
                                <input class="form-control" name="phone_number" type="text"
                                    value="{{ $company->phone_number }}">
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="submit" class="btn btn-primary submit-btn">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Profile Modal -->

<!-- Personal Info Modal -->
<div id="create_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create ejecutivo de cuenta</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.createEmployee', $company->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input class="form-control" type="text" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol</label>
                                <input class="form-control" type="text" name="role">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contraseña <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password">
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
<div id="create_incident" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Incidencia</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ticket.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Estatus <span class="text-danger">*</span></label>
                                <select class="form-control" name="status">
                                    <option value="">Selecciona una opción</option>
                                    <option value="abierto">Abierto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha limite <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="limit_date">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Categoría <span class="text-danger">*</span></label>
                                <select class="form-control" name="category" id="">
                                    <option value="">Selecciona una opción</option>
                                    <option value="Nomina 1">Nomina 1</option>
                                    <option value="Nomina 2">Nomina 2</option>
                                    <option value="Nomina 3">Nomina 3</option>
                                    <option value="Nomina 4">Nomina 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Empresa<span class="text-danger">*</span></label>
                                <select class="form-control" name="company" id="">
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Comentarios</label>
                                <textarea name="comment" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="submit" class="btn btn-primary submit-btn">Crear</button>
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

</div>
<!-- /Page Wrapper -->

</div>
@endsection