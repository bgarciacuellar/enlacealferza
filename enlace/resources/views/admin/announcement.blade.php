@extends('partials.menu')

@section('title')
    Anuncios
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid pb-0">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        {{-- <h3 class="card-title">Empleados </h3> --}}
                        <form action="{{ route('admin.sendAnnouncement') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Contenido del Anuncio <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" name="announcement" id="announcement" rows="10" cols="80" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Contenido del Anuncio <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="announcement_type" required>
                                            <option value="">Selecciona una opción</option>
                                            <option value="alferza">Internos</option>
                                            <option value="customers">Clientes</option>
                                            <option value="all">Todos</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Enviar anuncio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection

@section('js')
    <script>
        //CKEDITOR.replace('announcement');
    </script>
@endsection
