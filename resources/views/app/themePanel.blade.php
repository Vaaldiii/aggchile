@extends('../layouts.app')

@section('resources')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('/js/dropzone/dropzone.min.css') }}">
    <style>
        .gallery-image{
            margin-top: 2px;
            margin-bottom: 2px;
        }
        .image-gallery-cont{
            display: inline;
            position: relative;
        }

        .image-gallery-cont .btn-danger{
            display: none;
            position: absolute;
            top: 0px;
            right:43%;
            z-index: 1;
        }

        .image-gallery-cont:hover .btn-danger{
            display: inherit;
        }

        #sortable-menu{
            padding-left: 0px;
        }

        .menu-sort-item{
            margin-right: 10px;
            font-size: 16px;
            font-weight: 200;
            color: #424a5d;
            border: 1px solid #424a5d !important;
            border-radius: 5px;
            padding-left: 10px !important;
        }

        .menu-sort-item a{
        }
        .menu-sort-item .btn{
            margin-right: 20px;
        }

    </style>




    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">


@stop

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Panel de Control</h3>
            <div class="row mt">
                <div class="col-sm-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Paginas
                            <a href="{{ url('/home/pages/create') }}" class="btn btn-round btn-success"><i class="fa fa-plus-circle"></i> Crear Nueva Pagina</a>
                            <button class="btn btn-default pull-right col-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        </h4>
                        <div class="panel-body collapse">
                            <ul id="sortable-menu">
                                @foreach($pages as $page)
                                    <li class="menu-sort-item" id="pageid_{{ $page->id }}">
                                        <span class="glyphicon glyphicon-move"></span>
                                        <a href="{{ url('/pages/'.$page->id) }}">{{ $page->name }}</a>
                                        @if($page->editable)
                                            <a href="{{url('home/pages/'.$page->id.'/edit')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                            @if($page->type != "static")
                                                {!! Form::open(['action' => ['PagesController@destroy', $page->id], 'method' => 'delete', 'class' => 'delete-form pull-right', 'style' => 'display: inline-block;']) !!}
                                                <button type="submit" class="btn btn-danger btn-xs btn-delete"><i class='fa fa-trash-o'></i></button>
                                                {!! Form::close() !!}
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <button class="btn btn-success pull-right" id="sort-btn">Guardar Menu</button>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Galería
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#galleryModal"><i class="fa fa-plus-circle"></i> Subir Imagenes</button>
                            <button class="btn btn-default pull-right col-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        </h4>
                        <div class="panel-body collapse">
                            <div class="gallery-grid">
                                @foreach($images as $image)
                                    <div class="image-gallery-cont text-center">
                                        <a href="/img/gallery/{{ $image->filename }}.jpg">
                                            <img src="/img/gallery/{{ $image->filename }}.jpg" alt="{{ $image->original_name }}" width="30%" class="img-rounded gallery-image">
                                            <button class="btn-danger btn btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                                        </a>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" role="dialog" id="galleryModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Subir Imagenes</h4>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
                                    <div class="dz-message"></div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                    <div class="dropzone-previews" id="dropzonePreview"></div>
                                    <h4 style="text-align: center;color:#428bca;">Arrastre imagenes aquí  <span class="glyphicon glyphicon-hand-down"></span></h4>
                                    {!! Form::close() !!}
                                    <div id="preview-template" style="display: none;">

                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail=""></div>

                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>

                                            <div class="dz-success-mark">
                                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                                    <title>Check</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                                    </g>
                                                </svg>
                                            </div>

                                            <div class="dz-error-mark">
                                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                                    <title>error</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div>

            </div>

        </section>
    </section>
@stop

@section('scripts')
    <script src="{{ url('/js/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ url('/js/dropzone/config.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $( document ).ready(function() {
            $(".image-gallery-cont .btn-danger").click(function (e) {
                e.preventDefault();
                var parent = $(this).parent().parent();
                var img = $(this).parent().find("img");
                $.ajax({
                    type: 'POST',
                    url: 'upload/delete',
                    data: {id: img.attr('alt')},
                    dataType: 'html',
                    success: function(data){
                        var rep = JSON.parse(data);
                        if(rep.code == 200)
                        {
                            alertify.notify('Imagen eliminada exitosamente', 'success', 5, function(){});
                            parent.remove();
                        }else{
                            alertify.notify('Ups! Ha ocurrido un error', 'error', 5, function(){});
                        }

                    }
                });
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('.collapse').collapse();
            $('.col-btn').click(function(){
                var colBtn = $(this);
                var colPanel = $(this).parent().parent().find('.panel-body');
                colPanel.collapse('toggle').on('shown.bs.collapse', function() {
                    colBtn.html("<span class='glyphicon glyphicon-chevron-up'></span>");
                }).on('hidden.bs.collapse', function() {
                    colBtn.html("<span class='glyphicon glyphicon-chevron-down'></span>");
                });
            });
        });

    </script>

    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#sortable-menu" ).sortable({
                placeholder: "ui-state-highlight"
            });
            $( "#sortable-menu" ).disableSelection();

            $("#sort-btn").click(function () {
                var positions = $("#sortable-menu").sortable( "toArray" );
                $.ajax({
                    type: 'POST',
                    url: 'update/menu',
                    data: {list: positions},
                    dataType: 'html',
                    success: function(data){
                        var rep = JSON.parse(data);
                        if(rep.code == 200)
                        {
                            alertify.notify(rep.message, 'success', 5, function(){});
                        }else{
                            alertify.notify(rep.message, 'error', 5, function(){});
                        }
                    }
                });

            });

        });
    </script>
@stop