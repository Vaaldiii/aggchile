<!DOCTYPE html>
<html lang="en" ng-app="CYBApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Kmx, Racing, Theme, Responsive, Fluid, Retina">

    <title>AGG Chile</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard-style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">

    <script src="/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Photoswipe -->
    <style>
        .gallery-image{
            margin-top: 2px;
            margin-bottom: 2px;
        }
        .image-gallery-cont{
            display: inline;
        }
    </style>
    <!-- Alertify Theme -->
    <link rel="stylesheet" href="{{ url('/js/alertifyjs/css/alertify.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/js/alertifyjs/css/themes/default.min.css') }}" />

    @yield('resources')




</head>

<body>


<!--Barra de navegación-->
@include('layouts/partials/navbarApp')
        <!-- #############/Barra de navegación##############-->
<!--Barra lateral-->
@include('layouts/partials/sidebarApp')
        <!-- #############/Barra lateraln##############-->


<section id="container">


    @yield('content')
            <!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2015 -
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->

</section>




<!-- js placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="/js/common-scripts.js"></script>
<script type="text/javascript" src="{{ url('/js/alertifyjs/alertify.min.js') }}"></script>
<script type="text/javascript" src="/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="/js/sparkline-chart.js"></script>
<script src="/js/zabuto_calendar.js"></script>

{{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
        {{--var unique_id = $.gritter.add({--}}
            {{--// (string | mandatory) the heading of the notification--}}
            {{--title: 'Welcome to Dashgum!',--}}
            {{--// (string | mandatory) the text inside the notification--}}
            {{--text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',--}}
            {{--// (string | optional) the image to display on the left--}}
            {{--image: '/img/ui-sam.jpg',--}}
            {{--// (bool | optional) if you want it to fade out on its own or just sit there--}}
            {{--sticky: true,--}}
            {{--// (int | optional) the time you want it to be alive for before fading out--}}
            {{--time: '',--}}
            {{--// (string | optional) the class name you want to apply to that specific message--}}
            {{--class_name: 'my-sticky-class'--}}
        {{--});--}}

        {{--return false;--}}
    {{--});--}}
{{--</script>--}}

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>

<script>
    $(".delete-form").submit(function (event) {
        var x = confirm("¿Está seguro de que desea borrarlo?");
        if (x) {
            return true;
        }
        else {
            event.preventDefault();
            return false;
        }
    });

</script>
<script src="/js/photoswipe/photoswipe.min.js"></script>
<script src="/js/photoswipe/photoswipe-ui-default.min.js"></script>
@yield('scripts')


</body>
</html>