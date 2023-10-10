@extends('partials.menu-user')

@section('title')
    Nóminas
@endsection

@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        @if (auth()->user()->hasRoles(['ejecutivo']))
            <div class="row filter-row">
                <div class="col-md-8">
                </div>

                <div class="col-md-4">
                    <div class="add-emp-section">
                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                            data-bs-target="#create_incident"><i class="fas fa-plus"></i> Solicitar nóminas</a>
                    </div>
                </div>
            </div>
        @endif
        <!-- /Search Filter -->
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
            <form action="{{ route('user.ticketList') }}">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <label for="company">Selecciona una compañía</label>
                        <select name="company" class="form-control" required>
                            <option value="">Selecciona una opción</option>
                            @foreach ($myCompanies as $myCompany)
                                <option value="{{ $myCompany['id'] }}"
                                    {{ $selectedCompany == $myCompany['id'] ? 'selected' : null }}>
                                    {{ $myCompany['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-success btn-add-emp">Elegir</button>
                    </div>
                </div>
            </form>
            <div class="col-md-12">
                <div class="table-responsive">
                    @if ($selectedCompany)
                        @if (count($tickets) > 0)
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 250px;">Número de ticket</th>
                                        <th>Tipo de nómina</th>
                                        <th>Fecha de creación</th>
                                        <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>
                                                <a href="{{ route('ticket.details', $ticket['id']) }}">
                                                    # {{ $ticket['id'] }}
                                                </a>
                                            </td>
                                            <td>{{ $ticket->category ? $ticket->category : 'N/A' }}</td>
                                            <td>{{ $ticket->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <span class="role-info role-bg-one">{{ $ticket['statusString'] }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class="text-center">No se han generado nóminas</h3>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add Employee Modal -->
    <div id="create_incident" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Solicitar nóminas</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ticket.create') }}" method="POST" id="create_ticket"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label">Seleccionar tipo de ticket <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control ticket_type" name="ticket_type" required>
                                        <option value="nómina">Nómina</option>
                                        <option value="catega">Catega</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Empresa<span class="text-danger">*</span></label>
                                    <select class="form-control create_ticket_company_id" name="company" required>
                                        <option value="">Selecciona una empresa</option>
                                        @foreach ($myCompanies as $myCompany)
                                            <option value="{{ $myCompany['id'] }}">{{ $myCompany['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 payroll_type">
                                <div class="form-group">
                                    <label class="col-form-label">Fecha limite de nómina <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="date" name="limit_date" required>
                                </div>
                            </div>
                            <div class="col-sm-6 payroll_type">
                                <div class="form-group">
                                    <label class="col-form-label">Tipo de nómina <span class="text-danger">*</span></label>
                                    <select class="form-control create_ticket_category" name="category" required>
                                        <option value="">Selecciona un tipo de nómina</option>
                                        @foreach ($myCompanies as $myCompany)
                                            @foreach ($myCompany['payrolls'] as $payroll)
                                                <option value="{{ $payroll->type }}">
                                                    {{ $payroll->type . ' - ' . $payroll->name }}
                                                </option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Periodo de pago <span class="text-danger">*</span></label>
                                    <select class="form-control" name="payment_period" required>
                                        <option value="">Selecciona un periodo de pago</option>
                                        @foreach ($paymentsPeriod as $paymentPeriod)
                                            <option value="{{ $paymentPeriod }}">{{ ucfirst($paymentPeriod) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Archivo maestro <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="file" name="master_file" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Comentarios</label>
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal"
                                aria-label="Close">Cancelar</button>
                            <button type="submit" class="btn btn-primary submit-btn">Solicitar nóminas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        let menuIcon = "topic";
        $('.create_ticket_company_id').change(function() {
            $.ajax({
                url: "{{ route('ticket.getPayrollByCompany') }}",
                method: 'POST',
                data: $('#create_ticket').serialize(),
            }).done(function(res) {
                if (res) {
                    let options = `<option value="">Selecciona un tipo de nómina</option>`;
                    res.forEach(payroll =>
                        options +=
                        `<option value="${payroll.type}">${payroll.type+' - '+payroll.name}</option>`);
                    $('.create_ticket_category').html(options);
                }
            });
        });
        $(".ticket_type").change(function() {
            if ($(this).val() == 'nómina') {
                $('.payroll_type').show();
                $('.payroll_type input').prop('required', true);
                $('.payroll_type select').prop('required', true);
            } else {
                $('.payroll_type input').prop('required', false);
                $('.payroll_type select').prop('required', false);
                $('.payroll_type').hide();
            }
        });
    </script>
@endsection
