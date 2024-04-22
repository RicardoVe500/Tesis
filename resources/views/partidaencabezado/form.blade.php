<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="tipo_partida_id" class="form-label">{{ __('Tipopartidaid') }}</label>
            <select name="tipoPartidaId" class="form-control @error('tipoPartidaId') is-invalid @enderror"  id="tipo_partida_id">
                <option value="">--seleccionar--</option>
                @foreach ($tipopartidas as $tipopartida)
                <option value="{{ old('id', $tipopartida?->id)}}">{{$tipopartida['nombrePartida']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_partida" class="form-label">{{ __('Codigopartida') }}</label>
            <input type="text" name="codigoPartida" class="form-control @error('codigoPartida') is-invalid @enderror" value="{{ old('codigoPartida', $partidaencabezado?->codigoPartida) }}" id="codigo_partida" placeholder="Codigopartida">
            {!! $errors->first('codigoPartida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_contable" class="form-label">{{ __('Fechacontable') }}</label>
            <input type="date" name="fechaContable" class="form-control @error('fechaContable') is-invalid @enderror" value="{{ old('fechaContable', $partidaencabezado?->fechaContable) }}" id="fecha_contable" placeholder="Fechacontable">
            {!! $errors->first('fechaContable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_actual" class="form-label">{{ __('Fechaactual') }}</label>
            <input type="date" name="fechaActual" class="form-control @error('fechaActual') is-invalid @enderror" value="{{ old('fechaActual', $partidaencabezado?->fechaActual) }}" id="fecha_actual" placeholder="Fechaactual">
            {!! $errors->first('fechaActual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
       <div class="form-group mb-2 mb20">
            <label for="debe" class="form-label">{{ __('Debe') }}</label>
            <input type="text" name="debe" class="form-control @error('debe') is-invalid @enderror" value="{{ old('debe', $partidaencabezado?->debe) }}" id="debe" placeholder="Debe">
            {!! $errors->first('debe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="haber" class="form-label">{{ __('Haber') }}</label>
            <input type="text" name="haber" class="form-control @error('haber') is-invalid @enderror" value="{{ old('haber', $partidaencabezado?->haber) }}" id="haber" placeholder="Haber">
            {!! $errors->first('haber', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="diferenca" class="form-label">{{ __('Diferenca') }}</label>
            <input type="text" name="diferenca" class="form-control @error('diferenca') is-invalid @enderror" value="{{ old('diferenca', $partidaencabezado?->diferenca) }}" id="diferenca" placeholder="Diferenca">
            {!! $errors->first('diferenca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="concepto_general" class="form-label">{{ __('Conceptogeneral') }}</label>
            <input type="text" name="conceptoGeneral" class="form-control @error('conceptoGeneral') is-invalid @enderror" value="{{ old('conceptoGeneral', $partidaencabezado?->conceptoGeneral) }}" id="concepto_general" placeholder="Conceptogeneral">
            {!! $errors->first('conceptoGeneral', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $partidaencabezado?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

