@extends('.layouts.pages')

@section('styles')
    <link rel="stylesheet" href="css/organizational.css">
    <style>
        .site-title{
            background-image: url('{{ url('/img/equipo.jpg') }}');
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

        .partner-img{
            width: 200px;
        }

        .partner-info{
            background-color: #135987;
            padding: 5px 10px;
            color: white;
            margin-bottom: 10px;
            border-radius: 10px;;
        }

        .partner-title{
            font-size: 11px;
        }

        .partner-description{
            font-size: 16px;
        }


        .degree{
            margin-top: 10px;
        }
        .org-tree{
            padding: 40px 70px;
            background-image: url("{{ url('/img/cartographer.png') }}");
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

            @foreach ($partners as $partner)
                <div class="partner row">
                    <div class="col-sm-4 text-center">
                        <div class="partner-info text-left">
                            <p class="partner-name text-uppercase">{{ $partner->name }}</p>
                            <p class="partner-title text-uppercase">{{ $partner->degree }}</p>
                        </div>
                        <img src="{{ URL::to("/img/team/".$partner->image) }}" alt="{{ $partner->name }}" class="img-circle partner-img">
                        <br><br>
                        @if($partner->cv)
                            <a href="{{ url('/team/'.$partner->cv) }}" class="btn btn-success btn-xs">Curriculum Vitae</a>
                        @endif
                    </div>
                    <div class="col-sm-8 partner-description">
                        {{ $partner->description }}
                    </div>
                </div>
                <hr class="team-separator">

            @endforeach

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

@endsection