@extends('layouts.app')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Editando a {{ $partner->name }}</h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Datos Socio</h4>
                        @include('errors.list')
                        {!! Form::model($partner, ['method' => 'PATCH', 'action' => ['PartnersController@update', $partner->id], 'files'=>true, 'class' => 'form-horizontal style-form']) !!}
                        @include('app.partners._partnersForm', ['submitButtonText' => 'Editar Socio'])
                        {!! Form::close() !!}

                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>

@stop






