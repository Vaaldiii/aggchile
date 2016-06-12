@extends('.layouts.pages')

@section('styles')
    <style>
        .map-container{
            padding: 0px;
            pointer-events:none;
            width: 100%;
            height: 450px;
        }
        .contact{
            padding-top: 40px;
            padding-left: 40px;
            padding-bottom: 40px;
        }
        .contact h3{
            color: #000000;
        }
        .form-control{
            border-radius: 0px !important;
            height: 50px !important;
            color: #666666 !important;

        }
        .contact-info{
            font-weight: 300;
        }
    </style>
@endsection

@section('content')
    <div class="row location">
        <div class="col-sm-12 map-container" id="map-container">
           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.5657253050135!2d-70.55561268519006!3d-33.43456470408226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ce5e899b46e5%3A0x588b3cb3cf2a49fb!2sValdepeñas+275+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1sen!2scl!4v1455436017450" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div>
    </div>
    <div class="row contact">
        <div class="col-sm-8 contact-form-container">
            <h3><bold>Contáctenos</bold></h3>
            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Asunto">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" placeholder="Mensaje"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-square-inverted">Enviar Mensaje <span class="glyphicon glyphicon-send"></span> </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4 contact-info-container">
            <h3>Datos de Contacto</h3>
            <p class="address contact-info"><span class="glyphicon glyphicon-home"></span> {{ $setting->officeAddress }}</p>
            <p class="phone contact-info"><span class="glyphicon glyphicon-phone"></span> {{ $setting->officeNumber }}</p>
            <p class="email contact-info"><span class="glyphicon glyphicon-envelope"> {{ $setting->officeEmail }}</p>
            @if($setting->hasImageContacto == 'yes')
                <img src="{{ url('/template/contacto.jpg') }}" alt="Contacto" class="img-responsive">
            @endif

        </div>
    </div>
@endsection

@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWAKHRUPtHAQX-BNUG_G_SgUD5MsRaTbs" type="text/javascript"></script>
    <script>
        var map;
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false
            };
            map = new google.maps.Map(document.getElementById('map-container'), mapOptions);
            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow;

            geocodeAddress(geocoder, map, infowindow);
        }

        function geocodeAddress(geocoder, map, infowindow) {
            address = "{{ $setting->officeAddress }}";
            console.log(address);
            geocoder.geocode({'address': address}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                    });
                    infowindow.setContent(results[0].formatted_address);
                    infowindow.open(map, marker);
                } else {
                    console.log('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
@stop