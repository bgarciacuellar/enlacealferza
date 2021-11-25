<?php $page="cron-setting";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid pb-0">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Page Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-head-box">
                                        <h3>Cron Setting</h3>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="settings">Settings</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Cron Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="card settings-menu">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li class="menu-title">Settings</li>
                                        <li> 
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
                                        <li class="active"> 
                                            <a href="cron-setting"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 settings-cont">
                            <div class="card p-4">
                                <form>
                                    <div class="form-group">
                                        <label>Cron Key <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Backup Database <span class="text-danger">*</span></label><br>
                                        <label class="switch">
                                            <input type="hidden" value="off" name="auto_backup_db">
                                            <input type="checkbox" checked="checked" name="auto_backup_db">
                                            <span></span>
                                        </label>
                                    </div>
                                    
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection