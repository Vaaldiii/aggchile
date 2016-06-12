@extends('.layouts.pages')

@section('styles')
    <style>
        .site-title{
            background-image: url('{{ url('/img/quienes.jpg') }}');
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
        .mision-vision{
            padding-top: 0px;
            padding-bottom: 70px;
            padding-left: 20px;
            padding-right: 20px;
            color: #ffffff;
            background-image: url('{{ url('/img/mision-vision.jpg') }}');
        }
        .mision-vision p{
            padding-top: 20px;
            font-family: Open Sans, Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 300;
        }

        .mision, .vision{
            padding-top: 70px;
        }
    </style>
@endsection

@section('content')
    <div class="row site-title">
        <div class="col-sm-12">
            <h3>QUIENES SOMOS</h3>
        </div>
    </div>
    <div class="row description-container">
        @if($setting->hasImageQuienesSomos == 'yes')
            <div class="col-sm-8 whoweare-container">
                {!! $page->content1 !!}
            </div>
            <div class="col-sm-4">
                <img src="{{ url('/template/native-copper.jpg') }}" alt="" class="img-responsive">
            </div>
        @else
            <div class="col-sm-12 whoweare-container">
                {!! $page->content1 !!}
            </div>
        @endif

    </div>
    <div class="row mision-vision">
        {!! $page->content2 !!}
    </div>
@endsection