<?php $page="lock-screen";?>
@extends('layout.mainlayout')
@section('content')


<!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="account-content">
                
                <div class="container">
                    
                    <div class="account-box">
                        <div class="account-wrapper">

                            <!-- Lock User Img -->
                            <div class="lock-user">
                                <img alt="" src="assets/img/profiles/avatar-02.jpg" class="rounded-circle">
                                <h4>John Doe</h4>
                            </div>
                            <!-- /Lock User Img -->
                            
                            <!-- Account Form -->
                            <form action="index">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Enter</button>
                                </div>
                                <div class="account-footer">
                                    <p>Sign in as a different user? <a href="register">Login</a></p>
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