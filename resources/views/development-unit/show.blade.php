@extends('layouts.app')

@section('template_title')
    {{ $developmentUnit->name ?? "{{ __('Show') Development Unit" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Development Unit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('development-units.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la persona encargada:</strong>
                            {{ $developmentUnit->name_of_person_in_charge }}
                        </div>
                        <div class="form-group">
                            <strong>Área de desarrollo:</strong>
                            {{ $developmentUnit->development_area }}
                        </div>
                        <div class="form-group">
                            <strong>Id Edifiico:</strong>
                            {{ $developmentUnit->id_buldings }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
