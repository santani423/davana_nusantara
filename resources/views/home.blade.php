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

    <style>
        .bg-awan {
            background-color: transparent;
            background-size: cover;
            background-position: center;
            margin-top: -240px;
        }

        .span1 {
            background-color: transparent;
            margin-top: -220px;
        }

        .card-span1 {
            width: 80%;
            height: 50px;
            border-radius: 15px;
            background-color: #FFD859;
        }

        .card-span1-img {
            z-index: 1;
            top: -200px;
        }

        .card-span1-btn {
            background-color: #DF2595;
            color: white;
            top: 80px;
            left: 140px;
            z-index: 3;
            position: relative;
        }

        @media (max-width: 576px) {
            .bg-awan {
                margin-top: -50px;
            }

            .span1 {
                margin-top: -30px;
            }

            .card-span1 {
 
                min-height: 1000px;
            }

            .card-span1-img {
                top: 0;
            }

            .card-span1-btn {

                top: 430px;
                left: 0px;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .bg-awan {
                margin-top: -90px;
            }

            .span1 {
                margin-top: -150px;
            }

            .card-span1 {

                min-height: 700px;
            }

            .card-span1-img {
                top: 0;
            }

            .card-span1-btn {

                top: 80px;
                left: 140px;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .bg-awan {
                margin-top: -130px;
            }

            .span1 {
                margin-top: -90px;
            }

            .card-span1 {

                min-height: 630px;
            }

            .card-span1-img {
                top: 0;
            }

            .card-span1-btn {

                top: 80px;
                left: 140px;
            }
        }

        @media (min-width: 993px) {
            .bg-awan {
                margin-top: -195px;
            }

            .span1 {
                margin-top: -20px;
            }

            .card-span1 { 
                min-height: 480px;
            }

            .card-span1-img {
                top: -230px;
            }

            .card-span1-btn {

                top: 80px;
                left: 140px;
            }
        }
    </style>

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
                                                        <li><a href="#">Paket Tur Umum</a></li>
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


                <!-- Widget Slider -->
                <section class="slider relative">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="slider-home1 relative overflow-hidden swiper-slide"
                                    style="background-image: url({{ asset('assets/slide/slide.png') }}); background-size: cover; background-position: center;">

                                    <div class="slider-content">
                                        <div class="tf-container">
                                            <div class="row">
                                                <div class="col-lg-8">

                                                    <h1 class="title-slide text-white mb-32 fadeInDown wow">5D Japan
                                                        Explore Raja Ampat

                                                    </h1>
                                                    <p class="des text-white mb-45 fadeInDown wow">Welcome to our Print
                                                        128
                                                        website! We are
                                                        a
                                                        professional and reliable printing
                                                        company that offers a wide range of printing services to
                                                    </p>
                                                    <div class="btn-group">

                                                        <a href="#" class="btn btn-danger btn-lg rounded-pill">
                                                            <p class="btn-main-text">Descover More</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-lg-8">


                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="new-york-tab-pane"
                                                            role="tabpanel" aria-labelledby="new-york-tab"
                                                            tabindex="0">
                                                            <div class="row">

                                                                <div class="col-6 col-sm-6 col-lg-3 mt-4">
                                                                    <img src="{{ asset('assets/slide/slide.png') }}"
                                                                        alt="" width="100%" height="100%">
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-lg-3 mt-4">
                                                                    <img src="{{ asset('assets/slide/slide.png') }}"
                                                                        alt="" width="100%" height="100%">
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-lg-3 mt-4">
                                                                    <img src="{{ asset('assets/slide/slide.png') }}"
                                                                        alt="" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor

                        </div>
                        <div class="btn-nex-prev">
                            <div class="swiper-button-next  next-home1"></div>
                            <div class="swiper-button-prev  prev-home1"></div>
                        </div>
                    </div>
                </section>
                <!-- Widget Slider -->

                <section class="team-member-page pd-main">
                    <div class="tf-container">
                        <div class="row mb-40">
                            <div class="col-lg-12">
                                <div class="center m0-auto w-text-heading">

                                    <h3 class="title-heading ">Jelajahi setiap sudut Indonesia bersama Daffana
                                        Nusantara </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mx-auto mb-3">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/slide/slide.png') }}" alt="" class="rounded"
                                        style="border-radius: 15px;">
                                    <div class="position-absolute bottom-0 start-0 text-white p-2">
                                        <h5 class="text-white">Title 1</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mx-auto">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/slide/slide.png') }}" alt=""
                                                class="rounded" style="border-radius: 15px;">
                                            <div class="position-absolute bottom-0 start-0 text-white p-2">
                                                <h5 class="text-white">Title 2</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/slide/slide.png') }}" alt=""
                                                class="rounded" style="border-radius: 15px;">
                                            <div class="position-absolute bottom-0 start-0 text-white p-2">
                                                <h5 class="text-white">Title 3</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/slide/slide.png') }}" alt=""
                                                class="rounded" style="border-radius: 15px;">
                                            <div class="position-absolute bottom-0 start-0 text-white p-2">
                                                <h5 class="text-white">Title 4</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/slide/slide.png') }}" alt=""
                                                class="rounded" style="border-radius: 15px;">
                                            <div class="position-absolute bottom-0 start-0 text-white p-2">
                                                <h5 class="text-white">Title 5</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="#" class="btn btn-success btn-lg rounded-pill">Explore Now</a>
                            </div>
                        </div>

                    </div>
                </section>





                <!-- Widget Offer Package -->

                <!-- Widget Counter -->
                <section class="relative"
                    style="background-color: #00B0EF; border-radius: 50% 50% 0 0; margin-bottom: 0px;">
                    <div class="tf-container">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="center m0-auto w-text-heading mb-40">
                                    <p class="text-white mt-5">ABOUT DAFFANA NUSANTARA</p>
                                    <p class="text-white"><strong class="fw-bold">Daffana Nusantara membuat proses
                                            traveling-mu serba simpel dan praktis, sehingga kamu bisa order tiket
                                            pesawat, order room hotel, dan order tiket tur jalan-jalan keliling
                                            Indonesia cukup dari gadgetmu.</strong></p>
                                    <div class="mt-4 text-center">
                                        <a href="#" class="btn btn-lg rounded-pill"
                                            style="border: 2px solid white; background-color: transparent; color: white;">Explore
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section style="background-color: #00B0EF; margin-top: -60px;">
                    <div class="tf-container">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="center m0-auto w-text-heading mb-40">

                                    <img src="{{ asset('assets/item/group126.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section style="background-color: #00B0EF; margin-top: -60px;">
                    <div class="tf-container">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="center m0-auto w-text-heading mb-40">
                                    <p class="text-white mt-5">TOURS PACKAGE</p>
                                    <h3 class="text-white">Telusuri beragam pilihan destinasi liburan</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 relative">
                                <div class="swiper serviceSwiper relative overflow-hidden pb-60">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i <= 10; $i++)
                                            <div class="swiper-slide">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('assets/item/group126.png') }}"
                                                        class="card-img-top"
                                                        alt="{{ asset('assets/item/group126.png') }}">
                                                    <div class="card-body">
                                                        <p class="card-text d-flex align-items-center text-muted">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.166 8.94c-.26.35-.578.77-.927 1.23-.774.99-1.675 2.06-2.239 2.727a.58.58 0 0 1-.86 0c-.564-.667-1.465-1.737-2.239-2.727a31.634 31.634 0 0 1-.927-1.23C4.478 7.98 4 6.92 4 6a4 4 0 1 1 8 0c0 .92-.478 1.98-1.834 2.94zM8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                                            </svg>
                                                            Jawa Barat
                                                        </p>

                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text d-flex align-items-center text-muted">
                                                            Jawa Barat
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <h5 style="color: orange;">IDR 1,76jt</h5>
                                                                <h6 style="color: orange;">/person</h6>
                                                            </div>
                                                            <div
                                                                class="col-4 d-flex justify-content-center align-items-center">
                                                                <img src="{{ asset('assets/item/group74.svg') }}"
                                                                    alt="" style="width: 50px; height: 50px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/item/blek.png') }}" alt=""
                        style="width: 100%; max-width: 100%;">
                </section>

                <section class="relative bg-awan">

                    <img src="{{ asset('assets/item/awan-full2.png') }}" alt=""
                        style="width: 100%; max-width: 100%;">

                </section>
                <section class="relative span1">
                    <div class="container d-flex justify-content-center">
                        <div class="card card-span1">
                            <div class="card-body m-3">
                                <div class="row">
                                    <div class="col-md-6">

                                        <h3 class="card-title">Hi <span style="color: #DF2595;">travelers</span>, Yuk
                                            gabung bersama dengan lainnya di
                                            Instagram!</h3>
                                        <p>Bagikan momen jalan-jalan ke tempat favoritmu bersama Daffana Nusantara
                                            dengan hashtag <span style="color: #DF2595;">#daffananusantara</span> </p>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <img src="{{ asset('assets/item/Rectangle.png') }}" alt=""
                                            class="position-absolute  card-span1-img start-50 translate-middle-x">
                                    </div>
                                    <div class="col-md-6 position-relative d-flex justify-content-end">
                                        <a href="#" class="btn btn-lg rounded-pill card-span1-btn">Follow
                                            dn_tour_travel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Widget Counter -->
                <!-- Widget Service -->
                <section class="widget-service">
                    <div class="tf-container">


                    </div>
                </section>
                <!-- Widget activities -->
                <section class="relative tf-widget-activities pd-main overflow-hidden">
                    <img src="{{ asset('assets/item/Group81.png') }}" alt="image" class="mask-top">
                    <div class="tf-container">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="center m0-auto w-text-heading mb-40">
                                    <p class="text-black mt-5">TOURS PACKAGE</p>
                                    <h3 class="text-black">Telusuri beragam pilihan destinasi liburan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Widget activities -->
                <!-- Widget Service -->
                <!-- Widget destination -->
                <section class="widget-destination">
                    <div class="tf-container">

                        <div class="grid-three-destination">
                            <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.1s">
                                <a href="single-destination.html" class="destination-imgae">
                                    <span class="tour">3 tours</span>
                                    <img src="./assets/images/destination/list.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <span class="nation">Switzerland</span>
                                    <div class="flex-two btn-destination">
                                        <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                        <a href="single-destination.html" class="flex-five btn-view">
                                            <i class="icon-Vector-32"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.2s">
                                <a href="single-destination.html" class="destination-imgae">
                                    <span class="tour">7 tours</span>
                                    <img src="./assets/images/destination/list1.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <span class="nation">Thailand</span>
                                    <div class="flex-two btn-destination">
                                        <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                        <a href="single-destination.html" class="flex-five btn-view">
                                            <i class="icon-Vector-32"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.3s">
                                <a href="single-destination.html" class="destination-imgae">
                                    <span class="tour">9 tours</span>
                                    <img src="./assets/images/destination/list2.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <span class="nation">united kingdom</span>
                                    <div class="flex-two btn-destination">
                                        <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                        <a href="single-destination.html" class="flex-five btn-view">
                                            <i class="icon-Vector-32"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.4s">
                                <a href="single-destination.html" class="destination-imgae">
                                    <span class="tour">4 tours</span>
                                    <img src="./assets/images/destination/list3.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <span class="nation">Hongkong</span>
                                    <div class="flex-two btn-destination">
                                        <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                        <a href="single-destination.html" class="flex-five btn-view">
                                            <i class="icon-Vector-32"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.5s">
                                <a href="single-destination.html" class="destination-imgae">
                                    <span class="tour">3 tours</span>
                                    <img src="./assets/images/destination/list4.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <span class="nation">Sri lanka</span>
                                    <div class="flex-two btn-destination">
                                        <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                        <a href="single-destination.html" class="flex-five btn-view">
                                            <i class="icon-Vector-32"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.6s">
                                <a href="single-destination.html" class="destination-imgae">
                                    <span class="tour">3 tours</span>
                                    <img src="./assets/images/destination/list.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <span class="nation">Singapore</span>
                                    <div class="flex-two btn-destination">
                                        <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                        <a href="single-destination.html" class="flex-five btn-view">
                                            <i class="icon-Vector-32"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Widget destination -->

            </main>

            <footer class="footer footer-style1">
                <div class="tf-container">
                    <div class="footer-main">
                        <div class="footer-logo">
                            <div class="logo-footer">
                                <img src="./assets/images/logo2.png" alt="">
                            </div>
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
                        <div class="footer-service">
                            <h5 class="title">Services Req</h5>

                            <ul class="footer-menu">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="team.html">Our Team</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog Insights</a>
                                </li>
                                <li>
                                    <a href="contact/">Contact</a>
                                </li>
                            </ul>

                        </div>
                        <div class="footer-gallery">
                            <h5 class="title">Gallery</h5>

                            <div class="gallery-img">
                                <a href="./assets/images/gallery/gl1.jpg" data-fancybox="gallery">
                                    <img src="./assets/images/gallery/gl1.jpg" alt="image gallery">
                                </a>
                                <a href="./assets/images/gallery/gl2.jpg" data-fancybox="gallery">
                                    <img src="./assets/images/gallery/gl2.jpg" alt="image gallery">
                                </a>
                                <a href="./assets/images/gallery/gl3.jpg" data-fancybox="gallery">
                                    <img src="./assets/images/gallery/gl3.jpg" alt="image gallery">
                                </a>
                                <a href="./assets/images/gallery/gl4.jpg" data-fancybox="gallery">
                                    <img src="./assets/images/gallery/gl4.jpg" alt="image gallery">
                                </a>
                                <a href="./assets/images/gallery/gl5.jpg" data-fancybox="gallery">
                                    <img src="./assets/images/gallery/gl5.jpg" alt="image gallery">
                                </a>
                                <a href="./assets/images/gallery/gl6.jpg" data-fancybox="gallery">
                                    <img src="./assets/images/gallery/gl6.jpg" alt="image gallery">
                                </a>
                            </div>

                        </div>
                        <div class="footer-newsletter">
                            <h5 class="title">Newsletter</h5>
                            <form action="/" id="footer-form">
                                <div class="input-wrap flex-three">
                                    <input type="email" placeholder="Enter Email Adress">
                                    <button type="submit"><i class="icon-paper-plane"></i></button>
                                </div>
                                <div class="check-form flex-three">
                                    <i class="icon-Vector-121"></i>
                                    <p>I agree to all your terms and policies</p>
                                </div>

                            </form>
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

                    <div class="row footer-bottom">
                        <div class="col-md-6">
                            <p class="copy-right">Copyright © 2024 by <a href="#"
                                    class="text-main">Themesflat.</a> All
                                Rights Reserved</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social flex-six">
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
                                        <i class="icon-icon_03"></i>
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
            </footer>

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->

    <a id="scroll-top" class="button-go"></a>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="logo-canvas">
                <img src="./assets/images/logo.png" alt="image">
            </div>
            <p class="des">The world’s first and largest digital market
                for crypto collectibles and non-fungible
            </p>
            <ul class="canvas-info">
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
            <ul class="social flex-three">
                <li>
                    <a href="#">
                        <i class="icon-icon-2"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-icon-1"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-8"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-6"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>

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

</body>

</html>
