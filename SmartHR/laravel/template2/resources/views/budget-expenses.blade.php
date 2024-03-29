<?php $page="budget-expenses";?>
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
                                <h3>Budgets Expenses</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Budgets Expenses</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_categories"><i class="fas fa-plus"></i>  Add Expenses</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Notes</th>                    
                                            <th>Category Name</th>
                                            <th>SubCategory Name</th>
                                            <th>Amount</th>
                                            <th>Revenue Date</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Test</td>
                                            <td>Hardware</td>
                                            <td>Hardware Expenses</td>
                                            <td>1000.00</td>
                                            <td>06 Jan 2020</td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Test</td>
                                            <td>Project</td>
                                            <td>Project Expenses</td>
                                            <td>1000.00</td>
                                            <td>06 Jan 2020</td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></a>
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
                                <h5 class="modal-title">Add Expenses</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Amount <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="800.00" name="amount">
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="currency_symbol" class="form-control">
                                            <option value="$ - AUD">$ - Australian Dollar</option>
                                            <option value="Bs. - VEF">Bs. - Bolívar Fuerte</option>
                                            <option value="R$ - BRL">R$ - Brazilian Real</option>
                                            <option value="£ - GBP">£ - British Pound</option>
                                            <option value="$ - CAD">$ - Canadian Dollar</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Notes <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <textarea class="form-control ta" name="notes"></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Expense Date <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <input class="datepicker-input form-control" type="text" value="07-05-2021" name="expense_date" data-date-format="dd-mm-yyyy">
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Category <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <select name="category" class="form-control m-b" id="main_category">
                                            <option value="" disabled="" selected="">Choose Category</option>
                                            <option value="1">project1</option>
                                            <option value="3">test category</option>
                                            <option value="4">Hardware</option>
                                            <option value="5">Material</option>
                                            <option value="6">Vehicle</option>
                                            <option value="8">TestctrE</option>
                                            <option value="9">Twocatr</option>
                                            <option value="10">fesferwf</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Sub Category <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <select name="sub_category" class="form-control m-b" id="sub_category">
                                            <option value="">Choose Sub-Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row  position-relative">
                                    <label class="col-lg-12 control-label">Attach File</label>
                                    <div class="col-lg-12">
                                        
                                        <input type="file" class="form-control" data-buttontext="Choose File" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline input-s" name="receipt">
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
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
                                <h5 class="modal-title">Edit Expenses</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                              <div class="modal-body">
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Amount <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="800.00" name="amount">
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="currency_symbol" class="form-control">
                                            <option value="$ - AUD">$ - Australian Dollar</option>
                                            <option value="Bs. - VEF">Bs. - Bolívar Fuerte</option>
                                            <option value="R$ - BRL">R$ - Brazilian Real</option>
                                            <option value="£ - GBP">£ - British Pound</option>
                                            <option value="$ - CAD">$ - Canadian Dollar</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Notes <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <textarea class="form-control ta" name="notes"></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Expense Date <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <input class="datepicker-input form-control" type="text" value="07-05-2021" name="expense_date" data-date-format="dd-mm-yyyy">
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Category <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <select name="category" class="form-control m-b" id="main_category1">
                                            <option value="" disabled="" selected="">Choose Category</option>
                                            <option value="1">project1</option>
                                            <option value="3">test category</option>
                                            <option value="4">Hardware</option>
                                            <option value="5">Material</option>
                                            <option value="6">Vehicle</option>
                                            <option value="8">TestctrE</option>
                                            <option value="9">Twocatr</option>
                                            <option value="10">fesferwf</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-lg-12 control-label">Sub Category <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <select name="sub_category" class="form-control m-b" id="sub_category1">
                                            <option value="">Choose Sub-Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row  position-relative">
                                    <label class="col-lg-12 control-label">Attach File</label>
                                    <div class="col-lg-12">
                                        
                                        <input type="file" class="form-control" data-buttontext="Choose File" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline input-s" name="receipt">
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
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