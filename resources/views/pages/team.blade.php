@extends('.layouts.pages')

@section('styles')
    <link rel="stylesheet" href="css/organizational.css">
    <style>
        .site-title{
            background-image: url('{{ url('/template/equipo.jpg') }}');
            background-size: cover;
            background-position: 0% 70%;
        }
        .description-container{
            padding: 50px 15px;
            margin-bottom: 30px;
        }
        .whoweare-container{

        }
        .description-text{
            padding: 0px 25px;
            font-family: Open Sans, Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 300;
            line-height: 2.1em;
            color: #666666;
        }
        .team-button-container .btn-square{
            margin: 5px 0px;
        }

        .partner{

        }

        .partner .col-sm-4{
            padding-left:0px !important;
        }

        .partner-img{
            width: 100%;
        }

        .partner-info{
            background-color: #135987;
            padding: 5px 10px;
            color: white;
            margin-bottom: 0px;
            border-radius: 0px;
        }
        .partner-title{
            font-size: 11px;
        }

        .partner-description{
            font-size: 16px;
        }

        .cv-btn{
            border-radius: 0px !important;
        }


        .degree{
            margin-top: 10px;
        }
        .org-tree{
            padding: 40px 70px;
            background-image: url("{{ url('/template/cartographer.png') }}");
            color: #0F486E;
        }
        .org-tree img{
            margin-right: auto;
            margin-left: auto;
        }

        .team-separator {
            width: 80%;
            height: 1px;
            background: #135987;
            display: block;
            margin: 15px auto 60px;
        }

        .flip .back {
            background: rgba(250, 250, 250, 0.58);
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .partner-row{
            margin-bottom: 20px;
        }

    </style>
@endsection

@section('content')
    <div class="row site-title">
        <div class="col-sm-12">
            <h3>EQUIPO</h3>
        </div>
    </div>
    <div class="row description-container">
        <div class="col-sm-9 whoweare-container">
            <div class="partner">
            @foreach ($partners as $partner)
                    <div class="col-sm-4 text-center partner-container">
                        <div class="partner-info text-left">
                            <p class="partner-name text-uppercase">{{ $partner->name }}</p>
                            <p class="partner-title text-uppercase">{{ $partner->degree }}</p>
                        </div>
                        <div class="flip">
                            <div class="front">
                                <img src="{{ URL::to("/img/team/".$partner->image) }}" alt="{{ $partner->name }}" class="img-rectangle partner-img">
                            </div>
                            <div class="back .text-truncate">
                                {{ $partner->description }}
                            </div>
                        </div>

                        @if($partner->cv)
                            <a href="{{ url('/team/'.$partner->cv) }}" class="btn btn-success btn-sm btn-block cv-btn">Curriculum Vitae</a>
                        @endif
                    </div>
            @endforeach
            </div>
        </div>
        <div class="col-sm-3 hidden-xs">
            <img src="{{ url('/template/equipo-texto.jpg') }}" alt="" class="img-responsive">
        </div>
    </div>
    <div>
        {!! $page->content1 !!}
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.flip.min.js"></script>
    <script>
        $(function(){
            var divs = $(".partner-container");
            for(var i = 0; i < divs.length; i+=3) {
                divs.slice(i, i+3).wrapAll("<div class='row partner-row'></div>");
            }
            var dim = $(".partner-img").first().width();
            $(".flip").height(dim).width(dim);
            $(".flip").flip({
                trigger: 'hover',
                speed: 700,
                autoSize: true
            });

        });
    </script>
@endsection