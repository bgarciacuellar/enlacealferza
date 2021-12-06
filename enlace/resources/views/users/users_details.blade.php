@extends('partials.menu')

@section('content')

<h2>Nombre</h2>
<p>{{ $user->name }}</p>
<h2>Correo</h2>
<p>{{ $user->email }}</p>

@endsection