@extends('partials.menu-employee')

@section('title')
    Incidencias
@endsection

@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">
        @if ($errors->any())
            <div class="mx-auto text-center">
                <ul
                    style="top: 20px; left: 0; right: 0; position: fixed; width: 310px; height: auto; margin: auto; padding: 0px; list-style-type: none; z-index: 10000000;">
                    @foreach ($errors->all() as $error)
                        <li
                            style="overflow: hidden; border-radius: 2px; color: rgb(255, 255, 255); width: 310px; cursor: pointer;">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if (count($tickets) > 0)
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Tipo de nómina</th>
                                    <th>Fecha limite de incidencia</th>
                                    <th class="text-center">Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td>
                                            <a href="{{ route('employee.details', $ticket->id) }}">
                                                {{ $ticket->category }}
                                            </a>
                                        </td>
                                        <td>{{ $ticket->limit_date->format('d/m/Y') }}</td>
                                        <td>
                                            <span class="role-info role-bg-one">{{ $ticket->statusString }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3 class="text-center">No se han generado nóminas</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

@endsection

@section('js')
    <script>
        let menuIcon = "home";
    </script>
@endsection
