<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="n1" class="form-label">{{ __('N1') }}</label>
            <input type="text" name="n1" class="form-control @error('n1') is-invalid @enderror"
                value="{{ old('n1', $catalogocuenta?->n1) }}" id="n1" placeholder="N1">
            {!! $errors->first('n1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n2" class="form-label">{{ __('N2') }}</label>
            <input type="text" name="n2" class="form-control" value="{{ old('n2', $catalogocuenta?->n2) }}"
                id="n2" placeholder="N2">
        </div>
        <div class="form-group mb-2 mb20">
            <input hidden type="text" name="nivelCuenta" class="form-control @error('nivelCuenta') is-invalid @enderror"
                value="{{ old('nivelCuenta', $catalogocuenta?->nivelCuenta) }}" id="nivel_cuenta"
                placeholder="Nivelcuenta">
            {!! $errors->first('nivelCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_cuenta" class="form-label">{{ __('Nombrecuenta') }}</label>
            <input type="text" name="nombreCuenta" class="form-control @error('nombreCuenta') is-invalid @enderror"
                value="{{ old('nombreCuenta', $catalogocuenta?->nombreCuenta) }}" id="nombre_cuenta"
                placeholder="Nombrecuenta">
            {!! $errors->first('nombreCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
       
            
            {{--
            <select name="movimientosid" class="form-control @error('movimientosid') is-invalid @enderror"
                id="movimientosid">
                <option value="" >--seleccionar--</option>
                @foreach ($movimientos as $movimiento)
                    <option value="{{ $movimiento->id }}" >{{ $movimiento['movimientos'] }}
                    </option>
                @endforeach
            </select>
            --}}
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
