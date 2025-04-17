@extends('layout.index')

@section('content')
    <div class="container mt-5">
        <h1 style="font-weight: bold; color: gray;">Our Story</h1>

        <!-- Widget activities -->
        <section class="relative tf-widget-activities pd-main overflow-hidden mt-5">

            <div class="container">
                <div class="row z-index3 relative">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <img src="{{ asset('assets/item/Group124.png') }}" alt="image" class="mask-top" width="10%">

                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="tf-widget-activities-content">

                            <p style="font-size: 16px; line-height: 1.6;">We are a team of passionate individuals dedicated
                                to providing the best services to our clients. Our mission is to deliver high-quality
                                products that meet the needs of our customers.</p>
                            <p style="font-size: 16px; line-height: 1.6;">With years of experience in the industry, we have
                                built a reputation for excellence and reliability. We believe in continuous improvement and
                                strive to exceed expectations in everything we do.</p>
                            <p style="font-size: 16px; line-height: 1.6;">We are a team of passionate individuals dedicated
                                to providing the best services to our clients. Our mission is to deliver high-quality
                                products that meet the needs of our customers.</p>
                            <p style="font-size: 16px; line-height: 1.6;">With years of experience in the industry, we have
                                built a reputation for excellence and reliability. We believe in continuous improvement and
                                strive to exceed expectations in everything we do.</p>
                            <p style="font-size: 16px; line-height: 1.6;">We are a team of passionate individuals dedicated
                                to providing the best services to our clients. Our mission is to deliver high-quality
                                products that meet the needs of our customers.</p>
                            <p style="font-size: 16px; line-height: 1.6;">With years of experience in the industry, we have
                                built a reputation for excellence and reliability. We believe in continuous improvement and
                                strive to exceed expectations in everything we do.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <div class="container">
        <section class="widget-counter relative" id="selection-2">
            <div class="container">
                <div class="row mb--20em relative z-index3">
                    <div class="col-12 col-lg-12 wow fadeInUp animated " data-wow-delay="0.1s">
                        <div class="tf-counter center tf-countto" id="tf-countto">

                            <!-- Embed YouTube Video -->
                            <iframe src="https://www.youtube.com/embed/p06r6R-KyaM?si=3gii6NwObngsr0Ky"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Widget destination -->
    <section class="widget-destination1 pd-main relative mt-5">
        <div class="tf-container text-center">
            <div class="destination-grid z-index3 relative d-flex justify-content-center flex-wrap">
                <div class="destination-tour center wow fadeInUp animated m-3" data-wow-delay="0.1s">
                    <div class="destination-tour-list">
                        <div class="tour1">
                            <h1 class="title-heading wow fadeInUp animated gold">Amaz</h1>
                        </div>
                    </div>
                    <div class="title-tour">qwert</div>
                </div>
                <div class="destination-tour center wow fadeInUp animated m-3" data-wow-delay="0.1s">
                    <div class="destination-tour-list">
                        <div class="tour1">
                            <h1 class="title-heading wow fadeInUp animated gold">Amaz</h1>
                        </div>
                    </div>
                    <div class="title-tour">qwert</div>
                </div>
                <div class="destination-tour center wow fadeInUp animated m-3" data-wow-delay="0.1s">
                    <div class="destination-tour-list">
                        <div class="tour1">
                            <h1 class="title-heading wow fadeInUp animated gold">Amaz</h1>
                        </div>
                    </div>
                    <div class="title-tour">qwert</div>
                </div>
                <div class="destination-tour center wow fadeInUp animated m-3" data-wow-delay="0.1s">
                    <div class="destination-tour-list">
                        <div class="tour1">
                            <h1 class="title-heading wow fadeInUp animated gold">Amaz</h1>
                        </div>
                    </div>
                    <div class="title-tour">qwert</div>
                </div>
                <div class="destination-tour center wow fadeInUp animated m-3" data-wow-delay="0.1s">
                    <div class="destination-tour-list">
                        <div class="tour1">
                            <h1 class="title-heading wow fadeInUp animated gold">Amaz</h1>
                        </div>
                    </div>
                    <div class="title-tour">qwert</div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

@section('css')
    <style>
        .gold {
            color: #f39c12;
            font-size: 30px;
            font-weight: bold;
        }
        h1,
        h2 {
            color: #2c3e50;
        }

        p,
        ul {
            font-size: 16px;
            line-height: 1.6;
        }

        #selection-2 {
            border-radius: 25px;
        }

        #tf-countto {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;

            top: 0px;
            left: 0px;
        }

        @media (max-width: 576px) {
            #selection-2 {

                margin: 2em auto;
                top: -60px;
                left: 25px;
                width: 85%;
            }

            #tf-countto {
                top: -155px;
                left: -50px;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            #selection-2 {

                margin: 2em auto;
                top: 40px;
                left: 25px;
                width: 85%;
            }

            #tf-countto {
                top: -200px;
                left: -50px;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            #selection-2 {

                margin: 2em auto;
                top: 26px;
                left: 25px;
                width: 85%;
            }

            #tf-countto {
                top: -210px;
                left: -50px;
            }
        }

        @media (min-width: 993px) {
            #selection-2 {

                margin: 2em auto;
                top: 100px;
                left: 25px;
                width: 85%;
            }

            #tf-countto {
                top: -240px;
                left: -50px;
            }
        }
    </style>
@endsection

@section('script')
    <script>
        console.log('About Us page loaded');
    </script>
@endsection
