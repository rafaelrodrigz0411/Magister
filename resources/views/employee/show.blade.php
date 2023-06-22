@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $employee->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $employee->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $employee->age }}
                        </div>
                        <div class="form-group">
                            <strong>Número de teléfono:</strong>
                            {{ $employee->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Género:</strong>
                            {{ $employee->genre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
