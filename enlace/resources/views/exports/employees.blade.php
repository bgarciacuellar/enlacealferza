<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee['full_name'] }}</td>
                <td>{{ $employee['email'] }}</td>
                <td>{{ $employee['role'] }}</td>
                <td>{{ $employee['phone_number'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
