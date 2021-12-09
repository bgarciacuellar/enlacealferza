@extends('partials.menu')

@section('content')
@if (auth()->user()->hasRoles(['operador']))
<h2>Nombre del operador</h2>
@elseif(auth()->user()->hasRoles(['admin']))
<h2>Nombre del admin</h2>
@endif
<p>{{ $user->name }}</p>
<h2>Correo</h2>
<p>{{ $user->email }}</p>

@endsection