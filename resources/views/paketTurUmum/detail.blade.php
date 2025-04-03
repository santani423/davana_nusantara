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
    <!-- Widget About Us -->
    <section class="about-us-h4">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-6">


                    <img src="{{ asset('assets/item/Maskgroup2.png') }}" alt="image" style="width: 100%; height: auto;">


                </div>
                <div class="col-md-6 inner-content-about">
                    <div class="mb-30">

                        <h2 class="title-heading mb-18">Great opportunity for & travels </h2>
                        
                        <div class="extra">
                            <div class="flex-three">
                                <span class="name text-secondary">Category:</span>
                                <span class="price mr-1">$18.00</span>
                            </div> 
                            <div class="flex-three">
                                <span class="name text-secondary">Departure:</span>
                                <span class="price mr-1">$18.00</span>
                            </div> 
                            <div class="flex-three">
                                <span class="name text-secondary">Transportation Ticket:</span>
                                <span class="price mr-1">$18.00</span>
                            </div> 
                        </div>
                    </div>
                    <hr>
                    <div class="mb-30">

                        
                        <div class="extra">
                            
                            <div class="flex-three">
                                <span class="name text-secondary">Hotel:</span>
                               
                            </div> 
                            <div class="flex-three"> 
                                <div class="form-group d-flex">
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="radio" name="hotel_rating" id="hotel1" value="1">
                                        <label class="form-check-label font-weight-bold" for="hotel1">Bintang 1</label>
                                    </div>
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="radio" name="hotel_rating" id="hotel2" value="2">
                                        <label class="form-check-label font-weight-bold" for="hotel2">Bintang 2</label>
                                    </div>
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="radio" name="hotel_rating" id="hotel3" value="3">
                                        <label class="form-check-label font-weight-bold" for="hotel3">Bintang 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hotel_rating" id="hotel4" value="4">
                                        <label class="form-check-label font-weight-bold" for="hotel4">Bintang 4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-30"> 
                        <div class="extra"> 
                            <div class="flex-three">
                                <span class="name text-secondary">Travelers & Class:</span>
                            </div>
                            <div class="flex-three">
                                <div class="form-group d-flex align-items-center">
                                    <div class="d-flex align-items-center mr-3">
                                        <label for="adults" class="font-weight-bold mr-2">Adults (12y+):</label>
                                        <input type="number" id="adults" name="adults" class="form-control" min="1" value="1" style="width: 80px;">
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label for="children" class="font-weight-bold mr-2">Children (2y - 12y):</label>
                                        <input type="number" id="children" name="children" class="form-control" min="0" value="0" style="width: 80px;">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>  
                    <hr>
                    <div class="mb-30"> 
                        <div class="extra"> 
                            <div class="flex-three"> 
                                <p class="text-muted">This package offers an amazing travel experience with top-notch services and accommodations tailored to your needs.</p>
                            </div>  
                        </div>
                    </div> 
                    <hr>
                   
                    <div class="mb-30"> 
                        <div class="extra"> 
                            <div class="flex-three">
                                <span class="name text-secondary">Travelers & Class:</span>
                            </div>
                            <div class="flex-two mb-40">
                                <div class="d-flex align-items-center mr-auto">
                                    <h5 style="color: #FE7C00;">IDR 1,76jt /person</h5> 
                                </div>
                                <div class="d-flex align-items-end ml-auto">
                                    <button class="btn btn-outline-primary m-3" style="border-color: #307EC2; color: #307EC2;">Download PDF</button>
                                    <button class="btn btn-success m-3"  >Booking Now</button>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tf-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="border-bottom: 2px solid ;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true"  >Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="itinerary-tab" data-bs-toggle="tab" data-bs-target="#itinerary" type="button" role="tab" aria-controls="itinerary" aria-selected="false" style="color: #000;">Itinerary</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false" style="color: #000;">Reviews</button>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <p>This is the overview content. Here you can provide a summary of the tour package, including highlights and key features.</p>
            </div>
            <div class="tab-pane fade" id="itinerary" role="tabpanel" aria-labelledby="itinerary-tab">
                <p>This is the itinerary content. Provide a detailed day-by-day schedule of the tour package here.</p>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <p>This is the reviews content. Display customer feedback and ratings for the tour package here.</p>
            </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.nav-link');
            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                tabs.forEach(t => t.style.color = '#000');
                this.style.color = '#307EC2';
                });
            });
            });
        </script>
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
