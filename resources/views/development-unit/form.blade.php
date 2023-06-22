<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre_persona_encargada') }}
            {{ Form::text('name_of_person_in_charge', $developmentUnit->name_of_person_in_charge, ['class' => 'form-control' . ($errors->has('name_of_person_in_charge') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la persona encargada']) }}
            {!! $errors->first('name_of_person_in_charge', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Área_desarrollo') }}
            {{ Form::text('development_area', $developmentUnit->development_area, ['class' => 'form-control' . ($errors->has('development_area') ? ' is-invalid' : ''), 'placeholder' => 'Área de desarrollo']) }}
            {!! $errors->first('development_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_Edificio') }}
            {{ Form::text('id_buldings', $developmentUnit->id_buldings, ['class' => 'form-control' . ($errors->has('id_buldings') ? ' is-invalid' : ''), 'placeholder' => 'Id Edificio']) }}
            {!! $errors->first('id_buldings', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
