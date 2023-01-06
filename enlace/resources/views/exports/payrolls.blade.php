<table>
    <thead>
        <tr>
            <th>Sucursal</th>
            <th>Sucursal descripcion</th>
            <th>Nomina</th>
            <th>Tipo de nomina</th>
            <th>Descripcion nomina</th>
            <th>Contacto</th>
            <th>Ejecutivo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payrolls as $payroll)
            <tr>
                <td>{{ $payroll['company_address'] }}</td>
                <td>{{ $payroll['company_name'] }}</td>
                <td>{{ $payroll['payment_period'] }}</td>
                <td>{{ $payroll['payroll_type'] }}</td>
                <td>{{ $payroll['payroll_name'] }}</td>
                <td>{{ $payroll['company_contact'] }}</td>
                <td>{{ $payroll['user_name'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
