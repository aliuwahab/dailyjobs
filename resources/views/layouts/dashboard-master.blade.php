
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.dashboard.stylesheet')

</head>

<body>

<div>
        @include('partials.dashboard.menu')
</div>



<!-- Right Panel -->
<div id="right-panel" class="right-panel">



    <div>
        @include('partials.dashboard.header')
    </div>




    <!-- Content -->
    <div class="content">
            @yield('content')
    </div>
    <!-- /.content -->



    <div class="clearfix"></div>
    <!-- Footer -->


    <div>
        @include('partials.dashboard.footer')
    </div>

</div>
<!-- /#right-panel -->



<!-- Scripts -->
<div id="scripts">
    @include('partials.dashboard.scripts')
</div>

</body>
</html>
