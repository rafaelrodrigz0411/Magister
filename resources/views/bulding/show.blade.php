@extends('layouts.app')

@section('template_title')
    {{ $bulding->name ?? "{{ __('Show') Bulding" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bulding</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('buldings.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Numero de edificio:</strong>
                            {{ $bulding->branch_number }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $bulding->address }}
                        </div>
                        <div class="form-group">
                            <strong>Número de sucursal:</strong>
                            {{ $bulding->phone_number }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
