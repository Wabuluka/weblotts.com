<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weblotts | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!--font awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--css -->
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-md fixed-top navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">weblotts.com</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            .
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Work</a>
                            </li>
                            .
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            .
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @show
         @yield('content')

        @section('footer')
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p class="small">We are devoted to customer satisfaction and willing to go back to the drawing
                                 board if that's the way we have to do it. Get in touch with us today and let's start a journey to your dream web app.
                                    <a href="">connect with us</a>
                            </p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                .
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Our Work</a>
                                </li>
                                .
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                .
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="small">&copy; 2018</p>
                        </div>
                    </div>
                </div>
            </footer>
        @show
        
    </body>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</html>
