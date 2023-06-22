<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre_proyecto') }}
            {{ Form::text('name_project', $project->name_project, ['class' => 'form-control' . ($errors->has('name_project') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de proyecto']) }}
            {!! $errors->first('name_project', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_inicio') }}
            {{ Form::text('start_date', $project->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de inicio']) }}
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_final') }}
            {{ Form::text('end_date', $project->end_date, ['class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de finalización']) }}
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_encargado_proyecto') }}
            {{ Form::text('id_projects_managers', $project->id_projects_managers, ['class' => 'form-control' . ($errors->has('id_projects_managers') ? ' is-invalid' : ''), 'placeholder' => 'Id Encargado de proyectos']) }}
            {!! $errors->first('id_projects_managers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
