<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_project') }}
            {{ Form::text('name_project', $unidade->name_project, ['class' => 'form-control' . ($errors->has('name_project') ? ' is-invalid' : ''), 'placeholder' => 'Name Project']) }}
            {!! $errors->first('name_project', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_date') }}
            {{ Form::text('start_date', $unidade->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date']) }}
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end_date') }}
            {{ Form::text('end_date', $unidade->end_date, ['class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : ''), 'placeholder' => 'End Date']) }}
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_projects_managers') }}
            {{ Form::text('id_projects_managers', $unidade->id_projects_managers, ['class' => 'form-control' . ($errors->has('id_projects_managers') ? ' is-invalid' : ''), 'placeholder' => 'Id Projects Managers']) }}
            {!! $errors->first('id_projects_managers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>