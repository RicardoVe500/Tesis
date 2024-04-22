<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_comprobante" class="form-label">{{ __('Nombrecomprobante') }}</label>
            <input type="text" name="nombreComprobante" class="form-control @error('nombreComprobante') is-invalid @enderror" value="{{ old('nombreComprobante', $tipocomprobante?->nombreComprobante) }}" id="nombre_comprobante" placeholder="Nombrecomprobante">
            {!! $errors->first('nombreComprobante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>