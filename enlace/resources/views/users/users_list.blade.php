@extends('partials.menu')

@section('content')

<table class="">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<form action="{{ route('users.disableUser') }}" method="POST">
    @csrf
    <select name="user_id" id="">
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name . ' / ' . $user->email }}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>

@endsection