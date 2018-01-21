<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prodigy Management</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        body{background-color:#ebe4d6;}
    </style>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.css">

    <link rel="apple-touch-icon" href="{{ asset("/images/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/images/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/images/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ asset("/images/manifest.json") }}">
    <link rel="mask-icon" href="{{ asset("/images/safari-pinned-tab.svg") }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Prodigy Management
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                           
                        @else


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Slider Management<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                     <li><a href="/addSlider">Add Slider</a></li>
                                     <li><a href="/removeSlider">Remove Slider</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Product Management<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                     <li><a href="/addProduct">Add a Product</a></li>
                                     <li><a href="/removeProduct">Edit/Remove a Product</a></li>
                                     <li><a href="/groupVariant">Add Product Size Variant</a></li>
                                     {{-- <li><a href="/removeProductVariant">Remove Product Size Variant</a></li> --}}
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Order Management<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/viewOrders">View Orders</a></li>
                                    <li><a href="/archivedOrders">View Archived Orders</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Content Management<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="{{ asset("/js/tinymce/tinymce.min.js") }}"></script>

    <script>
      tinymce.init({
      selector: '#textarea, #textarea2, #textarea3',
      height: 150,
      menubar: false,
      branding: false,
      // content_css: [
      //   '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      //   '//www.tinymce.com/css/codepen.min.css']
    
    });
    </script>

    @include('sweetalert::cdn')
    @include('sweetalert::view')

    
</body>
</html>
