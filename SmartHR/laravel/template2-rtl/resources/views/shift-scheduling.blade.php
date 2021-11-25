<?php $page="shift-scheduling";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid">

                    <!-- Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-head-box">
                                <h3>Daily Scheduling</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Daily Scheduling</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Content Starts -->
                    
                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-2"> 
                            <div class="form-group form-focus select-focus">
                                <select class="select floating"> 
                                    <option>All Department</option>
                                    <option value="1">Finance</option>
                                    <option value="2">Finance and Management</option>
                                    <option value="3">Hr & Finance</option>
                                    <option value="4">ITech</option>
                                </select>
                                <label class="focus-label">Department</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <div class="form-group form-focus focused">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <div class="form-group form-focus focused">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search ml-2"></i> Search </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-success btn-add-emp w-100" data-toggle="modal" data-target="#add_schedule"> Assign Shifts</a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="shift-list" class="btn btn-success btn-add-emp w-100">Shifts</a>
                        </div> 
                    </div>
                    <!-- Search Filter -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Scheduled Shift</th>
                                            <th>Fri 21</th>
                                            <th>Sat 22</th>
                                            <th>Sun 23</th>
                                            <th>Mon 24</th>
                                            <th>Tue 25</th>
                                            <th>Wed 26</th>
                                            <th>Thu 27</th>
                                            <th>Fri 28</th>
                                            <th>Sat 29</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                          
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    <a href="profile">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="profile">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
                                                    <a href="profile">Jeffrey Warden <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
                                                    <a href="profile">Bernardo Galaviz <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <h2>
                                                        <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #B8B8B8">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-add-shedule-list">
                                                    <a href="#" data-toggle="modal" data-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Content End -->
                    
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection