<?php $page="salary";?>
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
                                <h3>Employee Salary</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Employee Salary</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2"> 
                            <div class="form-group form-focus select-focus">
                                <select class="select floating"> 
                                    <option value=""> -- Select -- </option>
                                    <option value="">Employee</option>
                                    <option value="1">Manager</option>
                                </select>
                                <label class="focus-label">Role</label>
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
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-success btn-add-emp w-100" data-toggle="modal" data-target="#add_salary">Add Salary</a>
                        </div> 
                    </div>
                    <!-- Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Payslip</th>
                                            <th class="text-right">Action</th>
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
                                            <td>FT-0001</td>
                                            <td>johndoe@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Designer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59698</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
                                                    <a href="profile">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0002</td>
                                            <td>richardmiles@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$72000</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt=""></a>
                                                    <a href="profile">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0003</td>
                                            <td>johnsmith@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$48200</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt=""></a>
                                                    <a href="profile">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0004</td>
                                            <td>mikelitorus@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IOS Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59698</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt=""></a>
                                                    <a href="profile">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0005</td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$43000</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt=""></a>
                                                    <a href="profile">Jeffrey Warden <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0006</td>
                                            <td>jeffreywarden@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$45000</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt=""></a>
                                                    <a href="profile">Bernardo Galaviz <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@example.com</td>
                                            <td>1 Jan 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$38400</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-01.jpg" alt=""></a>
                                                    <a href="profile">Lesley Grauer <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0008</td>
                                            <td>lesleygrauer@example.com</td>
                                            <td>1 Jun 2015</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$75500</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-16.jpg" alt=""></a>
                                                    <a href="profile">Jeffery Lalor <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0009</td>
                                            <td>jefferylalor@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$73550</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-04.jpg" alt=""></a>
                                                    <a href="profile">Loren Gatlin <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0010</td>
                                            <td>lorengatlin@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$55000</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-03.jpg" alt=""></a>
                                                    <a href="profile">Tarah Shropshire <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0011</td>
                                            <td>tarahshropshire@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$92400</td>
                                            <td><a class="role-info role-bg-two" href="salary-view">Generate Slip</a></td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Salary Modal -->
                <div id="add_salary" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Staff Salary</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row"> 
                                        <div class="col-sm-6"> 
                                            <div class="form-group">
                                                <label>Select Staff</label>
                                                <select class="select"> 
                                                    <option>John Doe</option>
                                                    <option>Richard Miles</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <label>Net Salary</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-sm-6"> 
                                            <h4 class="text-primary">Earnings</h4>
                                            <div class="form-group">
                                                <label>Basic</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>DA(40%)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>HRA(15%)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Conveyance</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Allowance</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Medical  Allowance</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="add-more">
                                                <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">  
                                            <h4 class="text-primary">Deductions</h4>
                                            <div class="form-group">
                                                <label>TDS</label>
                                                <input class="form-control" type="text">
                                            </div> 
                                            <div class="form-group">
                                                <label>ESI</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>PF</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Leave</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Prof. Tax</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Labour Welfare</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="add-more">
                                                <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Salary Modal -->
                
                <!-- Edit Salary Modal -->
                <div id="edit_salary" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Staff Salary</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row"> 
                                        <div class="col-sm-6"> 
                                            <div class="form-group">
                                                <label>Select Staff</label>
                                                <select class="select"> 
                                                    <option>John Doe</option>
                                                    <option>Richard Miles</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <label>Net Salary</label>
                                            <input class="form-control" type="text" value="$4000">
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-sm-6"> 
                                            <h4 class="text-primary">Earnings</h4>
                                            <div class="form-group">
                                                <label>Basic</label>
                                                <input class="form-control" type="text" value="$6500">
                                            </div>
                                            <div class="form-group">
                                                <label>DA(40%)</label>
                                                <input class="form-control" type="text" value="$2000">
                                            </div>
                                            <div class="form-group">
                                                <label>HRA(15%)</label>
                                                <input class="form-control" type="text" value="$700">
                                            </div>
                                            <div class="form-group">
                                                <label>Conveyance</label>
                                                <input class="form-control" type="text" value="$70">
                                            </div>
                                            <div class="form-group">
                                                <label>Allowance</label>
                                                <input class="form-control" type="text" value="$30">
                                            </div>
                                            <div class="form-group">
                                                <label>Medical  Allowance</label>
                                                <input class="form-control" type="text" value="$20">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text">
                                            </div>  
                                        </div>
                                        <div class="col-sm-6">  
                                            <h4 class="text-primary">Deductions</h4>
                                            <div class="form-group">
                                                <label>TDS</label>
                                                <input class="form-control" type="text" value="$300">
                                            </div> 
                                            <div class="form-group">
                                                <label>ESI</label>
                                                <input class="form-control" type="text" value="$20">
                                            </div>
                                            <div class="form-group">
                                                <label>PF</label>
                                                <input class="form-control" type="text" value="$20">
                                            </div>
                                            <div class="form-group">
                                                <label>Leave</label>
                                                <input class="form-control" type="text" value="$250">
                                            </div>
                                            <div class="form-group">
                                                <label>Prof. Tax</label>
                                                <input class="form-control" type="text" value="$110">
                                            </div>
                                            <div class="form-group">
                                                <label>Labour Welfare</label>
                                                <input class="form-control" type="text" value="$10">
                                            </div>
                                            <div class="form-group">
                                                <label>Fund</label>
                                                <input class="form-control" type="text" value="$40">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text" value="$15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Salary Modal -->
                
                <!-- Delete Salary Modal -->
                <div class="modal custom-modal fade" id="delete_salary" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Salary</h3>
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Delete Salary Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection