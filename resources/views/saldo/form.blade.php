<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <select name="cuentaId" class="form-control @error('cuentaId') is-invalid @enderror" id="tipo_partida_id">
                <option value="">--seleccionar--</option>
                @foreach ($cuentas as $cuenta)
                <option value="{{ old('id', $cuenta?->id) }}">{{$cuenta['nombreCuenta']}}</option>
                @endforeach
            </select>
        
        
        </div>
        <div class="form-group mb-2 mb20">
            <label for="debe" class="form-label">{{ __('Debe') }}</label>
            <input type="text" name="debe" class="form-control @error('debe') is-invalid @enderror" value="{{ old('debe', $saldo?->debe) }}" id="debe" placeholder="Debe">
            {!! $errors->first('debe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="haber" class="form-label">{{ __('Haber') }}</label>
            <input type="text" name="haber" class="form-control @error('haber') is-invalid @enderror" value="{{ old('haber', $saldo?->haber) }}" id="haber" placeholder="Haber">
            {!! $errors->first('haber', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $saldo?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="saldo" class="form-label">{{ __('Saldo') }}</label>
            <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror" value="{{ old('saldo', $saldo?->saldo) }}" id="saldo" placeholder="Saldo">
            {!! $errors->first('saldo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldo_dia" class="form-label">{{ __('Saldodia') }}</label>
            <input type="text" name="saldoDia" class="form-control @error('saldoDia') is-invalid @enderror" value="{{ old('saldoDia', $saldo?->saldoDia) }}" id="saldo_dia" placeholder="Saldodia">
            {!! $errors->first('saldoDia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldo_anterior" class="form-label">{{ __('Saldoanterior') }}</label>
            <input type="text" name="saldoAnterior" class="form-control @error('saldoAnterior') is-invalid @enderror" value="{{ old('saldoAnterior', $saldo?->saldoAnterior) }}" id="saldo_anterior" placeholder="Saldoanterior">
            {!! $errors->first('saldoAnterior', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>