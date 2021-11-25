<?php $page="approval-setting";?>
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
                                                <li class="active"> 
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
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bottom" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                                Expenses Approval
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Leave Approval</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Offer Approval</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Resignation Notice</a>
                                            </li>
                                        </ul>
                                        <!-- /Nav tabs -->

                                        <!-- Tab panes -->
                                        <div class="tab-content mt-3">
                                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <h4>Expense Approval Settings</h4>
                                                <div class="form-group form-row">
                                                    <label class="control-label col-md-12">Default Expense Approval</label>
                                                    <div class="col-md-12 approval-option">
                                                        <label class="radio-inline">
                                                        <input id="radio-single1" class="mr-2 default_expense_approval" value="seq-approver" checked="" name="default_expense_approval" type="radio">Sequence Approval (Chain) <sup> <span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                        </label>
                                                        <label class="radio-inline ml-2">
                                                        <input id="radio-multiple3" class="mr-2 default_expense_approval" value="sim-approver" name="default_expense_approval" type="radio">Simultaneous Approval <sup><span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group  form-row row approver seq-approver mb-0" style="display: block;">
                                                    <label class="control-label col-sm-3">Expense Approvers</label>
                                                    <div class="col-sm-9 ">
                                                        <label class="ex_exp_approvers_1 control-label mb-2 exp_appr" style="padding-left:0">Approver 1</label>
                                                        <div class="row ex_exp_approvers_1 form-group">
                                                            <div class="col-md-6">
                                                                <select class="select form-control expense_approvers" style="width:260px" name="expense_approvers[]" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Select Approvers</option>
                                                                    <option value="1">CEO</option>
                                                                    <option value="9">Direct Manager</option>
                                                                    <option value="11">Development Manager 
                                                                    </option>
                                                                    <option value="6">Finance</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <label class="ex_exp_approvers_2 control-label mb-2 exp_appr" style="padding-left:0">Approver 2</label>
                                                        <div class="row ex_exp_approvers_2 form-group">
                                                            <div class="col-md-6">
                                                                <select class="select form-control expense_approvers " style="width:260px" name="expense_approvers[]" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Select Approvers</option>
                                                                    <option value="1">CEO</option>
                                                                    <option value="9">Direct Manager</option>
                                                                    <option value="11">Development Manager 
                                                                    </option>
                                                                    <option value="6">Finance</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2"><a class="remove_ex_exp_approver btn rounded border text-danger" data-id="2"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                        </div>
                                                        <label class="ex_exp_approvers_3 control-label m-b-10 exp_appr" style="padding-left:0">Approver 3</label>
                                                        <div class="row ex_exp_approvers_3 form-group mb-0">
                                                            <div class="col-md-6">
                                                                <select class="select form-control expense_approvers" style="width:260px" name="expense_approvers[]" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Select Approvers</option>
                                                                    <option value="1">CEO</option>
                                                                    <option value="9">Direct Manager</option>
                                                                    <option value="11">Development Manager 
                                                                    </option>
                                                                    <option value="6">Finance</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2"><a class="remove_ex_exp_approver btn rounded border text-danger" data-id="3"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9 col-md-offset-3 m-t-10">
                                                            <a id="add_expense_approvers" href="javascript:void(0)" class="add-more">+ Add Approver</a>
                                                        </div>
                                                    </div>
                                                    <div class="m-t-30">
                                                        <div class="col-md-12 submit-section pl-0">
                                                            <button id="expense_approval_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12">Default Leave Approval</label>
                                                    <div class="col-md-12 approval-option">
                                                        <label class="radio-inline">
                                                        <input id="radio-single" class="mr-2 default_offer_approval" value="seq-approver" name="default_leave_approval" type="radio">Sequence Approval (Chain) <sup> <span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                        </label>
                                                        <label class="radio-inline ml-2">
                                                        <input id="radio-multiple1" class="mr-2 default_offer_approval" value="sim-approver" checked="" name="default_leave_approval" type="radio">Simultaneous Approval <sup><span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label class="control-label col-sm-12">leave Approvers</label>
                                                    <div class="col-sm-6">
                                                        <label class="control-label" style="margin-bottom:10px;padding-left:0">Simultaneous Approval </label>
                                                        <select class="select form-control" multiple>
                                                            <option>Select</option>
                                                            <option>Test Lead</option>
                                                            <option>UI/UX Designer</option>
                                                            <option>Sox Analyst</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="m-t-30 row ">
                                                    <div class="col-md-12 submit-section">
                                                        <button id="leave_approval_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                                <form>
                                                    <h4>Offer Approval Settings</h4>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12">Default Offer Approval</label>
                                                        <div class="col-md-12 approval-option">
                                                            <label class="radio-inline">
                                                            <input id="radio-single2" class="mr-2 default_offer_approval" value="seq-approver" name="default_offer_approval" type="radio">Sequence Approval (Chain) <sup> <span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                            </label>
                                                            <label class="radio-inline ml-2">
                                                            <input id="radio-multiple2" class="mr-2 default_offer_approval" value="sim-approver" checked="" name="default_offer_approval" type="radio">Simultaneous Approval <sup><span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="m-t-30">
                                                        <div class="col-md-12 submit-section pl-0">
                                                            <button id="offer_approval_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                                <form >
                                                    <h3>Resignation Notice</h3>
                                                    <div class="form-group form-row">
                                                        <label class="col-sm-12">Email Notification <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <label class="control-label">Simultaneous Approval </label>
                                                            <select class="select form-control" multiple>
                                                                <option>Select</option>
                                                                <option>Test Lead</option>
                                                                <option>UI/UX Designer</option>
                                                                <option>Sox Analyst</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label class="col-md-12">Notice Days <span class="text-danger">*</span></label>
                                                        <div class="col-md-6 approval-option">
                                                            <input type="number" name="notice_days" class="form-control notice_days" value="15">
                                                        </div>
                                                    </div>
                                                    <div class="m-t-30">
                                                        <div class="col-md-12 submit-section pl-0">
                                                            <button id="resignation_notice_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /Tab panes -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Wrapper -->

@endsection