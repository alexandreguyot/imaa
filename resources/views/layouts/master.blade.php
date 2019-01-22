<!DOCTYPE html>
    <html lang="fr">
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge"> 
        @yield('description') 
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ URL::asset('web/css/reset.css') }}" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <script type="text/javascript" src="{{ URL::asset('web/js/plugins/jquery-3.3.1.min.js') }}" ></script>
        <link rel="stylesheet/less" type="text/css" href="{{ URL::asset('web/less/styles.less') }}" />

		@yield('styles')
    </head>
    <body>
        @include('layouts._header')
        @yield('content') 
        @include('layouts._footer')

        @yield('scripts') 
        <script type="text/javascript" src="{{ URL::asset('web/js/app.js') }}"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script>
    </body>
</html>