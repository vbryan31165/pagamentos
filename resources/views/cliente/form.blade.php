
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombres') }}</label>
    <div>
        {{ Form::text('nombres', $cliente->nombres, ['class' => 'form-control' .
        ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
        {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cliente <b>nombres</b> instruction.</small>
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
