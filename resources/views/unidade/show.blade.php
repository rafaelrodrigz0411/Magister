@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? "{{ __('Show') Unidade" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Unidade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Project:</strong>
                            {{ $unidade->name_project }}
                        </div>
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $unidade->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>End Date:</strong>
                            {{ $unidade->end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Projects Managers:</strong>
                            {{ $unidade->id_projects_managers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
