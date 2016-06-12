@extends('layouts.app')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Editando a {{ $service->name }}</h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> {{ $service->name }}</h4>
                        @include('errors.list')

                        {!! Form::model($service, ['method' => 'PATCH', 'action' => ['ServicesController@update', $service->id], 'files'=>true, 'class' => 'form-horizontal style-form']) !!}
                        @include('app.services._servicesForm', ['submitButtonText' => 'Editar Servicio'])
                        {!! Form::close() !!}

                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>

@stop





