<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agg SpA</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,200' rel='stylesheet' type='text/css'>
    <style>
        @media (min-width: 992px){
            body{
                padding-top: 91px;
            }
            .navbar-brand, .navbar-nav li a {
                line-height: 90px;
                height: 90px;
                padding-top: 0;
            }
            .navbar{
                padding: 0px 70px;
            }
            .navbar-brand {
                padding: 0px;
            }
            .navbar-brand>img {
                height: 100%;
                padding: 5px; /* firefox bug fix */
                width: auto;
            }
        }
        @media (max-width: 992px){
            body{
                padding-top: 50px;
            }
            .navbar{
                padding-left: 20px;
                padding-right: 20px;
            }
            .navbar-brand {
                padding: 0px;
            }
            .navbar-brand>img {
                height: 100%;
                padding: 1px; /* firefox bug fix */
                width: auto;
            }
        }

        .navbar-default{
            opacity: .97;
        }
        .navbar-right li a{
            font-family: 'Oswald', sans-serif;
            font-size: 14px;
            position: relative;
            text-transform: uppercase;
        }
        .site-title{
            color: #ffffff;
            font-family: 'Oswald', sans-serif;
            padding: 35px 70px;
        }
        .btn-square{
            border-radius: 0px;
            margin: 30px 0px;
            background-color: transparent;
            border: 2px solid #0F486E;
            color:#0F486E
        }
        .btn-square:hover{
            background-color: #0F486E;
            color: #ffffff;
        }
        .btn-square-inverted{
            border-radius: 0px;
            margin: 30px 0px;
            background-color: #0F486E;
            border: 2px solid #0F486E;
            color: #ffffff;
        }
        .btn-square-inverted:hover{
            background-color: transparent;
            color: #0F486E;
        }

    </style>
    @yield('styles')

</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-icon">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <!--<span class="hidden-lg hidden-md">AGG Chile</span>-->
                <img src="{{ url('/template/logo.png') }}" class="img-responsive" alt="Agg Chile">
            </a>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-icon">
            <ul class="nav navbar-nav">
                <li></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @foreach($pages as $page)
                    @if($page->type == "dynamic")
                        <li {{ (Request::is($page->url) ? 'class=active' : '') }}>
                            <a href="{{ url($page->url.'/'.$page->id) }}" class="text-uppercase">{{ $page->name }}</a>
                        </li>
                    @else
                        <li {{ (Request::is($page->url) ? 'class=active' : '') }}>
                            <a href="{{ url($page->url) }}" class="text-uppercase">{{ $page->name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>


        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
@yield('scripts')

</body>
</html>
