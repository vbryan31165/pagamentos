<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('id_cliente') }}</label>
    <div>
        {{ Form::text('id_cliente', $prestamo->id_cliente, ['class' => 'form-control' .
        ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
        {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>id_cliente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('monto') }}</label>
    <div>
        {{ Form::text('monto', $prestamo->monto, ['class' => 'form-control' .
        ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>monto</b> instruction.</small>
    </div>
</div>

{{-- Select tipo_pago --}}
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('tipo_pago') }}</label>
    <div>
        {{ Form::select('tipo_pago', [
        '' => 'Seleccione tipo de pago...',
        '20' => 'Diario 20 dias',
        '24' => 'Diario 24 dias',
        '4' => 'Semanal 4 dias'
      ],
      $prestamo->tipo_pago,
      [
        'class' => 'form-control' . ($errors->has('tipo_pago') ? ' is-invalid' : ''),
        'id' => 'tipo_pago'
      ]
    ) }}
        {!! $errors->first('tipo_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>tipo_pago</b> instruction.</small>
    </div>
</div>

{{-- Input cuotas (relleno automático, deshabilitado) --}}
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('cuotas') }}</label>
    <div>
        {{ Form::text('cuotas', $prestamo->cuotas, [
      'class' => 'form-control' . ($errors->has('cuotas') ? ' is-invalid' : ''),
      'placeholder' => 'Cuotas',
      'id' => 'cuotas',
      'readonly' => true
    ]) }}
        {!! $errors->first('cuotas', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>cuotas</b> instruction.</small>
    </div>
</div>


<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('cuotas_actual') }}</label>
    <div>
        {{ Form::text('cuotas_actual', $prestamo->cuotas_actual, ['class' => 'form-control' .
        ($errors->has('cuotas_actual') ? ' is-invalid' : ''), 'placeholder' => 'Cuotas Actual']) }}
        {!! $errors->first('cuotas_actual', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>cuotas_actual</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('interes') }}</label>
    <div>
        {{ Form::text('interes', $prestamo->interes, ['class' => 'form-control' .
        ($errors->has('interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes']) }}
        {!! $errors->first('interes', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>interes</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('valor_cuota') }}</label>
    <div>
        {{ Form::text('valor_cuota', $prestamo->valor_cuota, ['class' => 'form-control' .
        ($errors->has('valor_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Valor Cuota']) }}
        {!! $errors->first('valor_cuota', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>valor_cuota</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('Total_a_pagar') }}</label>
    <div>
        {{ Form::text('Total_a_pagar', $prestamo->Total_a_pagar, ['class' => 'form-control' .
        ($errors->has('Total_a_pagar') ? ' is-invalid' : ''), 'placeholder' => 'Total A Pagar']) }}
        {!! $errors->first('Total_a_pagar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>Total_a_pagar</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('Total_a_pagar_juros') }}</label>
    <div>
        {{ Form::text('Total_a_pagar_juros', $prestamo->Total_a_pagar_juros, ['class' => 'form-control' .
        ($errors->has('Total_a_pagar_juros') ? ' is-invalid' : ''), 'placeholder' => 'Total A Pagar Juros']) }}
        {!! $errors->first('Total_a_pagar_juros', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>Total_a_pagar_juros</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('saldo') }}</label>
    <div>
        {{ Form::text('saldo', $prestamo->saldo, ['class' => 'form-control' .
        ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => 'Saldo']) }}
        {!! $errors->first('saldo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>saldo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_inicio') }}</label>
    <div>
        {{ Form::date('fecha_inicio', $prestamo->fecha_inicio, ['class' => 'form-control' .
        ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
        {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>fecha_inicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_final') }}</label>
    <div>
        {{ Form::date('fecha_final', $prestamo->fecha_final, ['class' => 'form-control' .
        ($errors->has('fecha_final') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Final']) }}
        {!! $errors->first('fecha_final', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>fecha_final</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $prestamo->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>estado</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="#" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tipoPago = document.querySelector('[name="tipo_pago"]');
        const monto = document.querySelector('[name="monto"]');
        const cuotas = document.querySelector('[name="cuotas"]');
        const cuotasActual = document.querySelector('[name="cuotas_actual"]');
        const interes = document.querySelector('[name="interes"]');
        const valorCuota = document.querySelector('[name="valor_cuota"]');
        const totalPagar = document.querySelector('[name="Total_a_pagar"]');
        const totalConJuros = document.querySelector('[name="Total_a_pagar_juros"]');
        const saldo = document.querySelector('[name="saldo"]');
        const fechaInicio = document.querySelector('[name="fecha_inicio"]');
        const fechaFinal = document.querySelector('[name="fecha_final"]');

        function calcular() {
            const montoVal = parseFloat(monto.value) || 0;
            const cuotasVal = parseInt(tipoPago.value) || 0;
            const interesVal = 0.2;

            cuotas.value = cuotasVal;
            cuotas.readOnly  = true;

            cuotasActual.value = 0;
            cuotasActual.readOnly  = true;

            interes.value = interesVal * 100;
            interes.readOnly  = true;

            const valorCuotaVal = ((montoVal * interesVal) + montoVal) / cuotasVal;
            valorCuota.value = valorCuotaVal.toFixed(2);
            valorCuota.readOnly  = true;

            totalPagar.value = montoVal.toFixed(2);
            totalPagar.readOnly  = true;

            const totalConJurosVal = valorCuotaVal * cuotasVal;
            totalConJuros.value = totalConJurosVal.toFixed(2);
            totalConJuros.readOnly  = true;

            saldo.value = totalConJurosVal.toFixed(2);
            saldo.readOnly  = true;

            if (fechaInicio && fechaFinal) {
                const inicio = new Date(fechaInicio.value);
                if (!isNaN(inicio.getTime())) {
                    inicio.setDate(inicio.getDate() + cuotasVal);
                    fechaFinal.value = inicio.toISOString().slice(0, 10);
                    fechaFinal.readOnly  = true;
                }
            }
        }

        tipoPago.addEventListener('change', calcular);
        monto.addEventListener('input', calcular);
        fechaInicio.addEventListener('change', calcular);
        
    });
</script>