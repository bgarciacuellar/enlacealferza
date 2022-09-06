@extends('partials.menu')

@section('title')
Detalles del crédito
@endsection

@section('content')
<div class="card mb-0 pb-5">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img alt="logo"
                                    src="{{ $company->logo ? asset('storage/logos/' . $company->logo) : asset('img/company-default.jpg') }}"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">Crédito de: {{ $company->name }}</h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Total del crédito:</div>
                                        <div class="text">
                                            <span>{{ $credit->total_amount }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Pagado:</div>
                                        <div class="text">
                                            <span>{{ $credit->paid }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Usado:</div>
                                        <div class="text">
                                            <span>{{ $credit->used }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Fecha limite:</div>
                                        <div class="text">
                                            <span>{{ $credit->due_date->format('d/m/Y') }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">Estatus:</div>
                                        <div class="text">
                                            <span>{{ $credit->status ? 'Al corriente' : 'Pagado' }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon"
                            href="#"><i class="fas fa-pencil-alt"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card tab-box mt-3">
    <div class="row user-tabs">
        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom pt-3 pb-2">
                <li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Historial</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="tab-content">

    <!-- employees -->
    <div id="emp_profile" class="pro-overview tab-pane fade show active">
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Créditos aplicados </h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Número de nómina</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usedCreditsHistory as $usedCreditHistory)
                                <tr>
                                    <td><a href="{{ route('ticket.details', $usedCreditHistory->ticket_id) }}">
                                            No. {{ $usedCreditHistory->ticket_id }} <i
                                                class="fas fa-file-invoice"></i></a></td>
                                    <td>{{ $usedCreditHistory->amount }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title">Créditos pagados <a href="#" class="edit-icon" data-bs-toggle="modal"
                                data-bs-target="#add_payment"><i class="fas fa-plus-circle"></i></a></h3>
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paidCreditsHistory as $paidCreditHistory)
                                <tr>
                                    <td>{{ $paidCreditHistory->amount }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- update credits -->
<div id="profile_info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar datos</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.updateCredit', $credit->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Cantidad de créditos <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="total_amount"
                                    value="{{ $credit->total_amount }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fecha limite de pago <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="due_date"
                                    value="{{ $credit->due_date->format('Y-m-d') }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Estatus</label>
                                <select name="status" class="form-control" required>
                                    <option value="1" {{ $credit->status ? 'selected' : null }}>Al corriente</option>
                                    <option value="0" {{ !$credit->status ? 'selected' : null }}>Pagado</option>
                                    <option value="">Al corriente</option>
                                    <option value="">Atrasado</option>
                                    <option value="">Vencido</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Comentarios <span class="text-danger">*</span></label>
                                <textarea name="comment" class="form-control" cols="30"
                                    rows="10">{{ $credit->comment }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                            type="button">Cancelar</button>
                        <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- add payment -->
<div id="add_payment" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar pago </h5>
                <p class="text-center"></p>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.payCredits', $credit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Cantidad <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="amount">
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                            type="button">Cancelar</button>
                        <button type="submit" class="btn btn-primary submit-btn">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection