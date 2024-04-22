<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="n1" class="form-label">{{ __('N1') }}</label>
            <input type="text" name="n1" class="form-control @error('n1') is-invalid @enderror" value="{{ old('n1', $catalogocuenta?->n1) }}" id="n1" placeholder="N1">
            {!! $errors->first('n1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_cuenta" class="form-label">{{ __('Nombrecuenta') }}</label>
            <input type="text" name="nombreCuenta" class="form-control @error('nombreCuenta') is-invalid @enderror" value="{{ old('nombreCuenta', $catalogocuenta?->nombreCuenta) }}" id="nombre_cuenta" placeholder="Nombrecuenta">
            {!! $errors->first('nombreCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="c_t_a_dependiente" class="form-label">{{ __('Ctadependiente') }}</label>
            <input type="text" name="CTADependiente" class="form-control @error('CTADependiente') is-invalid @enderror" value="{{ old('CTADependiente', $catalogocuenta?->CTADependiente) }}" id="c_t_a_dependiente" placeholder="Ctadependiente">
            {!! $errors->first('CTADependiente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivel_cuenta" class="form-label">{{ __('Nivelcuenta') }}</label>
            <input type="text" name="nivelCuenta" class="form-control @error('nivelCuenta') is-invalid @enderror" value="{{ old('nivelCuenta', $catalogocuenta?->nivelCuenta) }}" id="nivel_cuenta" placeholder="Nivelcuenta">
            {!! $errors->first('nivelCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
     
        <div class="form-group mb-2 mb20">
            <label for="movimientos" class="form-label">{{ __('Movimientos') }}</label>
            <input type="text" name="movimientos" class="form-control @error('movimientos') is-invalid @enderror" value="{{ old('movimientos', $catalogocuenta?->movimientos) }}" id="movimientos" placeholder="Movimientos">
            {!! $errors->first('movimientos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>