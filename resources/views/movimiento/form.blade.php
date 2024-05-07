<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="movimientos" class="form-label">{{ __('Movimientos') }}</label>
            <input type="text" name="movimientos" class="form-control @error('movimientos') is-invalid @enderror" value="{{ old('movimientos', $movimiento?->movimientos) }}" id="movimientos" placeholder="Movimientos">
            {!! $errors->first('movimientos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>