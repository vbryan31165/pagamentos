
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_cliente') }}</label>
    <div>
        {{ Form::text('id_cliente', $prestamo->id_cliente, ['class' => 'form-control' .
        ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
        {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>id_cliente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('monto') }}</label>
    <div>
        {{ Form::text('monto', $prestamo->monto, ['class' => 'form-control' .
        ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>monto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('interes') }}</label>
    <div>
        {{ Form::text('interes', $prestamo->interes, ['class' => 'form-control' .
        ($errors->has('interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes']) }}
        {!! $errors->first('interes', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>interes</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_pago') }}</label>
    <div>
        {{ Form::text('tipo_pago', $prestamo->tipo_pago, ['class' => 'form-control' .
        ($errors->has('tipo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Pago']) }}
        {!! $errors->first('tipo_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>tipo_pago</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cuotas') }}</label>
    <div>
        {{ Form::text('cuotas', $prestamo->cuotas, ['class' => 'form-control' .
        ($errors->has('cuotas') ? ' is-invalid' : ''), 'placeholder' => 'Cuotas']) }}
        {!! $errors->first('cuotas', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>cuotas</b> instruction.</small>
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

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
