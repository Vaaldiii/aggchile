@extends('../layouts.app')

@section('resources')
    <style>
        .leftSettingColumn{
            padding-left: 25px;
            padding-right: 10px;

        }
        .rightSettingColumn{
            border-left: 1px solid #E1E1E1;
            padding-left: 25px;
        }
        .logo .logoImg{
            padding: 5px;
            background-color: rgba(221, 221, 221, 0.58);
        }
    </style>
@stop


@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Configuración</h3>
            <div class="content-panel mt">
                {!! Form::model($setting, ['method' => 'PATCH', 'action' => ['SettingsController@update', $setting->id], 'files'=>true, 'class' => 'form-horizontal style-form']) !!}
                <div class="row">
                    <div class="col-sm-4">

                        <div class="logo leftSettingColumn text-center">
                            <h4 class="text-left"><i class="fa fa-angle-right"></i> Ajustes Generales</h4>
                            <br>
                            <img src="{{ url('/template/logo.png') }}" class="img-responsive logoImg" alt="Agg Chile">
                            <br>
                            <button class="btn btn-primary btn-sm show-input-btn">Actualizar Logo</button>
                            <br><br>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-1">
                                    {!! Form::file('imageLogo', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                </div>
                            </div>
                            <div class="form-group text-left">
                                {!! Form::label('officeAddress', 'Dirección Oficina') !!}
                                {!! Form::text('officeAddress', null, ['class' => 'form-control']) !!}
                            </div>
                            <br>
                            <div class="form-group text-left">
                                {!! Form::label('officeNumber', 'Numero de Contacto') !!}
                                {!! Form::text('officeNumber', null, ['class' => 'form-control']) !!}
                            </div>
                            <br>
                            <div class="form-group text-left">
                                {!! Form::label('officeEmail', 'Email de Contacto') !!}
                                {!! Form::email('officeEmail', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8 rightSettingColumn">
                        @include('errors.list')
                        <div class="row">
                            <h4 class="text-left"><i class="fa fa-angle-right"></i> Inicio</h4>
                            <br>
                            <div class="col-sm-4 col-sm-offset-1 text-center">
                                <img src="{{ url('/template/slide-1.jpg') }}" alt="slide-1" style="width: 100%">
                                <br><br>
                                <button class="btn btn-primary btn-sm show-input-btn">Actualizar Banner 1</button>
                                <br><br>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        {!! Form::file('imageAccordion1', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4  text-center">
                                <img src="{{ url('/template/slide-2.jpg') }}" alt="slide-1" style="width: 100%">
                                <br><br>
                                <button class="btn btn-primary btn-sm show-input-btn">Actualizar Banner 2</button>
                                <br><br>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        {!! Form::file('imageAccordion2', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="text-left"><i class="fa fa-angle-right"></i> Quienes Somos</h4>
                                <br>
                                <div class="text-center">
                                    <br><br>
                                    <img src="{{ url('/template/native-copper.jpg') }}" alt="" class="img-responsive" style="width: 100%">
                                    <br>
                                    @if($setting->hasImageQuienesSomos == 'yes')
                                        ¿Mostrar Imagen? {!! Form::checkbox('hasImageQuienesSomos', 'yes', true) !!}
                                    @else
                                        ¿Mostrar Imagen? {!! Form::checkbox('hasImageQuienesSomos', 'yes', false) !!}
                                    @endif
                                    <br><br>
                                    <button class="btn btn-primary btn-sm show-input-btn">Actualizar Imagen</button>
                                    <br><br>
                                    {!! Form::file('imageQuienesSomos', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4 class="text-left"><i class="fa fa-angle-right"></i> Servicios</h4>
                                <br>
                                <div class="text-center">
                                    <br><br>
                                    <img src="{{ url('/template/servicios-derecha.png') }}" alt="" class="img-responsive" style="width: 100%">
                                    <br>
                                    @if($setting->hasImageServicios == 'yes')
                                        ¿Mostrar Imagen? {!! Form::checkbox('hasImageServicios', 'yes', true) !!}
                                    @else
                                        ¿Mostrar Imagen? {!! Form::checkbox('hasImageServicios', 'yes', false) !!}
                                    @endif
                                    <br><br>
                                    <button class="btn btn-primary btn-sm show-input-btn">Actualizar Imagen</button>
                                    <br><br>
                                    {!! Form::file('imageServicios', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4 class="text-left"><i class="fa fa-angle-right"></i> Equipo</h4>
                                <br>
                                <div class="text-center">
                                    <img src="{{ url('/template/contacto.jpg') }}" alt="" class="img-responsive" style="width: 100%">
                                    <br>
                                    @if($setting->hasImageContacto == 'yes')
                                        ¿Mostrar Imagen? {!! Form::checkbox('hasImageContacto', 'yes', true) !!}
                                    @else
                                        ¿Mostrar Imagen? {!! Form::checkbox('hasImageContacto', 'yes', false) !!}
                                    @endif
                                    <br><br>
                                    <button class="btn btn-primary btn-sm show-input-btn">Actualizar Imagen</button>
                                    <br><br>
                                    {!! Form::file('imageContacto', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-sm-6 col-sm-offset-3">
                        {!! Form::submit('Guardar Cambios',['class' => 'btn btn-success form-control btn-block']) !!}
                    </div>
                    <br><br><br>
                </div>

                {!! Form::close() !!}

            </div>
        </section>
    </section>
@stop

@section('scripts')
    <script>
        $(function() {
            $(".show-input-btn").click(function (e) {
                e.preventDefault();
                $(this).parent().find('.image-input').slideDown();
            });
        });
    </script>
@stop