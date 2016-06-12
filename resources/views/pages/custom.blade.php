@extends('.layouts.pages')

@section('styles')
    <style>
        .site-title{
            background-image: url('{!! $page->bimage !!}');
        }
    </style>
@endsection

@section('content')
    <div class="row site-title">
        <div class="col-sm-12">
            <h3 class="text-uppercase">{!! $page->name !!}</h3>
        </div>
    </div>
    <div class="row">
        {!! $page->content1 !!}
    </div>


@endsection

@section('scripts')
@endsection