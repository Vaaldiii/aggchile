@extends('layouts.app')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Editando {{ $page->name }}</h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Galería
                            <button class="btn btn-default pull-right col-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        </h4>
                        <div class="panel-body collapse">
                            <div class="gallery-grid">
                                @foreach($images as $image)
                                    <div class="image-gallery-cont text-center">
                                        <img src="/img/gallery/{{ $image->filename }}.jpg" alt="{{ $image->original_name }}" width="20%" class="img-rounded gallery-image" data-toggle="popover" data-placement="top" data-content="/img/gallery/{{ $image->filename }}.jpg">
                                    </div>

                                @endforeach
                            </div>
                        </div>

                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Contenido</h4>
                        @include('errors.list')

                        {!! Form::model($page, ['method' => 'PATCH', 'action' => ['PagesController@update', $page->id], 'class' => 'form-horizontal style-form']) !!}
                        @include('app.pages._pagesForm', ['submitButtonText' => 'Editar '.$page->name])
                        {!! Form::close() !!}

                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>

@stop

@section('scripts')
    <script>
        if(!{{ $page->hascontent1 }}){
            $("#content-hide-1").hide();
        }
        if(!{{ $page->hascontent2 }}){
            $("#content-hide-2").hide();
        }
        if(!{{ $page->hascontent3 }}){
            $("#content-hide-3").hide();
        }
    </script>
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script src="/js/tinymce/setup.js"></script>
    <script>
        $( document ).ready(function() {
            $('[data-toggle="popover"]').popover();
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
            $(".gallery-image").click(function () {

            });
        });

    </script>
@stop
