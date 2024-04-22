@extends('layouts.app')

@section('template_title')
    Saldo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Saldo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('saldos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Cuentaid</th>
										<th>Debe</th>
										<th>Haber</th>
										<th>Fecha</th>
										<th>Saldo</th>
										<th>Saldodia</th>
										<th>Saldoanterior</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saldos as $saldo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $saldo->cuentaId }}</td>
											<td>{{ $saldo->debe }}</td>
											<td>{{ $saldo->haber }}</td>
											<td>{{ $saldo->fecha }}</td>
											<td>{{ $saldo->saldo }}</td>
											<td>{{ $saldo->saldoDia }}</td>
											<td>{{ $saldo->saldoAnterior }}</td>

                                            <td>
                                                <form action="{{ route('saldos.destroy',$saldo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('saldos.show',$saldo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('saldos.edit',$saldo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $saldos->links() !!}
            </div>
        </div>
    </div>
@endsection
