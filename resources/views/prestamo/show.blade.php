@extends('tablar::page')

@section('title', 'View Prestamo')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Prestamo ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('prestamos.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Prestamo List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Prestamo Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Id Cliente:</strong>
{{ $prestamo->id_cliente }}
</div>
<div class="form-group">
<strong>Monto:</strong>
{{ $prestamo->monto }}
</div>
<div class="form-group">
<strong>Tipo Pago:</strong>
{{ $prestamo->tipo_pago }}
</div>
<div class="form-group">
<strong>Cuotas:</strong>
{{ $prestamo->cuotas }}
</div>
<div class="form-group">
<strong>Cuotas Actual:</strong>
{{ $prestamo->cuotas_actual }}
</div>
<div class="form-group">
<strong>Interes:</strong>
{{ $prestamo->interes }}
</div>
<div class="form-group">
<strong>Valor Cuota:</strong>
{{ $prestamo->valor_cuota }}
</div>
<div class="form-group">
<strong>Total A Pagar:</strong>
{{ $prestamo->Total_a_pagar }}
</div>
<div class="form-group">
<strong>Total A Pagar Juros:</strong>
{{ $prestamo->Total_a_pagar_juros }}
</div>
<div class="form-group">
<strong>Saldo:</strong>
{{ $prestamo->saldo }}
</div>
<div class="form-group">
<strong>Fecha Inicio:</strong>
{{ $prestamo->fecha_inicio }}
</div>
<div class="form-group">
<strong>Fecha Final:</strong>
{{ $prestamo->fecha_final }}
</div>
<div class="form-group">
<strong>Estado:</strong>
{{ $prestamo->estado }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


