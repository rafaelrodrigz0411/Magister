<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_of_person_in_charge') }}
            {{ Form::text('name_of_person_in_charge', $equipo->name_of_person_in_charge, ['class' => 'form-control' . ($errors->has('name_of_person_in_charge') ? ' is-invalid' : ''), 'placeholder' => 'Name Of Person In Charge']) }}
            {!! $errors->first('name_of_person_in_charge', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('development_area') }}
            {{ Form::text('development_area', $equipo->development_area, ['class' => 'form-control' . ($errors->has('development_area') ? ' is-invalid' : ''), 'placeholder' => 'Development Area']) }}
            {!! $errors->first('development_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_buldings') }}
            {{ Form::text('id_buldings', $equipo->id_buldings, ['class' => 'form-control' . ($errors->has('id_buldings') ? ' is-invalid' : ''), 'placeholder' => 'Id Buldings']) }}
            {!! $errors->first('id_buldings', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>