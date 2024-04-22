@extends('layouts.app')

@section('template_title')
    Catalogocuenta
@endsection

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
                                <a href="" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
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
											<td>{{ $catalogocuenta->n1 }}{{ $catalogocuenta->n2 }}{{ $catalogocuenta->n3 }}{{ $catalogocuenta->n4 }}{{ $catalogocuenta->n5 }}{{ $catalogocuenta->n6 }}{{ $catalogocuenta->n7 }}{{ $catalogocuenta->n8 }}</td>
                                            <td>{{ $catalogocuenta->nombreCuenta }}</td>
											<td>{{ $catalogocuenta->nivelCuenta }}</td>
                                            <td>{{ $catalogocuenta->CTADependiente}}</td>
											<td>{{ $catalogocuenta->movimientos }}</td>
                                            <td>
                                                <form action="{{ route('catalogocuentas.destroy',$catalogocuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subcuentas.create',$catalogocuenta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Crear') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('catalogocuentas.edit',$catalogocuenta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
@endsection
