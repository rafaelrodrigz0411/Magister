@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? "{{ __('Show') Equipo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Of Person In Charge:</strong>
                            {{ $equipo->name_of_person_in_charge }}
                        </div>
                        <div class="form-group">
                            <strong>Development Area:</strong>
                            {{ $equipo->development_area }}
                        </div>
                        <div class="form-group">
                            <strong>Id Buldings:</strong>
                            {{ $equipo->id_buldings }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
