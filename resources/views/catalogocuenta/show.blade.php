@extends('layouts.app')

@section('template_title')
    {{ $catalogocuenta->name ?? __('Show') . " " . __('Catalogocuenta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Catalogocuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('catalogocuentas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>N1:</strong>
                            {{ $catalogocuenta->n1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N2:</strong>
                            {{ $catalogocuenta->n2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N3:</strong>
                            {{ $catalogocuenta->n3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N4:</strong>
                            {{ $catalogocuenta->n4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N5:</strong>
                            {{ $catalogocuenta->n5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N6:</strong>
                            {{ $catalogocuenta->n6 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N7:</strong>
                            {{ $catalogocuenta->n7 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>N8:</strong>
                            {{ $catalogocuenta->n8 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nocuenta:</strong>
                            {{ $catalogocuenta->noCuenta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ctadependiente:</strong>
                            {{ $catalogocuenta->CTADependiente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nivelcuenta:</strong>
                            {{ $catalogocuenta->nivelCuenta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombrecuenta:</strong>
                            {{ $catalogocuenta->nombreCuenta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Movimientos:</strong>
                            {{ $catalogocuenta->movimientos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
