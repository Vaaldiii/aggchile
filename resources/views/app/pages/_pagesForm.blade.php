<div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group ">
    {!! Form::label('content1', 'Contenido', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content1', null, ['class' => 'form-control content']) !!}
    </div>
</div>

<div class="form-group" id="content-hide-2">
    {!! Form::label('content2', 'Contenido 2', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content2', null, ['class' => 'form-control content']) !!}
    </div>
</div>

<div class="form-group" id="content-hide-3">
    {!! Form::label('content3', 'Contenido 3', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content3', null, ['class' => 'form-control content']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>