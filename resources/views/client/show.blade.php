@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? "{{ __('Show') Client" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $client->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $client->age }}
                        </div>
                        <div class="form-group">
                            <strong>Género:</strong>
                            {{ $client->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Número de teléfono:</strong>
                            {{ $client->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $client->address }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado contactado:</strong>
                            {{ $client->employee_contact }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
