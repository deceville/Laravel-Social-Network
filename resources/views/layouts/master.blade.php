<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/nivo-lightbox-theme/default/default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/nivo-lightbox.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.min.css') }}">
    </head>
    <body>
    	@include('includes.header')
    		@yield('content')
        @include('includes.footer')
    </body>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ URL::to('src/js/app.js') }}"></script>
    <!-- Core JavaScript Files -->
    <script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('src/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('src/js/jquery.easing.min.js') }}"></script> 
    <script src="{{ URL::to('src/js/classie.js') }}"></script>
    <script src="{{ URL::to('src/js/gnmenu.js') }}"></script>
    <script src="{{ URL::to('src/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ URL::to('src/js/nivo-lightbox.min.js') }}"></script>
    <script src="{{ URL::to('src/js/stellar.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::to('src/js/custom.js') }}"></script>
</html>
