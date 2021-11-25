<?php $page="register";?>
@extends('layout.mainlayout')
@section('content')


<!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="account-content">
                
                <div class="container">
                    
                    <div class="account-box">
                        <div class="account-wrapper">
                            <h3 class="account-title">Register</h3>
                            <p class="account-subtitle">Access to our dashboard</p>
                            
                            <!-- Account Form -->
                            <form action="index">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password">
                                </div>
                                <div class="form-group">
                                    <label>Repeat Password</label>
                                    <input class="form-control" type="password">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Register</button>
                                </div>
                                <div class="account-footer">
                                    <p>Already have an account? <a href="login">Login</a></p>
                                </div>
                            </form>
                            <!-- /Account Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->


@endsection