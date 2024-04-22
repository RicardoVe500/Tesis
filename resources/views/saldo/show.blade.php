@extends('layouts.app')

@section('template_title')
    {{ $saldo->name ?? __('Show') . " " . __('Saldo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Saldo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('saldos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Cuentaid:</strong>
                            {{ $saldo->cuentaId }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Debe:</strong>
                            {{ $saldo->debe }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Haber:</strong>
                            {{ $saldo->haber }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $saldo->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Saldo:</strong>
                            {{ $saldo->saldo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Saldodia:</strong>
                            {{ $saldo->saldoDia }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Saldoanterior:</strong>
                            {{ $saldo->saldoAnterior }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
