@extends('partials.menu')

@section('title')
    Reportes
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-md-8 text-center m-auto">
                <form action="{{ route('reports.exportPayrolls') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-10  ">
                            <div class="form-group">
                                <select class="form-control" name="company">
                                    <option value="">Nóminas</option>
                                    {{-- @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <button type="submit" href="#" class="btn btn-success btn-search"><i
                                    class="far fa-file-alt me-2"></i> Generar reporte </button>
                        </div>
                        <div class="col-sm-6 col-md-3">
                        </div>
                        <div class="col-sm-6 col-md-3">
                        </div>
                    </div>
                </form>
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

@endsection

@section('js')
@endsection
