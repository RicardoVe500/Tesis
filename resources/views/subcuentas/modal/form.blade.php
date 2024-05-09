{{-- Este es el formulario de agregar nuevas Subcuentas --}}
@foreach ($catalogocuentas as $catalogocuenta)
    <x-adminlte-modal id="modalMin{{ $catalogocuenta->id }}" title="Crear Subcuenta" size='lg' theme='blue'>
        @csrf
        <form method="POST" action="{{ route('Subcuentas.store', $catalogocuenta->id) }}" tabindex="-1" role="form"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <label for="n1" class="form-label">{{ __('N1') }}</label>
                        <input type="text" name="n1" class="form-control @error('n1') is-invalid @enderror"
                            value="{{ $catalogocuenta?->n1 }}" id="n1" placeholder="N1">
                        {!! $errors->first('n1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-1">
                        <label for="n2" class="form-label">{{ __('N2') }}</label>
                        <input type="text" name="n2" class="form-control"
                            value="{{ old('n2', $catalogocuenta?->n2) }}" id="n2" placeholder="N2">
                    </div>
                    <div class="col-sm-1">
                        <label for="n3" class="form-label">{{ __('N3') }}</label>
                        <input type="text" name="n3" class="form-control @error('n3') is-invalid @enderror"
                            value="{{ old('n3', $catalogocuenta?->n3) }}" id="n3" placeholder="N3">
                        {!! $errors->first('n3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-1">
                        <label for="n4" class="form-label">{{ __('N4') }}</label>
                        <input type="text" name="n4" class="form-control @error('n4') is-invalid @enderror"
                            value="{{ old('n4', $catalogocuenta?->n4) }}" id="n4" placeholder="N4">
                        {!! $errors->first('n4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-1">
                        <label for="n5" class="form-label">{{ __('N5') }}</label>
                        <input type="text" name="n5" class="form-control @error('n5') is-invalid @enderror"
                            value="{{ old('n5', $catalogocuenta?->n5) }}" id="n5" placeholder="N5">
                        {!! $errors->first('n5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-1">
                        <label for="n6" class="form-label">{{ __('N6') }}</label>
                        <input type="text" name="n6" class="form-control @error('n6') is-invalid @enderror"
                            value="{{ old('n6', $catalogocuenta?->n6) }}" id="n6" placeholder="N6">
                        {!! $errors->first('n6', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-1">
                        <label for="n7" class="form-label">{{ __('N7') }}</label>
                        <input type="text" name="n7" class="form-control @error('n7') is-invalid @enderror"
                            value="{{ old('n7', $catalogocuenta?->n7) }}" id="n7" placeholder="N7">
                        {!! $errors->first('n7', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-1">
                        <label for="n8" class="form-label">{{ __('N8') }}</label>
                        <input type="text" name="n8" class="form-control @error('n8') is-invalid @enderror"
                            value="{{ old('n8', $catalogocuenta?->n8) }}" id="n8" placeholder="N8">
                        {!! $errors->first('n8', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col-sm-4">
                        <input hidden type="text" name="CTADependiente"
                            class="form-control @error('CTADependiente') is-invalid @enderror"
                            id="c_t_a_dependiente" placeholder="Ctadependiente">
                        {!! $errors->first(
                            'CTADependiente',
                            '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
                        ) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <label for="nombre_cuenta" class="form-label">{{ __('Nombrecuenta') }}</label>
                        <input type="text" name="nombreCuenta"
                            class="form-control @error('nombreCuenta') is-invalid @enderror" id="nombre_cuenta"
                            placeholder="Nombrecuenta">
                        {!! $errors->first('nombreCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="col">
                        <div class="form-group mb-2 mb20">
                            
                        <label for="mov" class="form-label">{{ __('Movimientos') }}</label>
                            <select name="movimientosid" class="form-control @error('movimientosid') is-invalid @enderror"  id="movimientosid">
                                <option value="">--seleccionar--</option>
                                @foreach ($movimientos as $movimiento)
                                <option value="{{ old('movimientosid', $movimiento?->id)}}" >{{$movimiento['movimientos']}}</option>
                                @endforeach
                            </select>
        
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-2 mb20">
                        <input type="text" name="nivelCuenta"
                            class="form-control @error('nivelCuenta') is-invalid @enderror"
                            value="{{ old('nivelCuenta', $catalogocuenta?->nivelCuenta) }}" id="nivel_cuenta"
                            placeholder="Nivelcuenta" hidden>
                        {!! $errors->first('nivelCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt20 mt-2">
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>
        </form>
    </x-adminlte-modal>
@endforeach
