<?php error_reporting(0);?>
<div class="main-wrapper">
<!-- Sidebar -->
            @if(!Route::is(['components']))
            <div class="sidebar" id="sidebar">
				<div class="sidebar-left slimscroll">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link <?php if($page=="index"  || $page=="employee-dashboard") { echo 'active'; } ?>" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
							<span class="material-icons-outlined">
								home
							</span>
						</a>
						<a class="nav-link <?php if($page=="calender"  || $page=="chat"  || $page=="compose"  || $page=="contacts"  || $page=="file-manager" || $page=="inbox" || $page=="incoming-call" || $page=="mail-view" || $page=="outgoing-call" || $page=="voice-call" || $page=="video-call") { echo 'active'; } ?>" id="v-pills-apps-tab" title="Apps" data-toggle="pill" href="#v-pills-apps" role="tab" aria-controls="v-pills-apps" aria-selected="false">
							<span class="material-icons-outlined">
								dashboard
							</span>
						</a>
						<a class="nav-link <?php if($page=="attendance-employee"  || $page=="attendance"  || $page=="departments"  || $page=="designations" || $page=="employees-list" || $page=="employees" || $page=="events" || $page=="holidays" || $page=="leave-settings" || $page=="leaves-employee" || $page=="leaves" || $page=="overtime"  || $page=="shift-list" || $page=="shift-scheduling" || $page=="timesheet") { echo 'active'; } ?>" id="v-pills-employees-tab" title="Employees" data-toggle="pill" href="#v-pills-employees" role="tab" aria-controls="v-pills-employees" aria-selected="false">
							<span class="material-icons-outlined">
								people
							</span>
						</a>
						<a class="nav-link <?php if($page=="clients-list"  || $page=="clients") { echo 'active'; } ?>" id="v-pills-clients-tab" title="Clients" data-toggle="pill" href="#v-pills-clients" role="tab" aria-controls="v-pills-clients" aria-selected="false">
							<span class="material-icons-outlined">
								person
							</span>
						</a>
						<a class="nav-link <?php if($page=="project-list"  || $page=="project-view" || $page=="projects" || $page=="task-board" || $page=="tasks") { echo 'active'; } ?>" id="v-pills-projects-tab" title="Projects" data-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false">
							<span class="material-icons-outlined">
								topic
							</span>
						</a>
						<a class="nav-link <?php if($page=="leads") { echo 'active'; } ?>" id="v-pills-leads-tab" title="Leads" data-toggle="pill" href="#v-pills-leads" role="tab" aria-controls="v-pills-leads" aria-selected="false">
							<span class="material-icons-outlined">
								leaderboard
							</span>
						</a>
						<a class="nav-link <?php if($page=="ticket-view" || $page=="tickets") { echo 'active'; } ?>" id="v-pills-tickets-tab" title="Tickets" data-toggle="pill" href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets" aria-selected="false">
							<span class="material-icons-outlined">
								confirmation_number
							</span>
						</a>
						<a class="nav-link <?php if($page=="add-estimate"  || $page=="create-estimate"  || $page=="create-invoice"   || $page=="edit-estimate" || $page=="edit-invoice"  || $page=="estimate-view"  || $page=="estimates"   || $page=="expenses"  || $page=="invoice-view"   || $page=="invoices"  || $page=="payments" || $page=="provident-fund" || $page=="taxes") { echo 'active'; } ?>" id="v-pills-sales-tab" title="Sales" data-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="false">
							<span class="material-icons-outlined">
								shopping_bag
							</span>
						</a>
						<a class="nav-link <?php if($page=="budget-expenses"  || $page=="budget-revenues"  || $page=="budgets"  || $page=="categories" || $page=="sub-category") { echo 'active'; } ?>" id="v-pills-accounting-tab" title="Accounting" data-toggle="pill" href="#v-pills-accounting" role="tab" aria-controls="v-pills-accounting" aria-selected="false">
							<span class="material-icons-outlined">
								account_balance_wallet
							</span>
						</a>
						<a class="nav-link <?php if($page=="payroll-items" || $page=="salary-view" || $page=="salary") { echo 'active'; } ?>" id="v-pills-payroll-tab" title="Payroll" data-toggle="pill" href="#v-pills-payroll" role="tab" aria-controls="v-pills-payroll" aria-selected="false">
							<span class="material-icons-outlined">
								request_quote
							</span>
						</a>
						<a class="nav-link <?php if($page=="policies") { echo 'active'; } ?>" id="v-pills-policies-tab" title="Policies" data-toggle="pill" href="#v-pills-policies" role="tab" aria-controls="v-pills-policies" aria-selected="false">
							<span class="material-icons-outlined">
								verified_user
							</span>
						</a>
						<a class="nav-link <?php if($page=="attendance-reports"  || $page=="daily-reports"  || $page=="employee-reports"  || $page=="expense-reports"  || $page=="invoice-reports"  || $page=="leave-reports"  || $page=="payments-reports" || $page=="payslip-reports" || $page=="project-reports" || $page=="task-reports" || $page=="user-reports") { echo 'active'; } ?>" title="Reports" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">
							<span class="material-icons-outlined">
								report_gmailerrorred
							</span>
						</a>
						<a class="nav-link <?php if($page=="performance-appraisal"  || $page=="performance-indicator"  || $page=="performance") { echo 'active'; } ?>" id="v-pills-performance-tab" title="Performance" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">
							<span class="material-icons-outlined">
								shutter_speed
							</span>
						</a>
						<a class="nav-link <?php if($page=="goal-tracking"  || $page=="goal-type") { echo 'active'; } ?>" id="v-pills-goals-tab" title="Goals" data-toggle="pill" href="#v-pills-goals" role="tab" aria-controls="v-pills-goals" aria-selected="false">
							<span class="material-icons-outlined">
								track_changes
							</span>
						</a>
						<a class="nav-link <?php if($page=="trainers"  || $page=="training-type" || $page=="training") { echo 'active'; } ?>" id="v-pills-training-tab" title="Training" data-toggle="pill" href="#v-pills-training" role="tab" aria-controls="v-pills-training" aria-selected="false">
							<span class="material-icons-outlined">
								checklist_rtl
							</span>
						</a>
						<a class="nav-link <?php if($page=="promotion") { echo 'active'; } ?>" id="v-pills-promotion-tab" title="Promotions" data-toggle="pill" href="#v-pills-promotion" role="tab" aria-controls="v-pills-promotion" aria-selected="false">
							<span class="material-icons-outlined">
								auto_graph
							</span>
						</a>
						<a class="nav-link <?php if($page=="resignation") { echo 'active'; } ?>" id="v-pills-resignation-tab" title="Resignation" data-toggle="pill" href="#v-pills-resignation" role="tab" aria-controls="v-pills-resignation" aria-selected="false">
							<span class="material-icons-outlined">
								do_not_disturb_alt
							</span>
						</a>
						<a class="nav-link <?php if($page=="termination") { echo 'active'; } ?>" id="v-pills-termination-tab" title="Termination" data-toggle="pill" href="#v-pills-termination" role="tab" aria-controls="v-pills-termination" aria-selected="false">
							<span class="material-icons-outlined">
								indeterminate_check_box
							</span>
						</a>
						<a  class="nav-link <?php if($page=="assets1") { echo 'active'; } ?>" id="v-pills-assets-tab" title="Assets" data-toggle="pill" href="#v-pills-assets" role="tab" aria-controls="v-pills-assets" aria-selected="false">
							<span class="material-icons-outlined">
								web_asset
							</span>
						</a>
						<a class="nav-link <?php if($page=="applied-jobs"  || $page=="apptitute-result" || $page=="archived-jobs" || $page=="candidates" || $page=="experience-level" || $page=="interview-questions" || $page=="interviewing" || $page=="job-applicants" || $page=="job-aptitute" || $page=="job-details" || $page=="job-list" || $page=="jobs-dashboard" || $page=="jobs" || $page=="manage-resumes" || $page=="offer-approvals" || $page=="offered-jobs" || $page=="questions" || $page=="saved-jobs" || $page=="schedule-timing" || $page=="shortlist-candidates" || $page=="user-all-jobs" || $page=="user-dashboard" || $page=="visited-jobs") { echo 'active'; } ?>" id="v-pills-jobs-tab" title="Jobs" data-toggle="pill" href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">
							<span class="material-icons-outlined">
								work_outline
							</span>
						</a>
						<a class="nav-link <?php if($page=="knowledgebase-view" || $page=="knowledgebase") { echo 'active'; } ?>" id="v-pills-knowledgebase-tab" title="Knowledgebase" data-toggle="pill" href="#v-pills-knowledgebase" role="tab" aria-controls="v-pills-knowledgebase" aria-selected="false">
							<span class="material-icons-outlined">
								school
							</span>
						</a>
						<a class="nav-link <?php if($page=="activities") { echo 'active'; } ?>" id="v-pills-activities-tab" title="Activities" data-toggle="pill" href="#v-pills-activities" role="tab" aria-controls="v-pills-activities" aria-selected="false">
							<span class="material-icons-outlined">
								toggle_off
							</span>
						</a>
						<a class="nav-link <?php if($page=="users") { echo 'active'; } ?>" id="v-pills-users-tab" title="Users" data-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false">
							<span class="material-icons-outlined">
								group_add
							</span>
						</a>
						<a class="nav-link <?php if($page=="approval-setting" || $page=="change-password"  || $page=="cron-setting"   || $page=="email-settings"  || $page=="invoice-settings"   || $page=="cron-setting"   || $page=="leave-type"  || $page=="localization"  || $page=="notifications-settings"  || $page=="performance-setting"  || $page=="roles-permissions" || $page=="salary-settings" || $page=="settings" || $page=="theme-settings" || $page=="toxbox-setting") { echo 'active'; } ?>" id="v-pills-settings-tab" title="Settings" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
							<span class="material-icons-outlined">
								settings
							</span>
						</a>
						<a class="nav-link <?php if($page=="client-profile" || $page=="profile") { echo 'active'; } ?>" id="v-pills-profile-tab" title="Profile" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
							<span class="material-icons-outlined">
								manage_accounts
							</span>
						</a>
						<a class="nav-link" id="v-pills-authentication-tab" title="Authentication" data-toggle="pill" href="#v-pills-authentication" role="tab" aria-controls="v-pills-authentication" aria-selected="false">
							<span class="material-icons-outlined">
								perm_contact_calendar
							</span>
						</a>
						<a class="nav-link" id="v-pills-errorpages-tab" title="Error Pages" data-toggle="pill" href="#v-pills-errorpages" role="tab" aria-controls="v-pills-errorpages" aria-selected="false">
							<span class="material-icons-outlined">
								announcement
							</span>
						</a>
						<a class="nav-link <?php if($page=="subscribed-companies" || $page=="subscriptions-company" || $page=="subscriptions") { echo 'active'; } ?>" id="v-pills-subscriptions-tab" title="Subscriptions" data-toggle="pill" href="#v-pills-subscriptions" role="tab" aria-controls="v-pills-subscriptions" aria-selected="false">
							<span class="material-icons-outlined">
								loyalty
							</span>
						</a>
						<a class="nav-link <?php if($page=="blank-page" || $page=="faq" || $page=="privacy-policy" || $page=="search"  || $page=="terms") { echo 'active'; } ?>" id="v-pills-pages-tab" title="Pages" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">
							<span class="material-icons-outlined">
								layers
							</span>
						</a>

						<a class="nav-link <?php if($page=="form-basic-inputs" || $page=="form-horizontal" || $page=="form-vertical" || $page=="form-mask" || $page=="form-validation" || $page=="form-input-groups") { echo 'active'; } ?>" id="v-pills-forms-tab" title="Forms" data-toggle="pill" href="#v-pills-forms" role="tab" aria-controls="v-pills-forms" aria-selected="false">
							<span class="material-icons-outlined">
								view_day
							</span>
						</a>
						<a class="nav-link <?php if($page=="data-tables" || $page=="tables-basic") { echo 'active'; } ?>" id="v-pills-tables-tab" title="Tables" data-toggle="pill" href="#v-pills-tables" role="tab" aria-controls="v-pills-tables" aria-selected="false">
							<span class="material-icons-outlined">
								table_rows
							</span>
						</a>
						<a class="nav-link" id="v-pills-documentation-tab" title="Documentation" data-toggle="pill" href="#v-pills-documentation" role="tab" aria-controls="v-pills-documentation" aria-selected="false">
							<span class="material-icons-outlined">
								description
							</span>
						</a>
						<a class="nav-link" id="v-pills-changelog-tab" title="Changelog" data-toggle="pill" href="#v-pills-changelog" role="tab" aria-controls="v-pills-changelog" aria-selected="false">
							<span class="material-icons-outlined">
								sync_alt
							</span>
						</a>
						<a class="nav-link" id="v-pills-multilevel-tab" title="Multilevel" data-toggle="pill" href="#v-pills-multilevel" role="tab" aria-controls="v-pills-multilevel" aria-selected="false">
							<span class="material-icons-outlined">
								library_add_check
							</span>
						</a>
					</div>
				</div>
				
				<div class="sidebar-right">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show <?php if($page=="index" || $page=="employee-dashboard" ) { echo 'active'; } ?>" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
							<p>Dashboard</p>
							<ul>
								<li>
									<a class="<?php if($page=="index") { echo 'active'; } ?>" href="index">Admin Dashboard</a>
								</li>
								<li>
									<a class="<?php if($page=="employee-dashboard") { echo 'active'; } ?>" href="employee-dashboard">Employee Dashboard</a>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="calender" || $page=="chat"  || $page=="compose"  || $page=="contacts" || $page=="events" || $page=="file-manager" || $page=="inbox" || $page=="incoming-call" || $page=="mail-view" || $page=="outgoing-call" || $page=="video-call"  || $page=="voice-call") { echo 'active'; } ?>" id="v-pills-apps" role="tabpanel" aria-labelledby="v-pills-apps-tab">
							<p>App</p>
							<ul>
								<li>
									<a class="<?php if($page=="chat") { echo 'active'; } ?>" href="chat">Chat</a>
								</li>
								<li class="sub-menu">
									<a href="#" class="<?php if($page=="incoming-call" || $page=="outgoing-call" || $page=="video-call" || $page=="voice-call") { echo 'active'; } ?>">Calls <span class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li><a class="<?php if($page=="voice-call") { echo 'active'; } ?>" href="voice-call">Voice Call</a></li>
										<li><a class="<?php if($page=="video-call") { echo 'active'; } ?>" href="video-call">Video Call</a></li>
										<li><a class="<?php if($page=="outgoing-call") { echo 'active'; } ?>" href="outgoing-call">Outgoing Call</a></li>
										<li><a class="<?php if($page=="incoming-call") { echo 'active'; } ?>" href="incoming-call">Incoming Call</a></li>
									</ul>
								</li>
								<li>
									<a class="<?php if($page=="calender" || $page=="events") { echo 'active'; } ?>" href="calender">Calendar</a>
								</li>
								<li>
									<a class="<?php if($page=="contacts") { echo 'active'; } ?>" href="contacts">Contacts</a>
								</li>
								<li>
									<a class="<?php if($page=="compose" || $page=="inbox" || $page=="mail-view") { echo 'active'; } ?>" href="inbox">Email</a>
								</li>
								<li>
									<a class="<?php if($page=="file-manager") { echo 'active'; } ?>" href="file-manager">File Manager</a>
								</li>
							</ul>						
						</div>
						<div class="tab-pane fade show <?php if($page=="attendance-employee" || $page=="attendance" || $page=="departments" || $page=="designations" || $page=="employees-list" || $page=="employees" || $page=="holidays" || $page=="leave-settings" || $page=="leaves-employee" || $page=="leaves" || $page=="overtime"  || $page=="shift-list"  || $page=="shift-scheduling"   || $page=="timesheet" ) { echo 'active'; } ?>" id="v-pills-employees" role="tabpanel" aria-labelledby="v-pills-employees-tab">
							<p>Employees</p>
							<ul>
								<li><a class="<?php if($page=="employees-list" || $page=="employees") { echo 'active'; } ?>" href="employees">All Employees</a></li>
								<li><a class="<?php if($page=="holidays") { echo 'active'; } ?>" href="holidays">Holidays</a></li>
								<li><a class="<?php if($page=="leaves") { echo 'active'; } ?>" href="leaves">Leaves (Admin) <span class="badge badge-pill bg-primary float-left">1</span></a></li>
								<li><a class="<?php if($page=="leaves-employee") { echo 'active'; } ?>" href="leaves-employee">Leaves (Employee)</a></li>
								<li><a class="<?php if($page=="leave-settings") { echo 'active'; } ?>" href="leave-settings">Leave Settings</a></li>
								<li><a class="<?php if($page=="attendance") { echo 'active'; } ?>" href="attendance">Attendance (Admin)</a></li>
								<li><a class="<?php if($page=="attendance-employee") { echo 'active'; } ?>" href="attendance-employee">Attendance (Employee)</a></li>
								<li><a class="<?php if($page=="departments") { echo 'active'; } ?>" href="departments">Departments</a></li>
								<li><a class="<?php if($page=="designations") { echo 'active'; } ?>" href="designations">Designations</a></li>
								<li><a class="<?php if($page=="timesheet") { echo 'active'; } ?>" href="timesheet">Timesheet</a></li>
								<li><a class="<?php if($page=="shift-list" || $page=="shift-scheduling") { echo 'active'; } ?>" href="shift-scheduling">Shift & Schedule</a></li>
								<li><a class="<?php if($page=="overtime") { echo 'active'; } ?>" href="overtime">Overtime</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="clients-list"   || $page=="clients") { echo 'active'; } ?>" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab">
							<p>Clients</p>
							<ul>
								<li><a class="<?php if($page=="clients-list"   || $page=="clients") { echo 'active'; } ?>" href="clients">Clients</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="project-list"  || $page=="project-view" || $page=="projects"  || $page=="task-board" || $page=="tasks") { echo 'active'; } ?>" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
							<p>Projects</p>
							<ul>
								<li><a class="<?php if($page=="project-list"  || $page=="project-view" || $page=="projects") { echo 'active'; } ?>" href="projects">Projects</a></li>
								<li><a class="<?php if($page=="tasks") { echo 'active'; } ?>" href="tasks">Tasks</a></li>
								<li><a class="<?php if($page=="task-board") { echo 'active'; } ?>" href="task-board">Task Board</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="leads") { echo 'active'; } ?>" id="v-pills-leads" role="tabpanel" aria-labelledby="v-pills-leads-tab">
							<p>Leads</p>
							<ul>
								<li><a class="<?php if($page=="leads") { echo 'active'; } ?>" href="leads">Leads</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="ticket-view" || $page=="tickets") { echo 'active'; } ?>" id="v-pills-tickets" role="tabpanel" aria-labelledby="v-pills-tickets-tab">
							<p>Tickets</p>
							<ul>
								<li><a class="<?php if($page=="ticket-view" || $page=="tickets") { echo 'active'; } ?>" href="tickets">Tickets</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="add-estimate"  || $page=="create-estimate" || $page=="create-invoice"  || $page=="edit-estimate"   || $page=="edit-invoice"    || $page=="estimate-view"    || $page=="estimates" || $page=="expenses"  || $page=="invoice-view"   || $page=="invoices"   || $page=="payments"  || $page=="provident-fund"  || $page=="taxes") { echo 'active'; } ?>"  id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
							<p>Sales</p>
							<ul>
								<li><a class="<?php if($page=="add-estimate"  || $page=="create-estimate"  || $page=="edit-estimate"   || $page=="estimate-view"    || $page=="estimates" ) { echo 'active'; } ?>" href="estimates">Estimates</a></li>
								<li><a class="<?php if($page=="create-invoice"  || $page=="edit-invoice" || $page=="invoice-view" || $page=="invoices") { echo 'active'; } ?>" href="invoices">Invoices</a></li>
								<li><a class="<?php if($page=="payments") { echo 'active'; } ?>" href="payments">Payments</a></li>
								<li><a class="<?php if($page=="expenses") { echo 'active'; } ?>" href="expenses">Expenses</a></li>
								<li><a class="<?php if($page=="provident-fund") { echo 'active'; } ?>" href="provident-fund">Provident Fund</a></li>
								<li><a class="<?php if($page=="taxes") { echo 'active'; } ?>" href="taxes">Taxes</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="budget-expenses" || $page=="budget-revenues" || $page=="budgets" || $page=="categories" || $page=="sub-category") { echo 'active'; } ?>" id="v-pills-accounting" role="tabpanel" aria-labelledby="v-pills-accounting-tab">
							<p>Accounting</p>
							<ul>
								<li><a class="<?php if($page=="categories" || $page=="sub-category") { echo 'active'; } ?>" href="categories">Categories</a></li>
								<li><a class="<?php if($page=="budgets") { echo 'active'; } ?>" href="budgets">Budgets</a></li>
								<li><a class="<?php if($page=="budget-expenses") { echo 'active'; } ?>" href="budget-expenses">Budget Expenses</a></li>
								<li><a class="<?php if($page=="budget-revenues") { echo 'active'; } ?>" href="budget-revenues">Budget Revenues</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="payroll-items" || $page=="salary-view" || $page=="salary") { echo 'active'; } ?>" id="v-pills-payroll" role="tabpanel" aria-labelledby="v-pills-payroll-tab">
							<p>Payroll</p>
							<ul>
								<li><a class="<?php if($page=="salary") { echo 'active'; } ?>" href="salary"> Employee Salary </a></li>
								<li><a class="<?php if($page=="salary-view") { echo 'active'; } ?>" href="salary-view"> Payslip </a></li>
								<li><a class="<?php if($page=="payroll-items") { echo 'active'; } ?>" href="payroll-items"> Payroll Items </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="policies") { echo 'active'; } ?>" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">
							<p>Policies</p>
							<ul>
								<li><a class="<?php if($page=="policies") { echo 'active'; } ?>" href="policies"> Policies </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="attendance-reports" || $page=="daily-reports" || $page=="employee-reports" || $page=="expense-reports" || $page=="invoice-reports" || $page=="leave-reports" || $page=="payments-reports" || $page=="payslip-reports" || $page=="project-reports" || $page=="task-reports" || $page=="user-reports") { echo 'active'; } ?>" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
							<p>Reports</p>
							<ul>
								<li><a class="<?php if($page=="expense-reports") { echo 'active'; } ?>" href="expense-reports"> Expense Report </a></li>
								<li><a class="<?php if($page=="invoice-reports") { echo 'active'; } ?>" href="invoice-reports"> Invoice Report </a></li>
								<li><a class="<?php if($page=="payments-reports") { echo 'active'; } ?>" href="payments-reports"> Payments Report </a></li>
								<li><a class="<?php if($page=="project-reports") { echo 'active'; } ?>" href="project-reports"> Project Report </a></li>
								<li><a class="<?php if($page=="task-reports") { echo 'active'; } ?>" href="task-reports"> Task Report </a></li>
								<li><a class="<?php if($page=="user-reports") { echo 'active'; } ?>" href="user-reports"> User Report </a></li>
								<li><a class="<?php if($page=="employee-reports") { echo 'active'; } ?>" href="employee-reports"> Employee Report </a></li>
								<li><a class="<?php if($page=="payslip-reports") { echo 'active'; } ?>" href="payslip-reports"> Payslip Report </a></li>
								<li><a class="<?php if($page=="attendance-reports") { echo 'active'; } ?>" href="attendance-reports"> Attendance Report </a></li>
								<li><a class="<?php if($page=="leave-reports") { echo 'active'; } ?>" href="leave-reports"> Leave Report </a></li>
								<li><a class="<?php if($page=="daily-reports") { echo 'active'; } ?>" href="daily-reports"> Daily Report </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="performance-appraisal" || $page=="performance-indicator"  || $page=="performance") { echo 'active'; } ?>" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
							<p>Performance</p>
							<ul>
								<li><a class="<?php if($page=="performance-indicator") { echo 'active'; } ?>" href="performance-indicator"> Performance Indicator </a></li>
								<li><a class="<?php if($page=="performance") { echo 'active'; } ?>" href="performance"> Performance Review </a></li>
								<li><a class="<?php if($page=="performance-appraisal") { echo 'active'; } ?>" href="performance-appraisal"> Performance Appraisal </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="goal-tracking" || $page=="goal-type") { echo 'active'; } ?>" id="v-pills-goals" role="tabpanel" aria-labelledby="v-pills-goals-tab">
							<p>Goals</p>
							<ul>
								<li><a class="<?php if($page=="goal-tracking") { echo 'active'; } ?>" href="goal-tracking"> Goal List </a></li>
								<li><a class="<?php if($page=="goal-type") { echo 'active'; } ?>" href="goal-type"> Goal Type </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="trainers" || $page=="training-type" || $page=="training") { echo 'active'; } ?>" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab">
							<p>Training</p>
							<ul>
								<li><a class="<?php if($page=="training") { echo 'active'; } ?>" href="training"> Training List </a></li>
								<li><a class="<?php if($page=="trainers") { echo 'active'; } ?>" href="trainers"> Trainers</a></li>
								<li><a class="<?php if($page=="training-type") { echo 'active'; } ?>" href="training-type"> Training Type </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="promotion") { echo 'active'; } ?>" id="v-pills-promotion" role="tabpanel" aria-labelledby="v-pills-promotion-tab">
							<p>Promotion</p>
							<ul>
								<li><a class="<?php if($page=="promotion") { echo 'active'; } ?>" href="promotion"> Promotion </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="resignation") { echo 'active'; } ?>" id="v-pills-resignation" role="tabpanel" aria-labelledby="v-pills-resignation-tab">
							<p>Resignation</p>
							<ul>
								<li><a class="<?php if($page=="resignation") { echo 'active'; } ?>" href="resignation"> Resignation </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="termination") { echo 'active'; } ?>" id="v-pills-termination" role="tabpanel" aria-labelledby="v-pills-termination-tab">
							<p>Termination</p>
							<ul>
								<li><a class="<?php if($page=="termination") { echo 'active'; } ?>" href="termination"> Termination </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="assets1") { echo 'active'; } ?>" id="v-pills-assets" role="tabpanel" aria-labelledby="v-pills-assets-tab">
							<p>Assets</p>
							<ul>
								<li><a class="<?php if($page=="assets1") { echo 'active'; } ?>" href="assets1"> Assets </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="applied-jobs" || $page=="apptitute-result" || $page=="archived-jobs" || $page=="candidates"  || $page=="experience-level"  || $page=="interview-questions"  || $page=="interviewing" || $page=="job-applicants" || $page=="job-aptitute" || $page=="job-details" || $page=="job-list" || $page=="job-view" || $page=="jobs-dashboard" || $page=="jobs" || $page=="manage-resumes" || $page=="offer-approvals" || $page=="offered-jobs" || $page=="questions" || $page=="saved-jobs" || $page=="schedule-timing" || $page=="shortlist-candidates" || $page=="user-all-jobs" || $page=="user-dashboard"|| $page=="visited-jobs") { echo 'active'; } ?>" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">
							<p>Jobs</p>
							<ul>
								<li><a class="<?php if($page=="applied-jobs" || $page=="archived-jobs" || $page=="interviewing" || $page=="job-aptitute" || $page=="offered-jobs" || $page=="questions" || $page=="saved-jobs" || $page=="user-all-jobs" || $page=="user-dashboard"|| $page=="visited-jobs") { echo 'active'; } ?>" href="user-dashboard"> User Dasboard </a></li>
								<li><a class="<?php if($page=="jobs-dashboard") { echo 'active'; } ?>" href="jobs-dashboard"> Jobs Dasboard </a></li>
								<li><a class="<?php if($page=="job-details" || $page=="job-list" || $page=="job-view" || $page=="jobs") { echo 'active'; } ?>" href="jobs"> Manage Jobs </a></li>
								<li><a class="<?php if($page=="job-applicants") { echo 'active'; } ?>" href="job-applicants"> Applied Jobs </a></li>
								<li><a class="<?php if($page=="manage-resumes") { echo 'active'; } ?>" href="manage-resumes"> Manage Resumes </a></li>
								<li><a class="<?php if($page=="shortlist-candidates") { echo 'active'; } ?>" href="shortlist-candidates"> Shortlist Candidates </a></li>
								<li><a class="<?php if($page=="interview-questions") { echo 'active'; } ?>" href="interview-questions"> Interview Questions </a></li>
								<li><a class="<?php if($page=="offer-approvals") { echo 'active'; } ?>" href="offer-approvals"> Offer Approvals </a></li>
								<li><a class="<?php if($page=="experience-level") { echo 'active'; } ?>" href="experience-level"> Experience Level </a></li>
								<li><a class="<?php if($page=="candidates") { echo 'active'; } ?>" href="candidates"> Candidates List </a></li>
								<li><a class="<?php if($page=="schedule-timing") { echo 'active'; } ?>" href="schedule-timing"> Schedule timing </a></li>
								<li><a class="<?php if($page=="apptitute-result") { echo 'active'; } ?>" href="apptitude-result"> Aptitude Results </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="knowledgebase-view" || $page=="knowledgebase") { echo 'active'; } ?>" id="v-pills-knowledgebase" role="tabpanel" aria-labelledby="v-pills-knowledgebase-tab">
							<p>Knowledgebase</p>
							<ul>
								<li><a class="<?php if($page=="knowledgebase-view" || $page=="knowledgebase") { echo 'active'; } ?>" href="knowledgebase"> Knowledgebase </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="activities") { echo 'active'; } ?>" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">
							<p>Activities</p>
							<ul>
								<li><a class="<?php if($page=="activities") { echo 'active'; } ?>" href="activities"> Activities </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="users") { echo 'active'; } ?>" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-activities-tab">
							<p>Users</p>
							<ul>
								<li><a class="<?php if($page=="users") { echo 'active'; } ?>" href="users"> Users </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="approval-setting" || $page=="change-password" || $page=="cron-setting" || $page=="email-settings" || $page=="invoice-settings" || $page=="leave-type" || $page=="localization" || $page=="notifications-settings"  || $page=="performance-setting" || $page=="roles-permissions" || $page=="salary-settings" || $page=="settings" || $page=="theme-settings" || $page=="toxbox-setting") { echo 'active'; } ?>"  id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<p>Settings</p>
							<ul>
								<li><a class="<?php if($page=="approval-setting" || $page=="change-password" || $page=="cron-setting"  || $page=="email-settings" || $page=="invoice-settings" || $page=="leave-type" || $page=="localization" || $page=="notifications-settings"  || $page=="performance-setting" || $page=="roles-permissions" || $page=="salary-settings" || $page=="settings" || $page=="theme-settings" || $page=="toxbox-setting") { echo 'active'; } ?>" href="settings"> Settings </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="client-profile" || $page=="profile") { echo 'active'; } ?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<p>Profile</p>
							<ul>
								<li><a class="<?php if($page=="profile") { echo 'active'; } ?>" href="profile"> Employee Profile </a></li>
								<li><a class="<?php if($page=="client-profile") { echo 'active'; } ?>"> Client Profile </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-authentication" role="tabpanel" aria-labelledby="v-pills-authentication-tab">
							<p>Authentication</p>
							<ul>
								<li><a href="login"> Login </a></li>
								<li><a href="register"> Register </a></li>
								<li><a href="forgot-password"> Forgot Password </a></li>
								<li><a href="otp"> OTP </a></li>
								<li><a href="lock-screen"> Lock Screen </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-errorpages" role="tabpanel" aria-labelledby="v-pills-errorpages-tab">
							<p>Error Pages</p>
							<ul>
								<li><a href="error-404">404 Error </a></li>
								<li><a href="error-500">500 Error </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="subscribed-companies" || $page=="subscriptions-company" || $page=="subscriptions") { echo 'active'; } ?>" id="v-pills-subscriptions" role="tabpanel" aria-labelledby="v-pills-subscriptions-tab">
							<p>Subscriptions</p>
							<ul>
								<li><a class="<?php if($page=="subscriptions") { echo 'active'; } ?>" href="subscriptions"> Subscriptions (Admin) </a></li>
								<li><a class="<?php if($page=="subscriptions-company") { echo 'active'; } ?>" href="subscriptions-company"> Subscriptions (Company) </a></li>
								<li><a class="<?php if($page=="subscribed-companies") { echo 'active'; } ?>" href="subscribed-companies"> Subscribed Companies</a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="blank-page" || $page=="faq" || $page=="privacy-policy" || $page=="search"  || $page=="terms") { echo 'active'; } ?>" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
							<p>Pages</p>
							<ul>
								<li><a class="<?php if($page=="search") { echo 'active'; } ?>" href="search"> Search </a></li>
								<li><a class="<?php if($page=="faq") { echo 'active'; } ?>" href="faq"> FAQ </a></li>
								<li><a class="<?php if($page=="terms") { echo 'active'; } ?>" href="terms"> Terms </a></li>
								<li><a class="<?php if($page=="privacy-policy") { echo 'active'; } ?>" href="privacy-policy"> Privacy Policy </a></li>
								<li><a class="<?php if($page=="blank-page") { echo 'active'; } ?>" href="blank-page"> Blank Page </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="form-basic-inputs" || $page=="form-horizontal" || $page=="form-vertical" || $page=="form-mask" || $page=="form-validation" || $page=="form-input-groups") { echo 'active'; } ?>" id="v-pills-forms" role="tabpanel" aria-labelledby="v-pills-forms-tab">
							<p>Forms</p>
							<ul>
								<li><a class="<?php if($page=="form-basic-inputs") { echo 'active'; } ?>" href="form-basic-inputs">Basic Inputs </a></li>
								<li><a class="<?php if($page=="form-input-groups") { echo 'active'; } ?>" href="form-input-groups">Input Groups </a></li>
								<li><a class="<?php if($page=="form-horizontal") { echo 'active'; } ?>" href="form-horizontal">Horizontal Form </a></li>
								<li><a class="<?php if($page=="form-vertical") { echo 'active'; } ?>" href="form-vertical"> Vertical Form </a></li>
								<li><a class="<?php if($page=="form-mask") { echo 'active'; } ?>" href="form-mask"> Form Mask </a></li>
								<li><a class="<?php if($page=="form-validation") { echo 'active'; } ?>" href="form-validation"> Form Validation </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show <?php if($page=="data-tables" || $page=="tables-basic") { echo 'active'; } ?>" id="v-pills-tables" role="tabpanel" aria-labelledby="v-pills-tables-tab">
							<p>Tables</p>
							<ul>
								<li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="tables-basic">Basic Tables </a></li>
								<li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="data-tables">Data Table </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-documentation" role="tabpanel" aria-labelledby="v-pills-documentation-tab">
							<p>Documentation</p>
							<ul>
								<li><a href="#">Documentation </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-changelog" role="tabpanel" aria-labelledby="v-pills-changelog-tab">
							<p>Change Log</p>
							<ul>
								<li><a href="#"><span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span> </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-multilevel" role="tabpanel" aria-labelledby="v-pills-multilevel-tab">
							<p>Multi Level</p>
							<ul>
								<li class="sub-menu">
									<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
									<ul style="display: none;" class="ml-3">
										<li class="sub-menu">
											<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 2</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li>
									</ul>
								</li>								
								<li><a href="javascript:void(0);">Level 2</a></li>
								<li><a href="javascript:void(0);">Level 3</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			@endif
			<!-- Sidebar -->
			<!-- Sidebar -->
			@if(Route::is(['components']))
            <div class="sidebar" id="sidebar">
				<div class="sidebar-left slimscroll">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link" id="v-pills-dashboard-tab" title="Dashboard" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
							<span class="material-icons-outlined">
								home
							</span>
						</a>
						<a class="nav-link" id="v-pills-apps-tab" title="Apps" data-toggle="pill" href="#v-pills-apps" role="tab" aria-controls="v-pills-apps" aria-selected="false">
							<span class="material-icons-outlined">
								dashboard
							</span>
						</a>
						<a class="nav-link" id="v-pills-employees-tab" title="Employees" data-toggle="pill" href="#v-pills-employees" role="tab" aria-controls="v-pills-employees" aria-selected="false">
							<span class="material-icons-outlined">
								people
							</span>
						</a>
						<a class="nav-link" id="v-pills-clients-tab" title="Clients" data-toggle="pill" href="#v-pills-clients" role="tab" aria-controls="v-pills-clients" aria-selected="false">
							<span class="material-icons-outlined">
								person
							</span>
						</a>
						<a class="nav-link" id="v-pills-projects-tab" title="Projects" data-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false">
							<span class="material-icons-outlined">
								topic
							</span>
						</a>
						<a class="nav-link" id="v-pills-leads-tab" title="Leads" data-toggle="pill" href="#v-pills-leads" role="tab" aria-controls="v-pills-leads" aria-selected="false">
							<span class="material-icons-outlined">
								leaderboard
							</span>
						</a>
						<a class="nav-link" id="v-pills-tickets-tab" title="Tickets" data-toggle="pill" href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets" aria-selected="false">
							<span class="material-icons-outlined">
								confirmation_number
							</span>
						</a>
						<a class="nav-link" id="v-pills-sales-tab" title="Sales" data-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="false">
							<span class="material-icons-outlined">
								shopping_bag
							</span>
						</a>
						<a class="nav-link" id="v-pills-accounting-tab" title="Accounting" data-toggle="pill" href="#v-pills-accounting" role="tab" aria-controls="v-pills-accounting" aria-selected="false">
							<span class="material-icons-outlined">
								account_balance_wallet
							</span>
						</a>
						<a class="nav-link" id="v-pills-payroll-tab" title="Payroll" data-toggle="pill" href="#v-pills-payroll" role="tab" aria-controls="v-pills-payroll" aria-selected="false">
							<span class="material-icons-outlined">
								request_quote
							</span>
						</a>
						<a class="nav-link" id="v-pills-policies-tab" title="Policies" data-toggle="pill" href="#v-pills-policies" role="tab" aria-controls="v-pills-policies" aria-selected="false">
							<span class="material-icons-outlined">
								verified_user
							</span>
						</a>
						<a class="nav-link" id="v-pills-reports-tab" title="Reports" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">
							<span class="material-icons-outlined">
								report_gmailerrorred
							</span>
						</a>
						<a class="nav-link" id="v-pills-performance-tab" title="Performance" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">
							<span class="material-icons-outlined">
								shutter_speed
							</span>
						</a>
						<a class="nav-link" id="v-pills-goals-tab" title="Goals" data-toggle="pill" href="#v-pills-goals" role="tab" aria-controls="v-pills-goals" aria-selected="false">
							<span class="material-icons-outlined">
								track_changes
							</span>
						</a>
						<a class="nav-link" id="v-pills-training-tab" title="Training" data-toggle="pill" href="#v-pills-training" role="tab" aria-controls="v-pills-training" aria-selected="false">
							<span class="material-icons-outlined">
								checklist_rtl
							</span>
						</a>
						<a class="nav-link" id="v-pills-promotion-tab" title="Promotions" data-toggle="pill" href="#v-pills-promotion" role="tab" aria-controls="v-pills-promotion" aria-selected="false">
							<span class="material-icons-outlined">
								auto_graph
							</span>
						</a>
						<a class="nav-link" id="v-pills-resignation-tab" title="Resignation" data-toggle="pill" href="#v-pills-resignation" role="tab" aria-controls="v-pills-resignation" aria-selected="false">
							<span class="material-icons-outlined">
								do_not_disturb_alt
							</span>
						</a>
						<a class="nav-link" id="v-pills-termination-tab" title="Termination" data-toggle="pill" href="#v-pills-termination" role="tab" aria-controls="v-pills-termination" aria-selected="false">
							<span class="material-icons-outlined">
								indeterminate_check_box
							</span>
						</a>
						<a class="nav-link" id="v-pills-assets-tab" title="Assets" data-toggle="pill" href="#v-pills-assets" role="tab" aria-controls="v-pills-assets" aria-selected="false">
							<span class="material-icons-outlined">
								web_asset
							</span>
						</a>
						<a class="nav-link" id="v-pills-jobs-tab" title="Jobs" data-toggle="pill" href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">
							<span class="material-icons-outlined">
								work_outline
							</span>
						</a>
						<a class="nav-link" id="v-pills-knowledgebase-tab" title="Knowledgebase" data-toggle="pill" href="#v-pills-knowledgebase" role="tab" aria-controls="v-pills-knowledgebase" aria-selected="false">
							<span class="material-icons-outlined">
								school
							</span>
						</a>
						<a class="nav-link" id="v-pills-activities-tab" title="Activities" data-toggle="pill" href="#v-pills-activities" role="tab" aria-controls="v-pills-activities" aria-selected="false">
							<span class="material-icons-outlined">
								toggle_off
							</span>
						</a>
						<a class="nav-link" id="v-pills-users-tab" title="Users" data-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false">
							<span class="material-icons-outlined">
								group_add
							</span>
						</a>
						<a class="nav-link" id="v-pills-settings-tab" title="Settings" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
							<span class="material-icons-outlined">
								settings
							</span>
						</a>
						<a class="nav-link" id="v-pills-profile-tab" title="Profile" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
							<span class="material-icons-outlined">
								manage_accounts
							</span>
						</a>
						<a class="nav-link" id="v-pills-authentication-tab" title="Authentication" data-toggle="pill" href="#v-pills-authentication" role="tab" aria-controls="v-pills-authentication" aria-selected="false">
							<span class="material-icons-outlined">
								perm_contact_calendar
							</span>
						</a>
						<a class="nav-link" id="v-pills-errorpages-tab" title="Error Pages" data-toggle="pill" href="#v-pills-errorpages" role="tab" aria-controls="v-pills-errorpages" aria-selected="false">
							<span class="material-icons-outlined">
								announcement
							</span>
						</a>
						<a class="nav-link" id="v-pills-subscriptions-tab" title="Subscriptions" data-toggle="pill" href="#v-pills-subscriptions" role="tab" aria-controls="v-pills-subscriptions" aria-selected="false">
							<span class="material-icons-outlined">
								loyalty
							</span>
						</a>
						<a class="nav-link" id="v-pills-pages-tab" title="Pages" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">
							<span class="material-icons-outlined">
								layers
							</span>
						</a>
						<a class="nav-link <?php if($page=="components") { echo 'active'; } ?>" id="v-pills-components-tab" title="Components" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">
							<span class="material-icons-outlined">
								branding_watermark
							</span>
						</a>
						<a class="nav-link" id="v-pills-forms-tab" title="Forms" data-toggle="pill" href="#v-pills-forms" role="tab" aria-controls="v-pills-forms" aria-selected="false">
							<span class="material-icons-outlined">
								view_day
							</span>
						</a>
						<a class="nav-link" id="v-pills-tables-tab" title="Tables" data-toggle="pill" href="#v-pills-tables" role="tab" aria-controls="v-pills-tables" aria-selected="false">
							<span class="material-icons-outlined">
								table_rows
							</span>
						</a>
						<a class="nav-link" id="v-pills-documentation-tab" title="Documentation" data-toggle="pill" href="#v-pills-documentation" role="tab" aria-controls="v-pills-documentation" aria-selected="false">
							<span class="material-icons-outlined">
								description
							</span>
						</a>
						<a class="nav-link" id="v-pills-changelog-tab" title="Changelog" data-toggle="pill" href="#v-pills-changelog" role="tab" aria-controls="v-pills-changelog" aria-selected="false">
							<span class="material-icons-outlined">
								sync_alt
							</span>
						</a>
						<a class="nav-link" id="v-pills-multilevel-tab" title="Multilevel" data-toggle="pill" href="#v-pills-multilevel" role="tab" aria-controls="v-pills-multilevel" aria-selected="false">
							<span class="material-icons-outlined">
								library_add_check
							</span>
						</a>
					</div>
				</div>
				
				<div class="sidebar-right">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
							<p>Dashboard</p>
							<ul>
								<li>
									<a href="index">Admin Dashboard</a>
								</li>
								<li>
									<a href="employee-dashboard">Employee Dashboard</a>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-apps" role="tabpanel" aria-labelledby="v-pills-apps-tab">
							<p>App</p>
							<ul>
								<li>
									<a href="chat">Chat</a>
								</li>
								<li class="sub-menu">
									<a href="#">Calls <span class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li><a href="voice-call">Voice Call</a></li>
										<li><a href="video-call">Video Call</a></li>
										<li><a href="outgoing-call">Outgoing Call</a></li>
										<li><a href="incoming-call">Incoming Call</a></li>
									</ul>
								</li>
								<li>
									<a href="calender">Calendar</a>
								</li>
								<li>
									<a href="contacts">Contacts</a>
								</li>
								<li>
									<a href="inbox">Email</a>
								</li>
								<li>
									<a href="file-manager">File Manager</a>
								</li>
							</ul>						
						</div>
						<div class="tab-pane fade" id="v-pills-employees" role="tabpanel" aria-labelledby="v-pills-employees-tab">
							<p>Employees</p>
							<ul>
								<li><a href="employees">All Employees</a></li>
								<li><a href="holidays">Holidays</a></li>
								<li><a href="leaves">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
								<li><a href="leaves-employee">Leaves (Employee)</a></li>
								<li><a href="leave-settings">Leave Settings</a></li>
								<li><a href="attendance">Attendance (Admin)</a></li>
								<li><a href="attendance-employee">Attendance (Employee)</a></li>
								<li><a href="departments">Departments</a></li>
								<li><a href="designations">Designations</a></li>
								<li><a href="timesheet">Timesheet</a></li>
								<li><a href="shift-scheduling">Shift & Schedule</a></li>
								<li><a href="overtime">Overtime</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab">
							<p>Clients</p>
							<ul>
								<li><a href="clients">Clients</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
							<p>Projects</p>
							<ul>
								<li><a href="projects">Projects</a></li>
								<li><a href="tasks">Tasks</a></li>
								<li><a href="task-board">Task Board</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-leads" role="tabpanel" aria-labelledby="v-pills-leads-tab">
							<p>Leads</p>
							<ul>
								<li><a href="leads">Leads</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-tickets" role="tabpanel" aria-labelledby="v-pills-tickets-tab">
							<p>Tickets</p>
							<ul>
								<li><a href="tickets">Tickets</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
							<p>Sales</p>
							<ul>
								<li><a href="estimates">Estimates</a></li>
								<li><a href="invoices">Invoices</a></li>
								<li><a href="payments">Payments</a></li>
								<li><a href="expenses">Expenses</a></li>
								<li><a href="provident-fund">Provident Fund</a></li>
								<li><a href="taxes">Taxes</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-accounting" role="tabpanel" aria-labelledby="v-pills-accounting-tab">
							<p>Accounting</p>
							<ul>
								<li><a href="categories">Categories</a></li>
								<li><a href="budgets">Budgets</a></li>
								<li><a href="budget-expenses">Budget Expenses</a></li>
								<li><a href="budget-revenues">Budget Revenues</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-payroll" role="tabpanel" aria-labelledby="v-pills-payroll-tab">
							<p>Payroll</p>
							<ul>
								<li><a href="salary" class="active"> Employee Salary </a></li>
								<li><a href="salary-view"> Payslip </a></li>
								<li><a href="payroll-items"> Payroll Items </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">
							<p>Policies</p>
							<ul>
								<li><a href="policies"> Policies </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
							<p>Reports</p>
							<ul>
								<li><a href="expense-reports"> Expense Report </a></li>
								<li><a href="invoice-reports"> Invoice Report </a></li>
								<li><a href="payments-reports"> Payments Report </a></li>
								<li><a href="project-reports"> Project Report </a></li>
								<li><a href="task-reports"> Task Report </a></li>
								<li><a href="user-reports"> User Report </a></li>
								<li><a href="employee-reports"> Employee Report </a></li>
								<li><a href="payslip-reports"> Payslip Report </a></li>
								<li><a href="attendance-reports"> Attendance Report </a></li>
								<li><a href="leave-reports"> Leave Report </a></li>
								<li><a href="daily-reports"> Daily Report </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
							<p>Performance</p>
							<ul>
								<li><a href="performance-indicator"> Performance Indicator </a></li>
								<li><a href="performance"> Performance Review </a></li>
								<li><a href="performance-appraisal"> Performance Appraisal </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-goals" role="tabpanel" aria-labelledby="v-pills-goals-tab">
							<p>Goals</p>
							<ul>
								<li><a href="goal-tracking"> Goal List </a></li>
								<li><a href="goal-type"> Goal Type </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab">
							<p>Training</p>
							<ul>
								<li><a href="training"> Training List </a></li>
								<li><a href="trainers"> Trainers</a></li>
								<li><a href="training-type"> Training Type </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-promotion" role="tabpanel" aria-labelledby="v-pills-promotion-tab">
							<p>Promotion</p>
							<ul>
								<li><a href="promotion"> Promotion </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-resignation" role="tabpanel" aria-labelledby="v-pills-resignation-tab">
							<p>Resignation</p>
							<ul>
								<li><a href="resignation"> Resignation </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-termination" role="tabpanel" aria-labelledby="v-pills-termination-tab">
							<p>Termination</p>
							<ul>
								<li><a href="termination"> Termination </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-assets" role="tabpanel" aria-labelledby="v-pills-assets-tab">
							<p>Assets</p>
							<ul>
								<li><a href="assets"> Assets </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">
							<p>Jobs</p>
							<ul>
								<li><a href="user-dashboard"> User Dasboard </a></li>
								<li><a href="jobs-dashboard"> Jobs Dasboard </a></li>
								<li><a href="jobs"> Manage Jobs </a></li>
								<li><a href="job-applicants"> Applied Jobs </a></li>
								<li><a href="manage-resumes"> Manage Resumes </a></li>
								<li><a href="shortlist-candidates"> Shortlist Candidates </a></li>
								<li><a href="interview-questions"> Interview Questions </a></li>
								<li><a href="offer-approvals"> Offer Approvals </a></li>
								<li><a href="experience-level"> Experience Level </a></li>
								<li><a href="candidates"> Candidates List </a></li>
								<li><a href="schedule-timing"> Schedule timing </a></li>
								<li><a href="apptitude-result"> Aptitude Results </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-knowledgebase" role="tabpanel" aria-labelledby="v-pills-knowledgebase-tab">
							<p>Knowledgebase</p>
							<ul>
								<li><a href="knowledgebase"> Knowledgebase </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">
							<p>Activities</p>
							<ul>
								<li><a href="activities"> Activities </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-activities-tab">
							<p>Users</p>
							<ul>
								<li><a href="users"> Users </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<p>Settings</p>
							<ul>
								<li><a href="settings"> Settings </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<p>Profile</p>
							<ul>
								<li><a href="profile"> Employee Profile </a></li>
								<li><a href="client-profile"> Client Profile </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-authentication" role="tabpanel" aria-labelledby="v-pills-authentication-tab">
							<p>Authentication</p>
							<ul>
								<li><a href="login"> Login </a></li>
								<li><a href="register"> Register </a></li>
								<li><a href="forgot-password"> Forgot Password </a></li>
								<li><a href="otp"> OTP </a></li>
								<li><a href="lock-screen"> Lock Screen </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-errorpages" role="tabpanel" aria-labelledby="v-pills-errorpages-tab">
							<p>Error Pages</p>
							<ul>
								<li><a href="error-404">404 Error </a></li>
								<li><a href="error-500">500 Error </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-subscriptions" role="tabpanel" aria-labelledby="v-pills-subscriptions-tab">
							<p>Subscriptions</p>
							<ul>
								<li><a href="subscriptions"> Subscriptions (Admin) </a></li>
								<li><a href="subscriptions-company"> Subscriptions (Company) </a></li>
								<li><a href="subscribed-companies"> Subscribed Companies</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
							<p>Pages</p>
							<ul>
								<li><a href="search"> Search </a></li>
								<li><a href="faq"> FAQ </a></li>
								<li><a href="terms"> Terms </a></li>
								<li><a href="privacy-policy"> Privacy Policy </a></li>
								<li><a href="blank-page"> Blank Page </a></li>
								<li><a href="components"> Components </a></li>
							</ul>
						</div>
						<div class="tab-pane fade show stickyside <?php if($page=="components") { echo 'active'; } ?>"  id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
							<p>Components</p>
							<ul>
								<li> 
									<a href="#comp_alerts" class="active">Alerts</a>
								</li>
								<li> 
									<a href="#comp_breadcrumbs">Breadcrumbs</a>
								</li>
								<li> 
									<a href="#comp_buttons">Buttons</a>
								</li>
								<li> 
									<a href="#comp_cards">Cards</a>
								</li>
								<li> 
									<a href="#comp_dropdowns">Dropdowns</a>
								</li>
								<li> 
									<a href="#comp_pagination">Pagination</a>
								</li>
								<li> 
									<a href="#comp_progress">Progress</a>
								</li>
								<li> 
									<a href="#comp_tabs">Tabs</a>
								</li>
								<li> 
									<a href="#comp_typography">Typography</a>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-forms" role="tabpanel" aria-labelledby="v-pills-forms-tab">
							<p>Forms</p>
							<ul>
								<li><a href="form-basic-inputs">Basic Inputs </a></li>
								<li><a href="form-input-groups">Input Groups </a></li>
								<li><a href="form-horizontal">Horizontal Form </a></li>
								<li><a href="form-vertical"> Vertical Form </a></li>
								<li><a href="form-mask"> Form Mask </a></li>
								<li><a href="form-validation"> Form Validation </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-tables" role="tabpanel" aria-labelledby="v-pills-tables-tab">
							<p>Tables</p>
							<ul>
								<li><a href="tables-basic">Basic Tables </a></li>
								<li><a href="data-tables">Data Table </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-documentation" role="tabpanel" aria-labelledby="v-pills-documentation-tab">
							<p>Documentation</p>
							<ul>
								<li><a href="#">Documentation </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-changelog" role="tabpanel" aria-labelledby="v-pills-changelog-tab">
							<p>Change Log</p>
							<ul>
								<li><a href="#"><span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span> </a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="v-pills-multilevel" role="tabpanel" aria-labelledby="v-pills-multilevel-tab">
							<p>Multi Level</p>
							<ul>
								<li class="sub-menu">
									<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
									<ul style="display: none;" class="ml-3">
										<li class="sub-menu">
											<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 2</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li>
									</ul>
								</li>								
								<li><a href="javascript:void(0);">Level 2</a></li>
								<li><a href="javascript:void(0);">Level 3</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			@endif
			<!-- Sidebar -->
