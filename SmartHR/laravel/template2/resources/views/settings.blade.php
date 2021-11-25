<?php $page="settings";?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- Page Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-head-box">
                                        <h3>Approval Settings</h3>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="settings">Settings</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Approval Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->

                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="card settings-menu">
                                        <div class="sidebar-menu">
                                            <ul>
                                                <li class="menu-title">Settings</li>
                                                <li class="active"> 
                                                    <a href="settings"><i class="la la-building"></i> <span>Company Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="localization"><i class="la la-clock-o"></i> <span>Localization</span></a>
                                                </li>
                                                <li> 
                                                    <a href="theme-settings"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="roles-permissions"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
                                                </li>
                                                <li> 
                                                    <a href="email-settings"><i class="la la-at"></i> <span>Email Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="performance-setting"><i class="la la-chart-bar"></i> <span>Performance Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="approval-setting"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="invoice-settings"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="salary-settings"><i class="la la-money"></i> <span>Salary Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="notifications-settings"><i class="la la-globe"></i> <span>Notifications</span></a>
                                                </li>
                                                <li> 
                                                    <a href="change-password"><i class="la la-lock"></i> <span>Change Password</span></a>
                                                </li>
                                                <li> 
                                                    <a href="leave-type"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                                                </li>
                                                <li> 
                                                    <a href="toxbox-setting"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="cron-setting"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-lg-9 settings-cont">
                                    <div class="card p-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Company Name <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" value="Dreamguy's Technologies">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Contact Person</label>
                                                        <input class="form-control " value="Daniel Porter" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input class="form-control " value="3864 Quiet Valley Lane, Sherman Oaks, CA, 91403" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-3">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control select">
                                                            <option>USA</option>
                                                            <option>United Kingdom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-3">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input class="form-control" value="Sherman Oaks" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-3">
                                                    <div class="form-group">
                                                        <label>State/Province</label>
                                                        <select class="form-control select">
                                                            <option>California</option>
                                                            <option>Alaska</option>
                                                            <option>Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-3">
                                                    <div class="form-group">
                                                        <label>Postal Code</label>
                                                        <input class="form-control" value="91403" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" value="danielporter@example.com" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input class="form-control" value="818-978-7102" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input class="form-control" value="818-635-5579" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Fax</label>
                                                        <input class="form-control" value="818-978-7102" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Website Url</label>
                                                        <input class="form-control" value="https://www.example.com" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-section">
                                                <button class="btn btn-primary submit-btn">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection