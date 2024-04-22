@extends('layouts.app')

@section('template_title')
    {{ $partidaencabezado->name ?? __('Show') . " " . __('Partidaencabezado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Partidaencabezado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('partidaencabezados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Tipopartidaid:</strong>
                            {{ $partidaencabezado->tipoPartidaId }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Codigopartida:</strong>
                            {{ $partidaencabezado->codigoPartida }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fechacontable:</strong>
                            {{ $partidaencabezado->fechaContable }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fechaactual:</strong>
                            {{ $partidaencabezado->fechaActual }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Debe:</strong>
                            {{ $partidaencabezado->debe }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Haber:</strong>
                            {{ $partidaencabezado->haber }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Diferenca:</strong>
                            {{ $partidaencabezado->diferenca }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Conceptogeneral:</strong>
                            {{ $partidaencabezado->conceptoGeneral }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado:</strong>
                            {{ $partidaencabezado->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
