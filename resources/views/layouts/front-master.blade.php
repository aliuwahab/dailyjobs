
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>


    {{--All stylesheets for the front side--}}
    @include('partials.front.stylesheet')


</head>

<body>

@include('partials.front.header')

<main class="container" role="main">
    
    @yield('content')

</main>


@include('partials.front.footer')




{{--All Script files for the front side--}}
@include('partials.front.scripts')
</body>
</html>

