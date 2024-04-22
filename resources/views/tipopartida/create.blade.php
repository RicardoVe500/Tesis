@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tipopartida
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tipopartida</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tipopartidas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipopartida.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
