<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('judul') | Home</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700')}}" rel="stylesheet")>

        <!-- Vendor Styles -->
        <link href="{{asset('compro/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('compro/css/animate.css')}}" rel="stylesheet") type="text/css"/>
        <link href="{{asset('compro/vendor/themify/themify.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('compro/vendor/scrollbar/scrollbar.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('compro/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('compro/vendor/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('compro/vendor/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{asset('compro/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('compro/css/global/global.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('compro/img/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('compro/img/apple-touch-icon.png')}}">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="{{url('/')}}" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="{{asset('compro/img/logo.png')}}" alt="Megakit Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="{{('compro/img/logo-dark.png')}}" alt="Megakit Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">

                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('contact')}}">Contacts</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('team')}}">Team</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('about')}}">About</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        @yield('konten')

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{url('/')}}">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{url('/about')}}">About</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Twitter</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Megakit</h3>
                            <p class="g-color--white-opacity">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="{{asset('compro/img/logo.png')}}" alt="Megakit Logo">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-xs-12 g-text-left--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="{{('/')}}">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="{{asset('compro/vendor/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/jquery.migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/jquery.smooth-scroll.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/jquery.back-to-top.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/swiper/swiper.jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/waypoint.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/counterup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/jquery.parallax.min.js')}}"></script>
        <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U')}}"></script>
        <script type="text/javascript" src="{{asset('compro/vendor/jquery.wow.min.js')}}"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="{{asset('compro/js/global.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/header-sticky.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/counter.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/portfolio-3-col.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/google-map.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('compro/js/components/wow.min.js')}}"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
