@extends('layout.index')

@section('content')
    <section class="breadcumb-section" style="background-image: url('{{ asset('assets/item/Maskgroup.png') }}'); background-size: cover; background-position: center;">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Ruang Media</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>Ruang Media</span></li>
                    </ul>
                </div>
            </div>
        </div> 
    </section>
    <section class="profile-dashboard">
      
        <div class="container mt-5"> 
             <div class="row">
                @for ($i = 0; $i <= 20; $i++)
                <div class="col-md-3 mb-3">
                    <div class="swiper-slide">
                        <div class="tour-listing box-sd">
                            <a href="{{route('ruang-media.show','1')}}" class="tour-listing-image"> 
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
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</span>
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
