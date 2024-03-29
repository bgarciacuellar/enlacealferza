@extends('partials.menu')

@section('title')
    Nóminas
@endsection

@section('content')

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-md-8">
                {{-- <form action="{{ route('admin.searchUsers') }}">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus mb-0">
                            <input type="text" class="form-control floating" name="employee_id">
                            <label class="focus-label">ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus mb-0">
                            <input type="text" class="form-control floating" name="name">
                            <label class="focus-label">Fecha</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" href="#" class="btn btn-success btn-search"><i
                                class="fas fa-search me-2"></i> Buscar </button>
                    </div>
                </div>
            </form> --}}
            </div>
            <div class="col-md-4">
                <div class="add-emp-section">
                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                        data-bs-target="#create_incident"><i class="fas fa-plus"></i> Solicitar Nóminas</a>
                </div>
            </div>
        </div>
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
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr>
                                <th style="width: 250px;">Número de ticket</th>
                                <th class="text-nowrap">Empresa</th>
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
                                    <td>{{ $ticket['company'] }}</td>
                                    <td>{{ $ticket['category'] ? $ticket['category'] : 'N/A' }}</td>
                                    <td>{{ $ticket['created_at'] }}</td>
                                    <td>
                                        <span class="role-info role-bg-one">{{ $ticket['status'] }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- create incident Modal -->
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
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
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
                                        @foreach ($payrolls as $payroll)
                                            <option value="{{ $payroll->type }}">
                                                {{ $payroll->type . ' - ' . $payroll->name }}
                                            </option>
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
                                    <label class="col-form-label">Archivo maestro <span class="text-danger">*</span></label>
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
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                type="button">Cancelar</button>
                            <button type="submit" class="btn btn-primary submit-btn">Solicitar nómina</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Employee Modal -->
    <div class="modal custom-modal fade" id="delete_employee" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Employee</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('admin.disableUser') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="user_id" class="delete_user_id">
                                    <button type="submit" class="btn btn-primary continue-btn">Deshabilitar</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Employee Modal -->

@endsection

@section('js')
    <script>
        /* $('#customer_data').serialize() */
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
