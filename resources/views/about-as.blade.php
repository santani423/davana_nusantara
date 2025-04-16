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
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <div class="container">
        <section class="widget-counter relative">
            <div class="container"> 
                <div class="row mb--20em relative z-index3">
                    <div class="col-12 col-lg-12 wow fadeInUp animated " data-wow-delay="0.1s">
                        <div class="tf-counter center tf-countto" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
                            <!-- Embed YouTube Video -->
                            <iframe src="https://www.youtube.com/embed/p06r6R-KyaM?si=3gii6NwObngsr0Ky" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </div>
@endsection

@section('css')
    <style>
        h1,
        h2 {
            color: #2c3e50;
        }

        p,
        ul {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
@endsection

@section('script')
    <script>
        console.log('About Us page loaded');
    </script>
@endsection
