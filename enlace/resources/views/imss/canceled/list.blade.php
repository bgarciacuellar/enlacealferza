@extends('partials.menu-employee')

@section('title')
    Bajas
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <div class="add-emp-section">
                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal"
                        data-bs-target="#request_cancel"><i class="fas fa-plus"></i> Solicitar baja</a>
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
                                <th>Nombre</th>
                                <th>Fecha de baja</th>
                                <th>Estatus</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cancelsImss as $cancelImss)
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a
                                                href="{{ route('imss.cancelImssDetails', $cancelImss->id) }}">{{ $cancelImss->name }}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $cancelImss->cancel_date_formated }}</td>
                                    <td>{{ $cancelImss->statusString }}</td>
                                    <td class="text-end ico-sec">
                                        <a href="#" data-bs-toggle="modal"
                                            onclick="getUserId({{ $cancelImss->id }}, 'request_delete')"
                                            data-bs-target="#delete_request"><i
                                                class="far fa-trash-alt text-danger"></i></a>
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

    <!-- request a cancel -->
    <div id="request_cancel" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Solicitar baja</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('imss.cancelImss', $companyID) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre completo del colaborador <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Fecha de baja <span class="text-danger">*</span></label>
                                    <input class="form-control" type="date" name="cancel_date" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Observación <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="notes" type="text"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Comprobante de baja <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="leave_receipt" type="text">
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                    type="button">Cancelar</button>
                                <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete request -->
    <div class="modal custom-modal fade" id="delete_request" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Eliminar solicitud</h3>
                        <p>Esta seguro de eliminar está solicitud?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('imss.deleteCancelImssRequest') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="request_cancel" class="request_delete">
                                    <button type="submit" class="btn btn-primary continue-btn">Eliminar</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" data-bs-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        let menuIcon = "authentication";
    </script>
@endsection
