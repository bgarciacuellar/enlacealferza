<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Settings - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="css/select2.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
	
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index" class="logo">
						<img src="img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Dreamguy's Technologies</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile">My Profile</a>
							<a class="dropdown-item" href="settings">Settings</a>
							<a class="dropdown-item" href="login">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile">My Profile</a>
						<a class="dropdown-item" href="settings">Settings</a>
						<a class="dropdown-item" href="login">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
                                            <li class="{{ Request::is('index') ? 'active' : '' }}">
        <a  href="{{ url('index') }}"><i class="la la-home"></i> <span>Back to Home</span>  </a></li>

							
							<li class="menu-title">Settings</li>

                            <li class="{{ Request::is('settings') ? 'active' : '' }}">
        <a  href="{{ url('settings') }}"><i class="la la-building"></i><span>Company Settings</span>  </a></li>

        <li class="{{ Request::is('localization') ? 'active' : '' }}">
        <a  href="{{ url('localization') }}"><i class="la la-clock-o"></i><span>Localization</span>  </a></li>

        <li class="{{ Request::is('theme-settings') ? 'active' : '' }}">
        <a  href="{{ url('theme-settings') }}"><i class="la la-photo"></i><span>Theme Settings</span>  </a></li>
        <li class="{{ Request::is('roles-permissions') ? 'active' : '' }}">
        <a  href="{{ url('roles-permissions') }}"><i class="la la-key"></i> <span>Roles & Permissions</span>  </a></li>
        <li class="{{ Request::is('email-settings') ? 'active' : '' }}">
        <a  href="{{ url('email-settings') }}"><i class="la la-at"></i><span>Email Settings</span>  </a></li>
        <li class="{{ Request::is('performance-setting') ? 'active' : '' }}"> 
                                <a href="{{ url('performance-setting') }}"><i class="la la-bar-chart"></i> <span>Performance Settings</span></a>
                            </li>
                            <li class="{{ Request::is('approval-setting') ? 'active' : '' }}"> 
                                <a href="{{ url('approval-setting') }}"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                            </li>
		<li class="{{ Request::is('invoice-settings') ? 'active' : '' }}">
        <a  href="{{ url('invoice-settings') }}"><i class="la la-pencil-square"></i><span>Invoice Settings</span>  </a></li>
        <li class="{{ Request::is('salary-settings') ? 'active' : '' }}">
        <a  href="{{ url('salary-settings') }}"><i class="la la-money"></i> <span>Salary Settings</span>  </a></li>
		<li class="{{ Request::is('notifications-settings') ? 'active' : '' }}">
        <a  href="{{ url('notifications-settings') }}"><i class="la la-globe"></i><span>Notifications</span>  </a></li>
		<li class="{{ Request::is('change-password') ? 'active' : '' }}">
        <a  href="{{ url('change-password') }}"><i class="la la-lock"></i><span>Change Password</span>  </a></li>
		<li class="{{ Request::is('leave-type') ? 'active' : '' }}">
        <a  href="{{ url('leave-type') }}"><i class="la la-cogs"></i> <span>Leave Type </span>  </a></li>	
        <li class="{{ Request::is('toxbox-setting') ? 'active' : '' }}"> 
								<a href="{{ url('toxbox-setting') }}"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
							</li>
							<li class="{{ Request::is('cron-setting') ? 'active' : '' }}"> 
								<a href="{{ url('cron-setting') }}"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
							</li>		
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Roles & Permissions</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">
							<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#add_role"><i class="fa fa-plus"></i> Add Roles</a>
							<div class="roles-menu">
								<ul>
									<li class="active">
										<a href="javascript:void(0);">Administrator
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">CEO
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">Manager
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">Team Leader
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">Accountant
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">Web Developer
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">Web Designer
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">HR
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">UI/UX Developer
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">SEO Analyst
											<span class="role-action">
												<span class="action-circle large" data-toggle="modal" data-target="#edit_role">
													<i class="material-icons">edit</i>
												</span>
												<span class="action-circle large delete-btn" data-toggle="modal" data-target="#delete_role">
													<i class="material-icons">delete</i>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
							<h6 class="card-title m-b-20">Module Access</h6>
							<div class="m-b-30">
								<ul class="list-group notification-list">
									<li class="list-group-item">
										Employee
										<div class="status-toggle">
											<input type="checkbox" id="staff_module" class="check">
											<label for="staff_module" class="checktoggle">checkbox</label>
										</div>
									</li>
									<li class="list-group-item">
										Holidays
										<div class="status-toggle">
											<input type="checkbox" id="holidays_module" class="check" checked>
											<label for="holidays_module" class="checktoggle">checkbox</label>
										</div>
									</li>
									<li class="list-group-item">
										Leaves
										<div class="status-toggle">
											<input type="checkbox" id="leave_module" class="check" checked>
											<label for="leave_module" class="checktoggle">checkbox</label>
										</div>
									</li>
									<li class="list-group-item">
										Events
										<div class="status-toggle">
											<input type="checkbox" id="events_module" class="check" checked>
											<label for="events_module" class="checktoggle">checkbox</label>
										</div>
									</li>
									<li class="list-group-item">
										Chat
										<div class="status-toggle">
											<input type="checkbox" id="chat_module" class="check" checked>
											<label for="chat_module" class="checktoggle">checkbox</label>
										</div>
									</li>
									<li class="list-group-item">
										Jobs
										<div class="status-toggle">
											<input type="checkbox" id="job_module" class="check">
											<label for="job_module" class="checktoggle">checkbox</label>
										</div>
									</li>
								</ul>
							</div>      	
							<div class="table-responsive">
								<table class="table table-striped custom-table">
									<thead>
										<tr>
											<th>Module Permission</th>
											<th class="text-center">Read</th>
											<th class="text-center">Write</th>
											<th class="text-center">Create</th>
											<th class="text-center">Delete</th>
											<th class="text-center">Import</th>
											<th class="text-center">Export</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Employee</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
										</tr>
										<tr>
											<td>Holidays</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
										</tr>
										<tr>
											<td>Leaves</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
										</tr>
										<tr>
											<td>Events</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
											<td class="text-center">
												<input type="checkbox" checked="">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Role Modal -->
				<div id="add_role" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Role</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Role Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Role Modal -->
				
				<!-- Edit Role Modal -->
				<div id="edit_role" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content modal-md">
							<div class="modal-header">
								<h5 class="modal-title">Edit Role</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Role Name <span class="text-danger">*</span></label>
										<input class="form-control" value="Team Leader" type="text">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Role Modal -->

				<!-- Delete Role Modal -->
				<div class="modal custom-modal fade" id="delete_role" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Role</h3>
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
				<!-- /Delete Role Modal -->
				
             </div>
			<!-- /Page Wrapper -->
			</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="js/select2.min.js"></script>

		<!-- Custom JS -->
		<script src="js/app.js"></script>
		
    </body>
</html>