</div>	
<!-- Delete Employee Modal -->
		<div class="modal custom-modal fade" id="delete_employee" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete</h3>
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
		<!-- /Delete Employee Modal -->	
		<!-- Modal -->
		<div id="selectMyTime" class="modal  custom-modal fade" role="dialog">
		  	<div class="modal-dialog modal-dialog-centered">

		    <!-- Modal content-->
		   		<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Select Your Time</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Day1 <span class="text-danger">*</span></label>
									<select class="form-control" name="designations" id="designations">
										<option value="">11.00am - 11.30am (24 Feb 2020) </option>
										<option value="">1.00pm - 1.30pm (25 Feb 2020) </option>
										<option value="">3.00pm - 3.30pm (26 Feb 2020) </option>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-btn delete-action mt-3">
							<div class="row">
								<div class="col-6">
									<button type="button" class="btn btn-primary btn-block cancel-btn">Submit</button>
								</div>
								<div class="col-6">
									<button type="button" class="btn btn-primary btn-block cancel-btn" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
			 		</div>
				</div>
				</div>
			</div>
		</div>
<div class="modal question-modal" id="free_question_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered	" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="mb-0">Result for Your Questions</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="form-horzontal">
					<div class="col-md-12">
						<div class="text-left mb-3">
							<h3 class="mb-0">Correct Answers : <span class="text-success"><b>5</b></span></h3>
						</div>
						<div class="text-left">
							<h3 class="mb-0">Wrong Answer : <span class="text-danger"><b>1</b></span></h3>
						</div>
					</div>
				</div>
				<div class="mt-3">
				<p>Please click Next to move main menu.</p>
				<a href="job-aptitude" class="btn btn-primary btn-lg submit-btn d-block">Next</a>
			</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Add Shift Modal -->
			<div id="add_shift" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Shift</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group" >
											<label>Min Start Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Start Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Max Start Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>											
										</div>
									</div>		
									<div class="col-md-4">
										<div class="form-group" >
											<label>Min End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Max End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>											
										</div>
									</div>	
									<div class="col-md-4">
										<div class="form-group">
											<label>Break Time (In Minutes) </label>
											<input type="text" class="form-control">											
										</div>
									</div>
									<div class="col-sm-12">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Recurring Shift</label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Repeat Every</label>
											<select class="select">
												<option value="">1 </option>
												<option value="1">2</option>
												<option value="2">3</option>
												<option value="3">4</option>
												<option  selected value="4">5</option>
												<option value="3">6</option>
											</select>
											<label class="col-form-label">Week(s)</label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group wday-box">
											<label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">M</span></label>
		
											<label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">T</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">W</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">T</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">F</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">S</span></label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">End On <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck2">
											<label class="custom-control-label" for="customCheck2">Indefinite</label>
										</div>
									</div>								
							
									<div class="col-md-12">
										<div class="form-group">
											<label>Add Tag </label>
											<input type="text" class="form-control">											
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Add Note </label>
											<textarea class="form-control"></textarea>											
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
			<!-- /Add Shift Modal -->

			<!-- Edit Shift Modal -->
			<div id="edit_shift" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Shift</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group" >
											<label>Min Start Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Start Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Max Start Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>											
										</div>
									</div>		
									<div class="col-md-4">
										<div class="form-group" >
											<label>Min End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Max End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>											
										</div>
									</div>	
									<div class="col-md-4">
										<div class="form-group">
											<label>Break Time (In Minutes) </label>
											<input type="text" class="form-control">											
										</div>
									</div>
									<div class="col-sm-12">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck3">
											<label class="custom-control-label" for="customCheck3">Recurring Shift</label>
											</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Repeat Every</label>
											<select class="select">
												<option value="">1 </option>
												<option value="1">2</option>
												<option value="2">3</option>
												<option value="3">4</option>
												<option  selected value="4">5</option>
												<option value="3">6</option>
											</select>
											<label class="col-form-label">Week(s)</label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group wday-box">
											<label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">M</span></label>
		
											<label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">T</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">W</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">T</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">F</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">S</span></label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">End On <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck4">
											<label class="custom-control-label" for="customCheck4">Indefinite</label>
											</div>
									</div>								
							
									<div class="col-md-12">
										<div class="form-group">
											<label>Add Tag </label>
											<input type="text" class="form-control">											
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Add Note </label>
											<textarea class="form-control"></textarea>											
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
			<!-- /Edit Shift Modal -->

			<!-- Add Schedule Modal -->
			<div id="add_schedule" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Schedule</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Department <span class="text-danger">*</span></label>
											<select class="select">
												<option value="">Select</option>
												<option value="">Development</option>
												<option value="1">Finance</option>
												<option value="2">Finance and Management</option>
												<option value="3">Hr & Finance</option>
												<option value="4">ITech</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
											<select class="select">
												<option value="">Select </option>
												<option value="1">Richard Miles </option>
												<option value="2">John Smith</option>
												<option value="3">Mike Litorus </option>
												<option value="4">Wilmer Deluna</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Shifts <span class="text-danger">*</span></label>
											<select class="select">
												<option value="">Select </option>
												<option value="1">10'o clock Shift</option>
												<option value="2">10:30 shift</option>
												<option value="3">Daily Shift </option>
												<option value="4">New Shift</option>
											</select>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">End Time   <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
											<div class="input-group time timepicker">
												<input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="far fa-clock"></i></span></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Accept Extra Hours </label>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
												<label class="custom-control-label" for="customSwitch1"></label>
												</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Publish </label>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch2" checked="">
												<label class="custom-control-label" for="customSwitch2"></label>
											</div>
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
			<!-- /Add Schedule Modal -->