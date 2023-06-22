@extends('layouts.app')

@section('template_title')
    {{ $equipment->name ?? "{{ __('Show') Equipment" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipment.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la persona encargada:</strong>
                            {{ $equipment->name_of_person_in_charge }}
                        </div>
                        <div class="form-group">
                            <strong>Área de desarrollo:</strong>
                            {{ $equipment->development_area }}
                        </div>
                        <div class="form-group">
                            <strong>Id Edificio:</strong>
                            {{ $equipment->id_buldings }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
