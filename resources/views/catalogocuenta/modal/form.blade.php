{{-- Themed --}}
<form method="POST" action="{{ route('catalogocuentas.store') }}"  role="form" enctype="multipart/form-data">

<x-adminlte-modal id="modalPurple" title="Nueva Cuenta" theme="blue" icon="fas fa-plus" size='lg'>               
        @csrf

 <div class="row padding-1 p-1">
    <div class="container" >
        <div class="row">
            <div class="col">
                <label for="n1" class="form-label">{{ __('N1') }}</label>
                <input type="text" name="n1" class="form-control @error('n1') is-invalid @enderror" id="n1" placeholder="N1">
                {!! $errors->first('n1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="col">
                <label for="n2" class="form-label">{{ __('N2') }}</label>
                <input type="text" name="n2" class="form-control" id="n2" placeholder="N2"> 
                {!! $errors->first('n2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <label for="nombre_cuenta" class="form-label">{{ __('Nombrecuenta') }}</label>
                <input type="text" name="nombreCuenta" class="form-control @error('nombreCuenta') is-invalid @enderror"  id="nombre_cuenta" placeholder="Nombrecuenta">
                {!! $errors->first('nombreCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="col">
                <label for="nivel_cuenta" class="form-label">{{ __('Nivelcuenta') }}</label>
                <input type="text" name="nivelCuenta" class="form-control @error('nivelCuenta') is-invalid @enderror" id="nivel_cuenta" placeholder="Nivelcuenta">
                {!! $errors->first('nivelCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="col">
                <label for="movimientos" class="form-label">{{ __('Movimientos') }}</label>
                <input type="text" name="movimientos" class="form-control @error('movimientos') is-invalid @enderror" id="movimientos" placeholder="Movimientos">
                {!! $errors->first('movimientos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>
</div>
         
   {{--@include('catalogocuenta.form')
--}} 
</x-adminlte-modal>
</form>
{{-- Example button to open modal --}}
