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
                <h4>Estatus: <strong>{{ $registerImss->status }}</strong></h4>
            </div>
            <div class="col-md-8 text-center m-auto">
                @if (auth()->user()->hasRoles(['cliente', 'capturista', 'validador']))
                    @if ($registerImss->status != 'Alta Confirmada')
                        <form action="{{ route('imss.updateRegisterImss', $registerImss->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                    @endif
                    <div class="row">
                        <h3 class="pt-4 pb-2">Datos personales</h3>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre del trabajador <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="user_name" type="text"
                                    value="{{ $registerImss->user_name }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Acta de nacimiento</label>
                                <input class="form-control" type="file" name="birth_certificate">
                                <div class="text-custom text-start">Archivo actual:
                                    <a href="{{ asset('storage/imss/' . $registerImss->birth_certificate) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">INE </label>
                                <input class="form-control" type="file" name="identification">
                                <div class="text-custom text-start">Archivo actual:
                                    <a href="{{ asset('storage/imss/' . $registerImss->identification) }}" target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Constancia de seguro social </label>
                                <input class="form-control" type="file" name="social_security_number">
                                <div class="text-custom text-start">Archivo actual:
                                    <a href="{{ asset('storage/imss/' . $registerImss->social_security_number) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Constancia de situación fiscal</label>
                                <input class="form-control" type="file" name="certificate_tax_status">
                                <div class="text-custom text-start">Archivo actual:
                                    <a href="{{ asset('storage/imss/' . $registerImss->certificate_tax_status) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Comprobante de domicilio (no mayor a tres meses)</label>
                                <input class="form-control" type="file" name="proof_address">
                                <div class="text-custom text-start">Archivo actual:
                                    <a href="{{ asset('storage/imss/' . $registerImss->proof_address) }}" target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Clave Única de Registro de Población (CURP)</label>
                                <input class="form-control" type="file" name="curp">
                                <div class="text-custom text-start">Archivo actual:
                                    <a href="{{ asset('storage/imss/' . $registerImss->curp) }}" target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Correo electrónico <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" value="{{ $registerImss->email }}"
                                    type="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Teléfono <span class="text-danger">*</span></label>
                                <input class="form-control" name="phone_number" value="{{ $registerImss->phone_number }}"
                                    type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha de alta <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" value="{{ $registerImss->register_date }}"
                                    name="register_date" required>
                            </div>
                        </div>
                        <h3 class="pt-4 pb-2">Datos bancarios</h3>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre del banco <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="bank_name"
                                    value="{{ $registerImss->bank_name }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Número de cuenta <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="bank_account"
                                    value="{{ $registerImss->bank_account }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">CLABE interbancaria <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="bank_clabe" type="number"
                                    value="{{ $registerImss->bank_clabe }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Formato de banco</label>
                                <input class="form-control" name="bank_format" type="file">
                                @if ($registerImss->bank_format)
                                    <div class="text-custom text-start">Archivo actual:
                                        <a href="{{ asset('storage/imss/' . $registerImss->bank_format) }}"
                                            target="_blank">
                                            Descargar <i class="fas fa-download"></i></a>
                                    </div>
                                @else
                                    <div class="text-custom text-start">Archivo actual: -
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Retención de Infonavit</label>
                                <input class="form-control" name="infonavit_retention" type="file">
                                @if ($registerImss->infonavit_retention)
                                    <div class="text-custom text-start">Archivo actual:
                                        <a href="{{ asset('storage/imss/' . $registerImss->infonavit_retention) }}"
                                            target="_blank">
                                            Descargar <i class="fas fa-download"></i></a>
                                    </div>
                                @else
                                    <div class="text-custom text-start">Archivo actual: -
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">¿Crédito de archivo?</label>
                                <input class="form-control file_credit" type="file" name="file_credit">
                                @if ($registerImss->file_credit)
                                    <div class="text-custom text-start">Archivo actual:
                                        <a href="{{ asset('storage/imss/' . $registerImss->file_credit) }}"
                                            target="_blank">
                                            Descargar <i class="fas fa-download"></i></a>
                                    </div>
                                @else
                                    <div class="text-custom text-start">Archivo actual: -
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">¿Crédito FONACOT?</label>
                                <input class="form-control fonacot_credit" type="file" name="fonacot_credit">
                                @if ($registerImss->fonacot_credit)
                                    <div class="text-custom text-start">Archivo actual:
                                        <a href="{{ asset('storage/imss/' . $registerImss->fonacot_credit) }}"
                                            target="_blank">
                                            Descargar <i class="fas fa-download"></i></a>
                                    </div>
                                @else
                                    <div class="text-custom text-start">Archivo actual: -
                                    </div>
                                @endif
                            </div>
                        </div>
                        <h3 class="pt-4 pb-2">Sueldos y salario</h3>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Sueldo mensual en IMSS <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="imss_monthly_salary"
                                    value="{{ $registerImss->imss_monthly_salary }}" type="number" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Salario real mensual <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="monthly_real_salary"
                                    value="{{ $registerImss->monthly_real_salary }}" type="number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Periodo de pago <span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_period" required>
                                    <option value="">Selecciona un periodo de pago</option>
                                    <option value="Semanal"
                                        {{ $registerImss->payment_period == 'Semanal' ? 'selected' : null }}>Semanal
                                    </option>
                                    <option value="Quincenal"
                                        {{ $registerImss->payment_period == 'Quincenal' ? 'selected' : null }}>
                                        Quincenal
                                    </option>
                                    <option value="Catorcenal"
                                        {{ $registerImss->payment_period == 'Catorcenal' ? 'selected' : null }}>
                                        Catorcenal</option>
                                    <option value="Menusal"
                                        {{ $registerImss->payment_period == 'Menusal' ? 'selected' : null }}>Menusal
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre de la nómina <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="payroll_name"
                                    value="{{ $registerImss->payroll_name }}" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de alta <span class="text-danger">*</span></label>
                                <select class="form-control" name="register_type" required>
                                    <option value="">Selecciona el tipo de alta</option>
                                    <option value="Tradicional"
                                        {{ $registerImss->register_type == 'Tradicional' ? 'selected' : null }}>
                                        Tradicional</option>
                                    <option value="Mixto"
                                        {{ $registerImss->register_type == 'Mixto' ? 'selected' : null }}>Mixto
                                    </option>
                                    <option value="Comisiones"
                                        {{ $registerImss->register_type == 'Comisiones' ? 'selected' : null }}>
                                        Comisiones</option>
                                </select>
                            </div>
                        </div>
                        <h3 class="pt-4 pb-2">Contacto de emergencia</h3>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre completo <span class="text-danger">*</span></label>
                                <input class="form-control" name="emergency_contact_full_name"
                                    value="{{ $registerImss->emergency_contact_full_name }}" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Teléfono <span class="text-danger">*</span></label>
                                <input class="form-control" name="emergency_contact_phone_number"
                                    value="{{ $registerImss->emergency_contact_phone_number }}" type="number" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Parentesco <span class="text-danger">*</span></label>
                                <input class="form-control" name="emergency_contact_relationship"
                                    value="{{ $registerImss->emergency_contact_relationship }}" type="text" required>
                            </div>
                        </div>
                        @if ($registerImss->status == 'Alta declinada')
                            <h3 class="pt-4 pb-2">Comentarios</h3>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label"></label>
                                    <textarea class="form-control" cols="30" rows="10" disabled>{{ $registerImss->notes }}</textarea>
                                </div>
                            </div>
                        @endif
                        @if ($registerImss->status != 'Alta Confirmada')
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
                            </div>
                    </div>
                    </form>
                @endif
            @else
                <div class="row ">
                    <h3 class="py-4">Datos personales</h3>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Nombre del trabajador</div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->user_name }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Acta de nacimiento</div>
                            @if ($registerImss->birth_certificate)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->birth_certificate) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">INE</div>
                            @if ($registerImss->identification)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->identification) }}"
                                        target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Constancia de seguro social</div>
                            @if ($registerImss->social_security_number)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->social_security_number) }}"
                                        target="_blank"> Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Constancia de situación fiscal</div>
                            @if ($registerImss->certificate_tax_status)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->certificate_tax_status) }}"
                                        target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Comprobante de domicilio (no mayor a tres meses) </div>
                            @if ($registerImss->proof_address)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->proof_address) }}"
                                        target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Clave Única de Registro de Población (CURP) </div>
                            @if ($registerImss->curp)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->curp) }}" target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Correo electrónico</div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->email }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Teléfono</div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->phone_number }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Fecha de alta </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->register_date->format('d/m/Y') }} </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="py-4">Datos bancarios</h3>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Nombre del banco </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->bank_name }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Número de cuenta </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->bank_account }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">CLABE interbancaria </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->bank_clabe }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Formato de banco </div>
                            @if ($registerImss->proof_address)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->bank_format) }}" target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Retención de Infonavit </div>
                            @if ($registerImss->infonavit_retention)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->infonavit_retention) }}"
                                        target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Crédito de archivo </div>
                            @if ($registerImss->file_credit)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->file_credit) }}" target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row">
                            <div class="title-custom col-6">Crédito FONACOT </div>
                            @if ($registerImss->fonacot_credit)
                                <div class="text-custom col-4">
                                    <a href="{{ asset('storage/imss/' . $registerImss->fonacot_credit) }}"
                                        target="_blank">
                                        Descargar <i class="fas fa-download"></i></a>
                                </div>
                            @else
                                <div class="text-custom col-4">
                                    <p class="mb-0"> - </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <h3 class="py-4">Sueldos y salario</h3>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Sueldo mensual en IMSS </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> ${{ number_format($registerImss->imss_monthly_salary, 2) }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Salario real mensual </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> ${{ number_format($registerImss->monthly_real_salary, 2) }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Periodo de pago </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->payment_period }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Nombre de la nómina </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->payroll_name }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Tipo de alta </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->register_type }} </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="py-4">Contacto de emergencia</h3>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Tipo de alta </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->emergency_contact_full_name }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Teléfono </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->emergency_contact_phone_number }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-4 text-start">
                        <div class="row ">
                            <div class="title-custom col-6">Parentesco </div>
                            <div class="text-custom col-4">
                                <p class="mb-0"> {{ $registerImss->emergency_contact_relationship }} </p>
                            </div>
                        </div>
                    </div>
                    @if ($registerImss->status != 'Alta Confirmada')
                        <div class="row">
                            <div class="submit-section col-lg-6">
                                <form
                                    action="{{ route('company.registerImssAccepted', [$company->id, $registerImss->id]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-primary submit-btn">{{ $registerImss->status == 'Alta Aceptada' ? 'Confirmar alta' : 'Aceptar alta' }}</button>
                                </form>
                            </div>
                            <div class="submit-section col-lg-6">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#deny_request"><button
                                        class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close"
                                        type="button">Declinar alta</button></a>
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
    </div>
    <!-- /Page Content -->
    <!-- deny request Modal -->
    <div class="modal custom-modal fade" id="deny_request" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Declinar solicitud de alta</h3>
                        <p>¿Porque no esta bien la solicitud de alta?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('company.registerImssDeny', [$company->id, $registerImss->id]) }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control" name="notes" id="" cols="30" rows="10" required>{{ $registerImss->notes }}</textarea>
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
