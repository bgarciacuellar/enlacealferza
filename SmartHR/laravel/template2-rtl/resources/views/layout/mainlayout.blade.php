<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head')
</head>
@if(Route::is(['login','register','forgot-password','lock-screen','otp']))
<body class="account-page">
@endif
@if(Route::is(['error-404','error-500']))
<body class="error-page">
@endif
@if(!Route::is(['login','register','error-404','error-500','forgot-password','lock-screen','otp']))
@include('layout.partials.nav')
@include('layout.partials.header')
@endif
@yield('content')
@include('layout.partials.footer-scripts')
</body>
</html>