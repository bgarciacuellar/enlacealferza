<?php $page="compose";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid pb-0">

                    <!-- Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-head-box">
                                <h3>Compose</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Compose</li>
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
                                        <li> 
                                            <a href="inbox"><i class="la la-home"></i> <span>Back to Inbox</span></a>
                                        </li>
                                        <li> 
                                            <a href="inbox">Inbox <span class="mail-count">(21)</span></a>
                                        </li>
                                        <li> 
                                            <a href="#">Starred</a>
                                        </li>
                                        <li> 
                                            <a href="#">Sent Mail</a>
                                        </li>
                                        <li> 
                                            <a href="#">Draft <span class="mail-count">(8)</span></a>
                                        </li>
                                        <li> 
                                            <a href="#">Trash</a>
                                        </li>
                                        <li class="menu-title">Label <a href="#"><i class="fa fa-plus"></i></a></li>
                                        <li> 
                                            <a href="#"><i class="fa fa-circle text-success mail-label w-auto"></i> Work</a>
                                        </li>
                                        <li> 
                                            <a href="#"><i class="fa fa-circle text-danger mail-label w-auto"></i> Office</a>
                                        </li>
                                        <li> 
                                            <a href="#"><i class="fa fa-circle text-warning mail-label w-auto"></i> Personal</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 settings-cont">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" placeholder="To" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Cc" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Bcc" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="text-center">
                                                <button class="btn btn-primary"><span>Send</span> <i class="fas fa-paper-plane m-l-5"></i></button>
                                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="far fa-save m-l-5"></i></button>
                                                <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i class="far fa-trash-alt m-l-5"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->



@endsection