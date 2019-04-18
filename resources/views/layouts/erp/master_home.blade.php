<!DOCTYPE html>
    <html lang="fr">
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge"> 
        @yield('description') 
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- Custom CSS -->
        <link href="{{  URL::asset('web/css/erp/select2.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc'></script>
        <script type="text/javascript" src="{{  URL::asset('web/js/erp/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('web/js/erp/master.js') }}"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=xlj1knxdsunh55klu129afcchi834bs5o3m483tvi6ocds5j"></script>


        <link rel="stylesheet/less" type="text/css" href="{{ URL::asset('web/less/styles.less') }}" />
        
		@yield('styles')
    </head>
    <body class="erp overflow">
        <div class="animated fadeIn">
            @yield('content') 
        </div>

        @yield('scripts') 
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script>
    </body>
</html>