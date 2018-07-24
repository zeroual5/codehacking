<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>For You</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/libs.css')}}" rel="stylesheet">--}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    @yield('styles')
</head>
<body id="app-layout" class="bg-body">

    {{--web icon (header)--}}
    <header class="center-block bg-header pt-10 pb-20 text-center">
        <div class="center-block">
            <h1 class="mt-0 mb-0 text-primary">For You</h1>
        </div>
    </header>

    {{--navbar--}}
    <nav class="navbar navbar-default navbar-static-top bg-navbar border-b-0 ml-m-1em mr-m-1em">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>

            </div>
        </div>
    </nav>

    {{--content--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                {{--adsense banner--}}
                <div class="row display-block bg-info">
                    <script async = "async" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-9571765298321805"
                         data-ad-slot="9303264284"
                         data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="row">
                    @yield('content')
                </div>

                {{--popular posts--}}
                <div class="row mt-20px">
                    <h4 class="mt-0 mb-5px text-white">popular posts</h4>
                    <div class="row  mt-10px popular-posts">
                        @yield('popularPosts')
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{--footer--}}
    <div class="bg-header footer text-white" style="height: 40px">
        <div class="col-md-8 col-md-offset-2 text-center">
            <p>
                {{--Terms and Conditions--}}
                <a href="#">Conditions </a> |
                <a href="#">Privacy Policy </a> |
                <a href="#">Connect Us </a>
            </p>
        </div>
    </div>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('scripts')
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
