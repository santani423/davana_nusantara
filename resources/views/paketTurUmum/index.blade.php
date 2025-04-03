@extends('layout.index')

@section('content')
    <section class="breadcumb-section" style="background-image: url('{{ asset('assets/item/Maskgroup.png') }}'); background-size: cover; background-position: center;">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Paket Tour Umum</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>Paket Tour Umum</span></li>
                    </ul>
                </div>
            </div>
        </div> 
    </section>
    <section class="profile-dashboard">
      
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Semua</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Jawa Barat</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Jawa Tengah</a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link" href="#">Jawa Timur</a>
                      </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bali</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sumatra</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kalimantan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sulawesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Papua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Luar Negeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promo</a>
                        </li>
                        
                    </ul>
                  </div>
                </div>
              </nav>
              <hr>
            <div class="row">
                @for ($i = 0; $i <= 20; $i++)
                <div class="col-md-3 mb-3">
                    <div class="swiper-slide">
                        <div class="tour-listing box-sd">
                            <a href="{{route('paket-tur-umum.show','1')}}" class="tour-listing-image">

                                <img src="{{ asset('assets/item/group126.png') }}"
                                    alt="Image Listing">

                            </a>
                            <div class="tour-listing-content">
                                <span class="map"> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.26.35-.578.77-.927 1.23-.774.99-1.675 2.06-2.239 2.727a.58.58 0 0 1-.86 0c-.564-.667-1.465-1.737-2.239-2.727a31.634 31.634 0 0 1-.927-1.23C4.478 7.98 4 6.92 4 6a4 4 0 1 1 8 0c0 .92-.478 1.98-1.834 2.94zM8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                    </svg>
                                    Jawa Barat</span>
                                <h3 class="title-tour-list"><a href="tour-single.html">6
                                        nights From
                                        Moscow</a>
                                </h3>
                                <div class="review">
                                    <span>(1 Review)</span>
                                </div>
                                <div class="icon-box flex-three">

                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h5 style="color: orange;">IDR 1,76jt</h5>
                                        <h6 style="color: orange;">/person</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-center"
                                        style="text-align: right;">
                                        <img src="{{ asset('assets/item/group74.svg') }}"
                                            alt="" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 ">
                <ul class="tf-pagination flex-five">
                    <li>
                        <a class="pages-link" href="#"> <i class="icon-29"></i></a>
                    </li>
                    <li>
                        <a class="pages-link" href="#">1</a>
                    </li>
                    <li class="pages-item active" aria-current="page">
                        <a class="pages-link" href="#">2</a>
                    </li>
                    <li><a class="pages-link" href="#">3</a></li>
                    <li>
                        <a class="pages-link" href="#"><i class=" icon--1"></i></a>
                    </li>
                </ul>

            </div>
        </div>

    </section>

@endsection


@section('css')
@endsection
@section('script')
@endsection
