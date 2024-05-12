<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Software Site</title>

    <!-- Font Awesome Icons -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="{{ asset('google-fonts/fontface.css.tpl') }}" rel="stylesheet">
    <link href="{{ asset('google-fonts/index.js') }}" rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Theme CSS - Includes Software Site -->
    <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Software Site</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#download">download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Free Software Site
                        Themes
                    </h1>
                    <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Software Site can help you build better websites
                        using the Software Site framework! Just download a theme and start customizing, no strings
                        attached!
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    @include('components.about')

    <!-- Services Section -->
    @include('components.services')

    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                {{-- Item-1 --}}
                @include('components.portfolio', ['img' => '1'])
                {{-- Item-2 --}}
                @include('components.portfolio', ['img' => '2'])
                {{-- Item-3 --}}
                @include('components.portfolio', ['img' => '3'])
                {{-- Item-4 --}}
                @include('components.portfolio', ['img' => '4'])
                {{-- Item-5 --}}
                @include('components.portfolio', ['img' => '5'])
                {{-- Item-6 --}}
                @include('components.portfolio', ['img' => '6'])
            </div>
        </div>
    </section>

    <!--download Section -->
    @include('components.download')

    <!-- Contact Section -->
    @include('components.contact')

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2024 - Software Site</div>
        </div>
    </footer>

    <!--  JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}"></script>

</body>

</html>
