@extends('layout.mainlayout')
@section('content')
<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Budgets</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Accounts</li>
                                </ul>
                            </div>
                            <div class="col-auto float-right ml-auto">
                                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_categories"><i class="fa fa-plus"></i> Add Budgets</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Budget No</th>
                                            <th>Budget Title</th>
                                            <th>Budget Type</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Total Revenue</th>
                                            <th>Total Expenses</th>
                                            <th>Tax Amount</th>
                                            <th>Budget Amount</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tender</td>
                                            <td>Project</td>
                                            <td>01 Jan 2021</td>
                                            <td>31 Dec 2021</td>
                                            <td>2500000</td>
                                            <td>1500000</td>
                                            <td>10</td>
                                            <td>999990</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Project</td>
                                            <td>Project</td>
                                            <td>01 Feb 2021</td>
                                            <td>30 Apr 2021</td>
                                            <td>100000</td>
                                            <td>50000</td>
                                            <td>1000</td>
                                            <td>49000</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
                <!-- /Page Content -->
                
                <!-- Add Modal -->
                <div class="modal custom-modal fade" id="add_categories" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Budget</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                            <div class="form-group">
                                <label>Budget Title</label>
                                <input class="form-control" type="text" name="budget_title" placeholder="Budgets Title">
                            </div>

                                <label>Choose Budget Respect Type</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input BudgetType" type="radio" name="budget_type" id="project2" value="project">
                                  <label class="form-check-label" for="project2">Project</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input BudgetType" type="radio" name="budget_type" id="category1" value="category">
                                  <label class="form-check-label" for="category1">Category</label>
                                </div>
                        
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_start_date" placeholder="Start Date" data-date-format="dd-mm-yyyy"></div>
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_end_date" placeholder="End Date" data-date-format="dd-mm-yyyy"></div>
                            </div>

                            <div class="form-group">
                                <label>Expected Revenues</label>
                            </div>
                            <div class="AllRevenuesClass">
                                <div class="row AlLRevenues">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Revenue Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control RevenuETitle" value="" placeholder="Revenue Title" name="revenue_title[]" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Revenue Amount <span class="text-danger">*</span></label>
                                            <input type="text" name="revenue_amount[]" placeholder="Amount" value="" class="form-control RevenuEAmount" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="add-more">
                                            <a class="add_more_revenue" title="Add Revenue" style="cursor: pointer;" ><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Overall Revenues <span class="text-danger">(A)</span></label>
                                <input class="form-control" type="text" name="overall_revenues" id="overall_revenues1" placeholder="Overall Revenues" readonly style="cursor: not-allowed;">
                            </div>

                            <div class="form-group">
                                <label>Expected Expenses</label>
                            </div>
                            <div class="AllExpensesClass">
                                <div class="row AlLExpenses">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Expenses Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control EXpensesTItle" value="" placeholder="Expenses Title" name="expenses_title[]" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Expenses Amount <span class="text-danger">*</span></label>
                                            <input type="text" name="expenses_amount[]" placeholder="Amount" value="" class="form-control EXpensesAmount" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="add-more">
                                            <a class="add_more_expenses" title="Add Expenses" style="cursor: pointer;"><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Overall Expense <span class="text-danger">(B)</span></label>
                                <input class="form-control" type="text" name="overall_expenses" id="overall_expenses1" placeholder="Overall Expenses" readonly style="cursor: not-allowed;">
                            </div>


                            <div class="form-group">
                                <label>Expected Profit <span class="text-danger">( C = A - B )</span> </label>
                                <input class="form-control" type="text" name="expected_profit" id="expected_profit1" placeholder="Expected Profit" readonly style="cursor: not-allowed;">
                            </div>

                            <div class="form-group">
                                <label>Tax <span class="text-danger">(D)</span></label>
                                <input class="form-control" type="text" name="tax_amount" id="tax_amount1" placeholder="Tax Amount">
                            </div>

                            <div class="form-group">
                                <label>Budget Amount <span class="text-danger">( E = C - D )</span> </label>
                                <input class="form-control" type="text" name="budget_amount" id="budget_amount1" placeholder="Budget Amount" readonly style="cursor: not-allowed;">
                            </div>
                            <div class=" submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Modal -->

                <!-- Edit Modal -->
                <div class="modal custom-modal fade" id="edit_categories" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Budget</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label>Budget Title</label>
                                <input class="form-control" type="text" name="budget_title" placeholder="Budgets Title">
                            </div>

                                <label>Choose Budget Respect Type</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input BudgetType" type="radio" name="budget_type" id="project1" value="project">
                                  <label class="form-check-label" for="project1">Project</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input BudgetType" type="radio" name="budget_type" id="category" value="category">
                                  <label class="form-check-label" for="category">Category</label>
                                </div>
                        
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_start_date" placeholder="Start Date" data-date-format="dd-mm-yyyy"></div>
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_end_date" placeholder="End Date" data-date-format="dd-mm-yyyy"></div>
                            </div>

                            <div class="form-group">
                                <label>Expected Revenues</label>
                            </div>
                            <div class="AllRevenuesClass">
                                <div class="row AlLRevenues">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Revenue Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control RevenuETitle" value="" placeholder="Revenue Title" name="revenue_title[]" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Revenue Amount <span class="text-danger">*</span></label>
                                            <input type="text" name="revenue_amount[]" placeholder="Amount" value="" class="form-control RevenuEAmount" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="add-more">
                                            <a class="add_more_revenue" title="Add Revenue" style="cursor: pointer;" ><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Overall Revenues <span class="text-danger">(A)</span></label>
                                <input class="form-control" type="text" name="overall_revenues" id="overall_revenues" placeholder="Overall Revenues" readonly style="cursor: not-allowed;">
                            </div>

                            <div class="form-group">
                                <label>Expected Expenses</label>
                            </div>
                            <div class="AllExpensesClass">
                                <div class="row AlLExpenses">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Expenses Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control EXpensesTItle" value="" placeholder="Expenses Title" name="expenses_title[]" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Expenses Amount <span class="text-danger">*</span></label>
                                            <input type="text" name="expenses_amount[]" placeholder="Amount" value="" class="form-control EXpensesAmount" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="add-more">
                                            <a class="add_more_expenses" title="Add Expenses" style="cursor: pointer;"><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Overall Expense <span class="text-danger">(B)</span></label>
                                <input class="form-control" type="text" name="overall_expenses" id="overall_expenses" placeholder="Overall Expenses" readonly style="cursor: not-allowed;">
                            </div>


                            <div class="form-group">
                                <label>Expected Profit <span class="text-danger">( C = A - B )</span> </label>
                                <input class="form-control" type="text" name="expected_profit" id="expected_profit" placeholder="Expected Profit" readonly style="cursor: not-allowed;">
                            </div>

                            <div class="form-group">
                                <label>Tax <span class="text-danger">(D)</span></label>
                                <input class="form-control" type="text" name="tax_amount" id="tax_amount" placeholder="Tax Amount">
                            </div>

                            <div class="form-group">
                                <label>Budget Amount <span class="text-danger">( E = C - D )</span> </label>
                                <input class="form-control" type="text" name="budget_amount" id="budget_amount" placeholder="Budget Amount" readonly style="cursor: not-allowed;">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Modal -->

                <!-- Delete Holiday Modal -->
                <div class="modal custom-modal fade" id="delete" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete </h3>
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
                <!-- /Delete Holiday Modal -->
            </div>
            <!-- /Page Wrapper -->
@endsection