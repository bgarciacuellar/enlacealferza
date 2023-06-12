@if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
    {{ $menu = 'partials.menu-employee' }}
@elseif(auth()->user()->hasRoles(['admin']))
    {{ $menu = 'partials.menu' }}
@else
    {{ $menu = 'partials.menu-user' }}
@endif
@extends($menu)

@section('title')
    Reportes
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div>
                <h4>Estatus: <strong>{{ $cancelsImss->status }}</strong></h4>
            </div>
            <div class="col-md-8 text-center m-auto">
                @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                    @if ($cancelsImss->status != 'Alta Confirmada')
                        <form action="{{ route('imss.updateCancelImss', $cancelsImss->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre completo del colaborador <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="name" type="text" value="{{ $cancelsImss->name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha de baja <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="cancel_date"
                                    value="{{ $cancelsImss->cancel_date }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Motivo de baja <span class="text-danger">*</span></label>
                                <select class="form-control" name="cancellation_reason" required>
                                    <option value="">Selecciona un periodo de pago</option>
                                    <option value="Separación voluntaria"
                                        {{ $cancelsImss->cancellation_reason == 'Separación voluntaria' ? 'selected' : null }}>
                                        Separación voluntaria</option>
                                    <option value="Acumulación de faltas"
                                        {{ $cancelsImss->cancellation_reason == 'Acumulación de faltas' ? 'selected' : null }}>
                                        Acumulación de faltas</option>
                                    <option value="Despido justificado"
                                        {{ $cancelsImss->cancellation_reason == 'Despido justificado' ? 'selected' : null }}>
                                        Despido justificado</option>
                                    <option value="Despido injustificado"
                                        {{ $cancelsImss->cancellation_reason == 'Despido injustificado' ? 'selected' : null }}>
                                        Despido injustificado</option>
                                    <option value="Fallecimiento"
                                        {{ $cancelsImss->cancellation_reason == 'Fallecimiento' ? 'selected' : null }}>
                                        Fallecimiento</option>
                                    <option value="Fin de contrato"
                                        {{ $cancelsImss->cancellation_reason == 'Fin de contrato' ? 'selected' : null }}>
                                        Fin de contrato</option>
                                    <option value="Término de proyecto"
                                        {{ $cancelsImss->cancellation_reason == 'Término de proyecto' ? 'selected' : null }}>
                                        Término de proyecto</option>
                                    <option value="Falta de probidad y honradez"
                                        {{ $cancelsImss->cancellation_reason == 'Falta de probidad y honradez' ? 'selected' : null }}>
                                        Falta de probidad y honradez</option>
                                    <option value="Cambio de razón social"
                                        {{ $cancelsImss->cancellation_reason == 'Cambio de razón social' ? 'selected' : null }}>
                                        Cambio de razón social</option>
                                    <option value="Otras"
                                        {{ $cancelsImss->cancellation_reason == 'Otras' ? 'selected' : null }}>
                                        Otras</option>
                                    <option value="Días de pago pendientes en finiquito"
                                        {{ $cancelsImss->cancellation_reason == 'Días de pago pendientes en finiquito' ? 'selected' : null }}>
                                        Días de pago pendientes en
                                        finiquito</option>
                                    <option value="Gratificaciones en finiquito"
                                        {{ $cancelsImss->cancellation_reason == 'Gratificaciones en finiquito' ? 'selected' : null }}>
                                        Gratificaciones en finiquito</option>
                                    <option value="Retenciones"
                                        {{ $cancelsImss->cancellation_reason == 'Retenciones' ? 'selected' : null }}>
                                        Retenciones</option>
                                    <option value="Observaciones"
                                        {{ $cancelsImss->cancellation_reason == 'Observaciones' ? 'selected' : null }}>
                                        Observaciones</option>
                                </select>
                            </div>
                        </div>
                        @if ($cancelsImss->status == 'Baja declinada')
                            <h3 class="pt-4 pb-2">Comentarios</h3>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label"></label>
                                    <textarea class="form-control" cols="30" rows="10" disabled>{{ $cancelsImss->notes }}</textarea>
                                </div>
                            </div>
                        @endif
                        @if ($cancelsImss->status != 'Baja Confirmada')
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
                            </div>
                    </div>
                    </form>
                @endif
            @else
                <div class="row">
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Nombre completo del colaborador </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $cancelsImss->name }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Fecha de baja</div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $cancelsImss->cancel_date->format('d/m/Y') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Motivo de baja</div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $cancelsImss->cancellation_reason }} </p>
                            </div>
                        </div>
                    </div>
                    @if ($cancelsImss->status != 'Baja Confirmada')
                        <div class="row">
                            <div class="submit-section col-lg-6">
                                <form action="{{ route('company.cancelImssAccepted', [$company->id, $cancelsImss->id]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-primary submit-btn">{{ $cancelsImss->status == 'Baja Aceptada' ? 'Confirmar baja' : 'Aceptar baja' }}</button>
                                </form>
                            </div>
                            <div class="submit-section col-lg-6">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#deny_request"><button
                                        class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                        type="button">Declinar baja</button></a>
                            </div>
                        </div>
                    @endif
                </div>
                @endif
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

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- deny request Modal -->
    <div class="modal custom-modal fade" id="deny_request" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Declinar solicitud de baja</h3>
                        <p>¿Porque no esta bien la solicitud de baja?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('company.cancelImssDeny', [$company->id, $cancelsImss->id]) }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control" name="notes" id="" cols="30" rows="10" required>{{ $cancelsImss->notes }}</textarea>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary continue-btn">Enviar</button>
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
    <!-- /deny request Modal -->

@endsection

@section('js')
    <script>
        let menuIcon = "home";
    </script>
@endsection
