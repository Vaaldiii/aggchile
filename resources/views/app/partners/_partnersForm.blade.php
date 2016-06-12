<div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('degree', 'Titulo Actual', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('degree', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripcion', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Imagen Perfil', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('cv', 'Curriculum Vitae', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::file('cv', ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
