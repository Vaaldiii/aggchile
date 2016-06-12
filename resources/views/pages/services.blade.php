@extends('.layouts.pages')

@section('styles')
    <style>
        @media (max-width: 768px){
            .company-logo>img{
                max-width: 300px !important;
                margin-left: auto;
                margin-right: auto;
            }
        }
        .site-title{
            background-image: url('{{ url('/img/servicios.jpg') }}');
            background-position: 100% 46%;
        }
        .description-container{
            padding: 50px 15px;
            margin-bottom: 30px;
        }
        .whoweare-container{
            padding-top: 40px;
        }
        .description-text{
            padding: 0px 25px;
            font-family: Open Sans, Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 300;
            line-height: 2.1em;
            color: #666666;
        }
        .worked-with-container{
            background-image: url('{{ url('/img/servicios-bg.jpg') }}');
            padding: 80px 15px;
            max-height: 700px;
            overflow-y: auto;
        }
        .previuos-works-container{
            padding: 20px 0px;
        }
        .service-container{
            color: #ffffff;
            margin-top: 10px;
            margin-bottom: 15px;
        }
        .service-container span{
            border-style: solid;
            font-style: normal;
            text-align: center;
            font-size: 15px;
            line-height: 15px;
            padding: 20px;
            color: #fff;
            background-color: transparent;
            border-color: #ffffff;
            border-width: 1px;
            border-radius: 50px;
            -webkit-border-radius:50px;
            -moz-border-radius:50px;
        }
        .service-info{
            font-weight: 300;
        }
    </style>
@endsection

@section('content')
    <div class="row site-title">
        <div class="col-sm-12">
            <h3>SERVICIOS</h3>
        </div>
    </div>
    <div class="row description-container">
        @if($setting->hasImageServicios == 'yes')
            <div class="col-sm-6 whoweare-container">
                {!! $page->content1 !!}
            </div>
            <div class="col-sm-6">
                <img src="{{ url('/template/servicios-derecha.png') }}" alt="" class="img-responsive">
            </div>
        @else
            <div class="col-sm-12 whoweare-container">
                {!! $page->content1 !!}
            </div>
        @endif

    </div>
    <div class="row worked-with-container">

        <div class="row previuos-works-container">
            <div class="col-sm-3 col-xs-12 company-logo">
                <img src="{{ url('/img/codelco.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-sm-9 col-xs-12">

                <div class="row service-container">
                    <div class="col-sm-2 work-icon hidden-xs"><span class="glyphicon glyphicon-wrench"></span></div>
                    <div class="col-sm-10 col-xs-12">
                        <h3 class="service-company">CODELCO - División Radomiro Tomic</h3>
                        <p class="service-info">05 de Septiembre 2012 – 31 Mayo de 2013. Contrato: 4501306585.</p>
                        <p class="service-title">“Servicio Geológico y Estimación de Recursos para la Superintendencia de Geología GRMD-RT.”</p>
                    </div>
                </div>

                <div class="row service-container">
                    <div class="col-sm-2 work-icon hidden-xs"><span class="glyphicon glyphicon-wrench"></span></div>
                    <div class="col-sm-10">
                        <h3 class="service-company">CODELCO - División Radomiro Tomic</h3>
                        <p class="service-info">Septiembre de 2013 – Octubre de 2013. Contrato: 5501391152.</p>
                        <p class="service-title">“Servicio Geológico de Modelamiento y Estimación Geoestadística de Arsénico – Sulfuros Fase II GRMD-RT.”</p>
                    </div>
                </div>

                <div class="row service-container">
                    <div class="col-sm-2 work-icon hidden-xs"><span class="glyphicon glyphicon-wrench"></span></div>
                    <div class="col-sm-10">
                        <h3 class="service-company">CODELCO - División Radomiro Tomic</h3>
                        <p class="service-info">06 de Enero 2014 – 05 Enero de 2016. Contrato: 4501422265.</p>
                        <p class="service-title">“Servicio de Modelamiento Geológico, Geotécnico y Geometalúrgico, Estimación de Recursos de RT Norte”, y “Modelamiento Geometalúrgico, y Estimación Geoestadística de Parámetros Geometalúrgicos – Sulfuros Fase II- DRT.”</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row previuos-works-container">
            <div class="col-sm-3 col-xs-12 company-logo">
                <img src="{{ url('/img/antofagasta-logo.png') }}" alt="Antofagasta Minerals" class="img-responsive">
            </div>
            <div class="col-sm-9 col-xs-12">

                <div class="row service-container">
                    <div class="col-sm-2 work-icon hidden-xs"><span class="glyphicon glyphicon-wrench"></span></div>
                    <div class="col-sm-10">
                        <h3 class="service-company">AMSA – Proyecto Polo Sur</h3>
                        <p class="service-info">01 Mayo de 2014 – 31 de Julio de 2014. Contrato: PFPS-0007.</p>
                        <p class="service-title">“Análisis Geoestadístico y Geometalúrgico para definición de UGM.”</p>
                    </div>
                </div>

                <div class="row service-container">
                    <div class="col-sm-2 work-icon hidden-xs"><span class="glyphicon glyphicon-wrench"></span></div>
                    <div class="col-sm-10">
                        <h3 class="service-company">AMSA – Proyecto Scherezade</h3>
                        <p class="service-info">Octubre de 2014 – Enero de 2015. Contrato: Extensión de PFPS-0007.</p>
                        <p class="service-title">“Análisis Geoestadístico y Geometalúrgico para definición de UGM.”</p>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
