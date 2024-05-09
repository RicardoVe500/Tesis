@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Catalogocuenta') }}
                            </span>


                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div id="successMessage" class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                        <script>
                            // Espera a que se cargue completamente la página
                            document.addEventListener('DOMContentLoaded', function() {
                                // Selecciona el elemento del mensaje de éxito
                                var successMessage = document.getElementById('successMessage');

                                // Si el mensaje existe, espera 3 segundos y luego ocúltalo
                                if (successMessage) {
                                    setTimeout(function() {
                                        // Oculta el mensaje de éxito
                                        successMessage.style.display = 'none';
                                    }, 3000); // Ocultar después de 3000 milisegundos (3 segundos)
                                }
                            });
                        </script>
                    @endif

                    <div class="card-body bg-white">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Cuenta</th>
                                        <th>Nombrecuenta</th>
                                        <th>Nivelcuenta</th>
                                        <th>Ctadependiente</th>
                                        <th>Movimientos</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogocuentas as $catalogocuenta)
                                        <tr>
                                            <td>{{ $catalogocuenta->n1 }}{{ $catalogocuenta->n2 }}{{ $catalogocuenta->n3 }}{{ $catalogocuenta->n4 }}{{ $catalogocuenta->n5 }}{{ $catalogocuenta->n6 }}{{ $catalogocuenta->n7 }}{{ $catalogocuenta->n8 }}
                                            </td>
                                            <td>{{ $catalogocuenta->nombreCuenta }}</td>
                                            <td>{{ $catalogocuenta->nivelCuenta }}</td>
                                            <td>{{ $catalogocuenta->CTADependiente }}</td>
                                            <td>{{ $catalogocuenta->movimiento->movimientos }}</td>
                                            <td>
                                                <form action="{{ route('catalogocuentas.destroy', $catalogocuenta->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary" href="#" data-toggle="modal"
                                                        data-target="#modalMin{{ $catalogocuenta->id }}"><i
                                                            class="fas fa-plus"></i> {{ __('Crear Subcuenta') }}</a>

                                                    {{-- Aqui comprobamos el nivel de la cuenta si este es igual a 1 se despliega el menu de editar cuentas del nivel 1
                                                        de lo contrario se despliega el menu de las subcuentas --}}
                                                    @if ($catalogocuenta->nivelCuenta == 1)
                                                        {{-- menu de editar de las cuentas de nivel 1 --}}
                                                        <a href="{{ route('catalogocuentas.edit', $catalogocuenta->id) }}"
                                                            data-toggle="modal"
                                                            data-target="#modaleditt{{ $catalogocuenta->id }}"
                                                            class="btn btn-sm btn-success">
                                                            <i class="fas fa-edit"></i> {{ __('Editar') }}
                                                        </a>
                                                    @else
                                                        {{-- menu de editar de las subcuentas --}}

                                                        <a href="{{ route('catalogocuentas.edit', $catalogocuenta->id) }}"
                                                            data-toggle="modal"
                                                            data-target="#modaledit{{ $catalogocuenta->id }}"
                                                            class="btn btn-sm btn-success">
                                                            <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                        </a>
                                                    @endif




                                                    {{-- <a class="btn btn-sm btn-success" href="{{url('/subcuentas-create',$catalogocuenta->id)}}"><i class="fa fa-fw fa-edit"></i> {{ __('Crear Subcuenta') }}</a> --}}

                                                    @csrf

                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>




                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {!! $catalogocuentas->links() !!}
            </div>
        </div>
    </div>
    @include('subcuentas.modal.form')
    @include('subcuentas.edit')
    @include('catalogocuenta.edit')


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop
