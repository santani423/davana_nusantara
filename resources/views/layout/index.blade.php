<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title id="title">Daffana Nusantara</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo/logo1.png') }}">
    {{-- <link rel="icon" type="image/x-icon" id="favico" href="{{ asset('assets/logo/logo1.png') }}"> --}}
    <!-- Favicon and Touch Icons  -->
    {{-- <link rel="shortcut icon" id="favico" href="{{ asset('assets\logo\logo.svg') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" id="favico2" href="{{ asset('assets\logo\logo.svg') }}"> --}}
    <link rel="stylesheet" href="{{ asset('vitour/app/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vitour/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vitour/app/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vitour/app/css/textanimation.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
   
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
                                    <div class="inner-container flex justify-between align-center">
                                        <!-- Logo Box -->
                                        <div class="mobile-nav-toggler mobie-mt mobile-button">
                                            <i class="icon-Vector3"></i>
                                        </div>
                                        <div class="logo-box" style="margin-right: auto; text-align: left;">
                                            <div class="logo">
                                                <a href="{{route('home')}}">
                                                    <img src="{{ asset('assets\logo\logo.svg') }}" alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center" style="margin: 0 auto;">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix"
                                                    id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                    <li><a href="{{route('home')}}" style="text-decoration: none;">Beranda</a></li>
                                                    <li><a href="{{route('paket.index')}}" style="text-decoration: none;">Paket Tur</a></li>
                                                    {{-- <li><a href="{{route('ruang-media.index')}}" style="text-decoration: none;">Paket Educational Trip</a></li> --}}
                                                    <li><a href="{{route('ruang-media.index')}}" style="text-decoration: none;">Ruang Media</a></li>
                                                    <li><a href="{{route('about.as')}}" style="text-decoration: none;">Tentang Kami</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            
                                            <!-- Main Menu End-->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>

                <!-- End Header Lower -->
          

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
                            <div class="col-md-2"> 
                                <div class="logo-footer" id ="logo-footer">
                                  
                                </div>
                            </div>
                            <div class="col-md-4">

                                <h5 class="title">Alamat </h5>
                                <p class="des-footer text-white" id="addres"> 
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
                            <div class="col-md-2">

                                <h5 class="title">Navigation</h5>
                                <ul class="footer-menu text-white">
                                    <li>
                                        <a href="/"  style="text-decoration: none;" class="text-white">Home</a>
                                    </li>
                                    <li>
                                        <a href="#"  style="text-decoration: none;" class="text-white">Paket</a>
                                    </li>
                                    {{-- <li>
                                        <a href="#" class="text-white">Paket Educational Trip</a>
                                    </li> --}}
                                    <li>
                                        <a href="#"  style="text-decoration: none;" class="text-white">Ruang Media</a>
                                    </li>
                                    <li>
                                        <a href="#"  style="text-decoration: none;" class="text-white">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                
                                    <h5 class="title">Get in touch</h5>
                                    <h3 class="text-white" id="phone">021 345 678 910</h3>
                                   <div id="email" class="text-white" ></div>
                                    <ul class="social-ft flex-three mt-4" style="gap: 15px; display: flex;">
                                        <li id="instagram"></li> 
                                        <li id="tiktok"></li> 
                                        <li id="facebook"></li> 
                                        <li id="youtube"></li> 
                                    </ul>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row footer-bottom">
                        <div class="col-md-12 text-center">
                            <p class="copy-right">Copyright © 2025 Daffana Nusantara - Powered b  <a href="https://toffeltechasia.com" class="text-main">Toffel Tech Asia</a></p>
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
 
    <div id="whatsapp"></div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.min.js" integrity="sha384-Re460s1NeyAhufAM5JwfIGWosokaQ7CH15ti6W5Y4wC/m4eJ5opJ2ivohxVM05Wd" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Initialize the nice select plugin
            function show(p) {
            $.ajax({
                url: '{{ route('api.setting.index') }}',
                method: 'GET',
                 
            }).done(function(response) {
                
                // console.log(response);
                let settings = response.data;
                let addres = document.getElementById('addres');
                addres.innerHTML = settings.address || '-';
                let phone = document.getElementById('phone');
                phone.innerHTML = settings.phone || '-';
                let email = document.getElementById('email');
                email.innerHTML = ` <a href="mailto:${settings.email}" class="flex-three text-white" style="text-decoration: none; color: black;">
                                             <img src="{{asset('assets/item/email.png')}}" style="width: 30px;" class="ml-2" alt="">   
                                        ${settings.email || '-'} 
                                    </a>`;
                let instagram = document.getElementById('instagram');
                instagram.innerHTML = ` <a href="mailto:${settings.instagram}" class="flex-three text-white" style="text-decoration: none; color: black;">
                                             <img src="{{asset('assets/item/instagram.png')}}" style="width: 30px;" class="ml-2" alt="">   
                                        
                                    </a>`;
                let tiktok = document.getElementById('tiktok');
                tiktok.innerHTML = ` <a href="mailto:${settings.tiktok}" class="flex-three text-white" style="text-decoration: none; color: black;">
                                             <img src="{{asset('assets/item/tiktok.png')}}" style="width: 30px;" class="ml-2" alt="">   
                                        
                                    </a>`;
                let facebook = document.getElementById('facebook');
                facebook.innerHTML = ` <a href="mailto:${settings.facebook}" class="flex-three text-white" style="text-decoration: none; color: black;">
                                             <img src="{{asset('assets/item/facebook.png')}}" style="width: 30px;" class="ml-2" alt="">   
                                        
                                    </a>`;
                let youtube = document.getElementById('youtube');
                youtube.innerHTML = ` <a href="mailto:${settings.youtube}" class="flex-three text-white" style="text-decoration: none; color: black;">
                                             <img src="{{asset('assets/item/youtube.png')}}" style="width: 40px;" class="ml-2" alt=""> 
                                    </a>`;
                let whatsapp = document.getElementById('whatsapp');
                let whatsappNumber = settings.whatsapp.startsWith('0') ? '62' + settings.whatsapp.substring(1) : settings.whatsapp;
                whatsapp.innerHTML = `    <a href="https://wa.me/${whatsappNumber}" target="_blank">
                    <img src="{{ asset('assets/item/logos_whatsapp-icon.png') }}" alt="WhatsApp" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000; width: 60px; height: 60px;">
                </a>`;
                let logofooter = document.getElementById('logo-footer');
                logofooter.innerHTML = `<img src="{{ asset('${settings.logo}') }}" alt="">`;
              
                let favico = document.getElementById('favico');
                favico.href =  '{{ asset('${settings.favicon}') }}';
                let favico2 = document.getElementById('favico2');
                favico2.href =  '{{ asset('${settings.favicon}') }}';

                

                
            }).fail(function(xhr, status, error) {
                console.error('Error:', error);
            });
        }

        show(1); // Call the function to load data on page load
        });
    </script>
    @yield('script')
</body>

</html>
