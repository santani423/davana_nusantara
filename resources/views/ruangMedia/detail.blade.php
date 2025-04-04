@extends('layout.index')

@section('content')
    <section class="breadcumb-section"
        style="background-image: url('{{ asset('assets/item/Maskgroup.png') }}'); background-size: cover; background-position: center;">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Paket Tour Umum</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>Paket Tour Umum</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="our-blog pd-main">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <article class="side-blog side-blog-single">
                        <div class="image">
                            <img src="{{ asset($ruangMedia->thumbnail_img) }}" alt="">
                        </div>
                        <div class="top-detail-info">
                            <span>{{ $ruangMedia->created_at->format('d F Y') }}</span>
                        </div>
                        <h2 class="entry-title">
                            {{ $ruangMedia->title }}
                        </h2>
                        {!! $ruangMedia->content !!}




                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="side-bar-right">
                        <div class="sidebar-widget">
                            <div class="">
                                <img src="{{ asset($ruangMedia->thumbnail_img) }}" alt="Image Blog" class="avata">

                                <span>{{ $ruangMedia->created_at }}</span>
                                <h5 class="entry-title">
                                    {{ $ruangMedia->title }}
                                </h5>
                                <p class="des">he whimsically named Egg Canvas is the
                                    design director and photographer
                                    in New York. Why the nam
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('css')
    <style>
        /* .show.active {
                     border-bottom: 2px solid #307EC2;
                } */
    </style>
@endsection
@section('script')
@endsection
