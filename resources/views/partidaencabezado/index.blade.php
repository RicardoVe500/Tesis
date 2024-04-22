@extends('layouts.app')

@section('template_title')
    Partidaencabezado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Partidaencabezado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('partidaencabezados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tipopartidaid</th>
										<th>Codigopartida</th>
										<th>Fechacontable</th>
										<th>Fechaactual</th>
										<th>Debe</th>
										<th>Haber</th>
										<th>Diferenca</th>
										<th>Conceptogeneral</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partidaencabezados as $partidaencabezado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $partidaencabezado->tipopartida->nombrePartida }}</td>
											<td>{{ $partidaencabezado->codigoPartida }}</td>
											<td>{{ $partidaencabezado->fechaContable }}</td>
											<td>{{ $partidaencabezado->fechaActual }}</td>
											<td>{{ $partidaencabezado->debe }}</td>
											<td>{{ $partidaencabezado->haber }}</td>
											<td>{{ $partidaencabezado->diferenca }}</td>
											<td>{{ $partidaencabezado->conceptoGeneral }}</td>
											<td>{{ $partidaencabezado->estado }}</td>

                                            <td>
                                                <form action="{{ route('partidaencabezados.destroy',$partidaencabezado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('partidaencabezados.show',$partidaencabezado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('partidaencabezados.edit',$partidaencabezado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $partidaencabezados->links() !!}
            </div>
        </div>
    </div>
@endsection
