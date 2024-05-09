@extends('adminlte::page')

@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            <div class="float-right">
                                <a href="{{ route('catalogocuenta.report') }}" class="btn btn-sm btn-secondary"><i
                                        class="fas fa-print"></i> Rerporte</a>

                                <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalPurple"
                                    class="bg-blue"><i class="fa fa-fw fa-plus"></i>{{ __('Crear cuenta') }}</a>
                            </div>
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

                        <form method="POST" action="{{ url('/importData') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            <x-adminlte-input-file name="file" placeholder="Subir Archivo Excel" />
                            <input class="btn btn-sm btn-primary float-right" type="submit" value="import">

                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Cuenta</th>
                                        <th>Nombrecuenta</th>
                                        <th>Nivelcuenta</th>
                                        <th>Movimientos</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogocuentas as $catalogocuenta)
                                        <tr>
                                            <td>{{ $catalogocuenta->n1 }}{{ $catalogocuenta->n2 }}{{ $catalogocuenta->n3 }}{{ $catalogocuenta->n4 }}{{ $catalogocuenta->n5 }}{{ $catalogocuenta->n6 }}{{ $catalogocuenta->n7 }}{{ $catalogocuenta->n8 }}
                                            </td>
                                            <td>{{ $catalogocuenta->nombreCuenta }}</td>
                                            <td>{{ $catalogocuenta->nivelCuenta }}</td>
                                            <td>{{ $catalogocuenta->movimiento->movimientos }}</td>
                                            <td>
                                                <form action="{{ route('catalogocuentas.destroy', $catalogocuenta->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ url('/subcuentas', $catalogocuenta->n1) }}"><i
                                                            class="fas fa-layer-group"></i> {{ __('Subcuentas') }}</a>
                                                    <a href="{{ route('catalogocuentas.edit', $catalogocuenta->id) }}"
                                                        data-toggle="modal"
                                                        data-target="#modaleditt{{ $catalogocuenta->id }}"
                                                        class="btn btn-sm btn-success"><i class="fa fa-fw fa-edit"></i>
                                                        {{ __('Editar') }}</a>
                                                    {{--
                                                <a class="btn btn-sm btn-success" href="{{route('catalogocuentas.edit',$catalogocuenta->id)}}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
    @include('catalogocuenta.modal.form')
    @include('catalogocuenta.edit')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
    <script>
        // Esperar a que el documento esté listo
        $(document).ready(function() {
            // Agregar un evento cuando el modal se oculta
            $('#modalPurple').on('hidden.bs.modal', function(e) {
                // Limpiar el contenido de los inputs dentro del modal específico
                $('#modalPurple input[type="text"]').val('');
                $('#modalPurple select[name="movimientos"]').val('');
            });
        });
    </script>
@stop
