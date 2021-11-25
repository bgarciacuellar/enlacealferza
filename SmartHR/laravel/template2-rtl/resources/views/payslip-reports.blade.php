<?php $page="payslip-reports";?>
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
                                <h3>Payslip Reports</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Payslip Reports</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Content Starts -->
                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <select class="form-control floating select">
                                        <option>
                                            Jan
                                        </option>
                                        <option>
                                            Feb
                                        </option>
                                        <option>
                                            Mar
                                        </option>
                                    </select>
                                </div>
                                <label class="focus-label">Month</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <select class="form-control floating select">
                                        <option>
                                            2018
                                        </option>
                                        <option>
                                            2019
                                        </option>
                                        <option>
                                            2020
                                        </option>
                                    </select>
                                </div>
                                <label class="focus-label">Year</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search ml-2"></i> Search </a>
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Name</th>
                                            <th>Paid Amount</th>
                                            <th>Payment Month</th>
                                            <th>Payment Year</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
                                                    <a href="profile">Bernardo Galaviz <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$200</td>
                                            <td>Apr</td>
                                            <td>2019</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
                                                    <a href="profile">Jeffrey Warden <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$300</td>
                                            <td>Dec</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>$400</td>
                                            <td>Jun</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$500</td>
                                            <td>Feb</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    <a href="profile">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$600</td>
                                            <td>Jan</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
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