@extends('layouts.app')

@section('template_title')
    {{ $project->name ?? "{{ __('Show') Project" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de proyecto:</strong>
                            {{ $project->name_project }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de inicio:</strong>
                            {{ $project->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de finalización:</strong>
                            {{ $project->end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Encargado de proyecto:</strong>
                            {{ $project->id_projects_managers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
