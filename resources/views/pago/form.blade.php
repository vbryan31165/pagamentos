
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('prestamo_id') }}</label>
    <div>
        {{ Form::text('prestamo_id', $pago->prestamo_id, ['class' => 'form-control' .
        ($errors->has('prestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Prestamo Id']) }}
        {!! $errors->first('prestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>prestamo_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_pago') }}</label>
    <div>
        {{ Form::text('fecha_pago', $pago->fecha_pago, ['class' => 'form-control' .
        ($errors->has('fecha_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pago']) }}
        {!! $errors->first('fecha_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>fecha_pago</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('monto_pagado') }}</label>
    <div>
        {{ Form::text('monto_pagado', $pago->monto_pagado, ['class' => 'form-control' .
        ($errors->has('monto_pagado') ? ' is-invalid' : ''), 'placeholder' => 'Monto Pagado']) }}
        {!! $errors->first('monto_pagado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>monto_pagado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cuota_numero') }}</label>
    <div>
        {{ Form::text('cuota_numero', $pago->cuota_numero, ['class' => 'form-control' .
        ($errors->has('cuota_numero') ? ' is-invalid' : ''), 'placeholder' => 'Cuota Numero']) }}
        {!! $errors->first('cuota_numero', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>cuota_numero</b> instruction.</small>
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
