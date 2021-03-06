@extends('.layouts.pages')

@section('styles')
    <link rel="stylesheet" href="/css/layerslider.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300' rel='stylesheet' type='text/css'>
    <style>
        .description-container{
            padding: 30px 0px;
            background-image: url("{{ url('/template/cartographer.png') }}");
            font-family: 'Oswald', sans-serif;
        }
        .description-title{
            color: #0F486E;
        }
        .description-text{
            font-family: Open Sans, Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.9em;
            color: #666666;
        }
        .title-seperator {
            width: 60px;
            height: 2px;
            background: rgba(0,0,0,.08);
            display: block;
            margin: 15px auto 18px;
        }
        .btn-square-service{
            font-weight: 100;
            border-radius: 0px;
            margin: 30px 0px;
            background-color: transparent;
            border: 2px solid #FFF;
            color:#FFF;
        }
        .btn-square-service:hover{
            background-color: #0F486E;
            border: 2px solid #0F486E;
            color: #ffffff;
        }
        .slide-text{
            font-family: 'Lato', sans-serif;
            font-weight: 100;
            color: #ffffff;
            text-align: right;
            white-space: nowrap;
            width: auto;

        }
        #thumbnail{
            background-color: rgba(0, 0, 0, 0.80);
            text-transform: uppercase;
        }
        .thumbnail-text{
            font-family: 'Lato', sans-serif;
            font-weight: 100;
            color: #ffffff;
            text-align: center;
            font-size: 12px;
            line-height: 30px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div id="layerslider" style="height: 400px; margin: 0px auto; visibility: visible;">
            <!-- The contents on your slider will be here -->

            <div class="ls-slide" data-ls="slidedelay:6000;transition2d:83;timeshift:-1000;" style="width: 100%; height: 400px; visibility: visible; display: none; left: auto; right: 0px; top: 0px; bottom: auto;">
                <img src="{{ url('/template/slide-1.jpg') }}" data-src="{{ url('/template/slide-1.jpg') }}" class="ls-bg ls-preloaded" alt="slide-1" style="padding: 0px; border-width: 0px; width: 1920px; height: 596px; margin-left: -320px; margin-top: -98px; visibility: visible;">
                <p class="ls-l slide-text" style="top: 37px; right: 100px;  height: 40px;font-size: 30px; line-height: 37px;" data-ls="offsetxin:0;offsetyin:20;durationin:450;delayin:1500;easingin:linear;transformoriginin:50% 50%0;offsetxout:0;offsetyout:-8;durationout:950;easingout:linear;scalexout:1.2;scaleyout:1.2;">Asesorías Geológicas y Geoestadísticas SpA </p>
                <div class="ls-l slide-text" style="top: 96px; right: 100px;font-size: 20px;" data-ls="offsetxin:0;offsetyin:30;durationin:550;delayin:2500;easingin:linear;rotatexin:90;offsetxout:0;offsetyout:-8;durationout:950;easingout:linear;scalexout:1.2;scaleyout:1.2;">Geología, Control de calidad y Geoestadística <br> aplicada a la Gran Minería</div>
                <div class="ls-l slide-text hidden-xs hidden-sm" style="top: 150px; right: 100px;" data-ls="offsetxin:100;durationin:400;delayin:3200;easingin:linear;offsetxout:-400;">
                    <a href="{{ url('/servicios') }}" class="btn btn-lg btn-square-service">Ver Servicios</a>
                </div>
            </div>
            <div class="ls-slide" data-ls="slidedelay:6000;transition2d:83;timeshift:-1000;" style="width: 100%; height: 400px; left: auto; right: 0px; top: 0px; bottom: auto; visibility: visible; display: none;">
                <img src="{{ url('/template/slide-2.jpg') }}" data-src="{{ url('/template/slide-2.jpg') }}" class="ls-bg ls-preloaded" alt="slide-2" style="padding: 0px; border-width: 0px; width: 1349px; height: 400px; margin-left: -34.5px; margin-top: 0px; visibility: visible;">
                <p class="ls-l slide-text" style="top: 145px; right: 100px; font-size: 28px; line-height: 50px; " data-ls="offsetxin:0;offsetyin:20;durationin:450;delayin:1500;easingin:linear;offsetxout:0;offsetyout:-80;durationout:950;easingout:linear;scalexout:1.2;scaleyout:1.2;">Asesorías Geológicas y Geoestadísticas SpA </p>
                <p class="ls-l slide-text" style="top: 219px; right: 100px; text-align: right;font-size: 20px;" data-ls="offsetxin:0;offsetyin:30;durationin:550;delayin:2500;easingin:linear;rotatexin:90;offsetxout:0;offsetyout:-8;durationout:950;easingout:linear;scalexout:1.2;scaleyout:1.2;">Somos una empresa con sólida experiencia<br> en la minería del cobre del norte de Chile</p>
                <div class="ls-l slide-text hidden-xs hidden-sm" style="top: 280px; right: 100px; font-size: 13px;" data-ls="delayin:3200;">
                    <a href="{{ url('/quienes-somos') }}" class="btn btn-lg btn-square-service">Quienes Somos</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div id="thumbnail" style="height: 30px; margin: 0px auto; visibility: visible;">
            <div class="ls-slide" data-ls="slidedelay:2000;transition2d:83;timeshift:-1000;">
                <div class="ls-l thumbnail-text" style="width:100%;">Soluciones Personalizadas, Desarrollo y Ejecución de Proyectos Geo Mineros Metalúrgicos únicos </div>
            </div>
            <div class="ls-slide" data-ls="slidedelay:2000;transition2d:83;timeshift:-1000;" style="width: 100%; height: 400px; visibility: visible; display: none; left: auto; right: 0px; top: 0px; bottom: auto;">
                <div class="ls-l thumbnail-text" style="width:100%;">AMPLIA EXPERIENCIA TÉCNICA Y DE GESTIÓN EN PROYECTOS GEO MINEROS METALÚRGICOS </div>
            </div>
            <div class="ls-slide" data-ls="slidedelay:2000;transition2d:83;timeshift:-1000;" style="width: 100%; height: 400px; visibility: visible; display: none; left: auto; right: 0px; top: 0px; bottom: auto;">
                <div class="ls-l thumbnail-text" style="width:100%;">ASESORÍAS GEOCIENTÍFICAS DE ALTA CALIDAD, REPRODUCIBLES, TRAZABLES Y AUDITABLES</div>
            </div>
            <div class="ls-slide" data-ls="slidedelay:3000;transition2d:83;timeshift:-1000;" style="width: 100%; height: 400px; visibility: visible; display: none; left: auto; right: 0px; top: 0px; bottom: auto;">
                <div class="ls-l thumbnail-text" style="width:100%;">COMPROMISO – ÉTICA – CONOCIMIENTO - RESPONSABILIDAD – CALIDAD – EFICIENCIA – CREATIVIDAD – INNOVACIÓN</div>
            </div>
            <div class="ls-slide" data-ls="slidedelay:3000;transition2d:83;timeshift:-1000;" style="width: 100%; height: 400px; visibility: visible; display: none; left: auto; right: 0px; top: 0px; bottom: auto;">
                <div class="ls-l thumbnail-text" style="width:100%;">ORIENTACIÓN A LOS OBJETIVOS DE NUESTROS CLIENTES Y AL TRABAJO EN EQUIPO</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 description-container text-center">
            <h2 class="description-title">
                AGG SPA | ASESORÍAS GEOLÓGICAS Y GEOESTADÍSTICAS SPA
                <span class="title-seperator"></span>
            </h2>
            {!! $page->content1 !!}

        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/greensock.js" type="text/javascript"></script>
    <script src="/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script type="text/javascript">

        // Running the code when the document is ready
        $(document).ready(function() {

            $("#layerslider").layerSlider({
                responsiveUnder: 1280,
                layersContainer: 1280,
                startInViewport: false,
                skin: 'noskin',
                globalBGColor: 'transparent',
                hoverPrevNext: false,
                autoPlayVideos: false,
                yourLogoStyle: 'left: 10px; top: 10px;',
                skinsPath: '/skins/'
            });
            $("#thumbnail").layerSlider({
                responsiveUnder: 1280,
                layersContainer: 1280,
                startInViewport: false,
                skin: 'noskin',
                globalBGColor: 'transparent',
                hoverPrevNext: false,
                autoPlayVideos: false,
                skinsPath: '/skins/'
            })
        });

    </script>
@endsection