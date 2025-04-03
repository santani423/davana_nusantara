<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Davana Nusantara</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('vitour/app/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vitour/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vitour/app/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vitour/app/css/textanimation.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('vitour/assets/images/favico.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('vitour/assets/images/favico.png') }}">

   
    @yield('css')
</head>

<body class="body header-fixed counter-scroll">

    <!-- <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div> -->

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="main-header flex">
                <!-- Header Lower -->
                <div id="header">

                    <div class="header-lower">
                        <div class="tf-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-container flex justify-space align-center">
                                        <!-- Logo Box -->
                                        <div class="mobile-nav-toggler mobie-mt mobile-button">
                                            <i class="icon-Vector3"></i>
                                        </div>
                                        <div class="logo-box">
                                            <div class="logo">
                                                <a href="index.html">
                                                    <img src="{{ asset('assets\logo\logo.svg') }}" alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix"
                                                    id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">

                                                        <li><a href="#">Beranda</a></li>
                                                        <li><a href="{{route('paket-tur-umum.index')}}">Paket Tur Umum</a></li>
                                                        <li><a href="#">Paket Educational Trip</a></li>
                                                        <li><a href="#">Ruang Media</a></li>
                                                        <li><a href="#">Tentang Kami</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- Main Menu End-->
                                        </div>
                                        <div class="header-account flex align-center">
                                            <div class="language">
                                                <div class="nice-select" tabindex="0">
                                                    <img src="./assets/images/page/language.svg" alt=""><span
                                                        class="current">English</span>
                                                    <ul class="list">
                                                        <li data-value class="option selected"><img
                                                                src="./assets/images/page/language.svg"
                                                                alt="">English
                                                        </li>
                                                        <li data-value="Vietnam" class="option"><img
                                                                src="./assets/images/page/language.svg"
                                                                alt="">Vietnam
                                                        </li>
                                                        <li data-value="German" class="option"><img
                                                                src="./assets/images/page/language.svg"
                                                                alt="">German
                                                        </li>
                                                        <li data-value="Russian" class="option"><img
                                                                src="./assets/images/page/language.svg"
                                                                alt="">Russian
                                                        </li>
                                                        <li data-value="Canada" class="option"><img
                                                                src="./assets/images/page/language.svg"
                                                                alt="">Canada
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="currency">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">USD</span>
                                                    <ul class="list">
                                                        <li data-value class="option selected">USD</li>
                                                        <li data-value="vnd" class="option">VND</li>
                                                        <li data-value="ero" class="option">ERO</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="search-mobie relative">
                                                <div class="dropdown">
                                                    <a type="button" class="show-search" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-Vector5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu top-search">
                                                        <form action="/" id="search-bar-widget">
                                                            <input type="text" placeholder="Search here...">
                                                            <button type="button"><i
                                                                    class="icon-search-2"></i></button>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="register">
                                                <ul class="flex align-center">
                                                    <li>
                                                        <a href="login.html" class="flex-three">
                                                            <img src="./assets/images/page/avata.jpg" alt="image">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="./assets/images/page/fl1.png" alt="" class="fly-ab">
                    </div>
                </div>

                <!-- End Header Lower -->
                <a href="#" class="header-sidebar flex-three" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="icon-Bars"></i>
                </a>

                <!-- Mobile Menu  -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="index.html">
                                <img src="assets/images/logo2.png" alt=""></a></div>
                        <div class="bottom-canvas">
                            <div class="menu-outer">
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->

            </header>
            <!-- End Main Header -->
            <main id="main">
                @yield('content')
 
            </main>

            <footer class="footer footer-style1">
                <div class="tf-container">
                    <div class="footer-main">
                        <div class="row">
                            <div class="col-md-3">

                                <div class="logo-footer">
                                    <img src="{{ asset('assets/logo/logo1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">

                                <h5 class="title">Headquarter</h5>
                                <p class="des-footer">The world’s first and largest digital market
                                    for crypto collectibles and non-fungible
                                </p>
                                <ul class="footer-info">
                                    <li class="flex-three">
                                        <i class="icon-noun-mail-5780740-1"></i>
                                        <p>Info@webmail.com</p>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-Group-9"></i>
                                        <p>684 555-0102 490</p>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-Layer-19"></i>
                                        <p>6391 Elgin St. Celina, NYC 10299</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">

                                <h5 class="title">Navigation</h5>
                                <ul class="footer-menu text-white">
                                    <li>
                                        <a href="#" class="text-white">Home</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Paket Tour Umum</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Paket Educational Trip</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Ruang Media</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                
                                    <h5 class="title">Get in touch</h5>
                                    <h3 class="text-white">021 345 678 910</h3>
                                    <ul class="social-ft flex-three">
                                        <li>
                                            <a href="#">
                                                <i class="icon-icon-2"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-8"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row footer-bottom">
                        <div class="col-md-12 text-center">
                            <p class="copy-right">Copyright © 2024 by <a href="#"
                                    class="text-main">Themesflat.</a> All
                                Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->

    {{-- <a id="scroll-top" class="button-go"></a> --}}
    <a href="https://wa.me/yourphonenumber" target="_blank">
        <img src="{{ asset('assets/item/logos_whatsapp-icon.png') }}" alt="WhatsApp" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000; width: 60px; height: 60px;">
    </a>

    <!-- Javascript -->
    <script src="{{ asset('vitour/app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vitour/app/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vitour/app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vitour/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vitour/app/js/swiper.js') }}"></script>
    <script src="{{ asset('vitour/app/js/plugin.js') }}"></script>
    <script src="{{ asset('vitour/app/js/count-down.js') }}"></script>
    <script src="{{ asset('vitour/app/js/countto.js') }}"></script>
    <script src="{{ asset('vitour/app/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('vitour/app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vitour/app/js/price-ranger.js') }}"></script>
    <script src="{{ asset('vitour/app/js/textanimation.js') }}"></script>
    <script src="{{ asset('vitour/app/js/wow.min.js') }}"></script>
    <script src="{{ asset('vitour/app/js/shortcodes.js') }}"></script>
    <script src="{{ asset('vitour/app/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
