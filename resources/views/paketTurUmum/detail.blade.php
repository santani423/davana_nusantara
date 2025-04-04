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
                                <span class="price mr-1">{{ $paket->typePaket->name }}</span>
                            </div>
                            <div class="flex-three">
                                <span class="name text-secondary">Departure:</span>
                                <span
                                    class="price mr-1">{{ \Carbon\Carbon::parse($paket->start_date_departure)->translatedFormat('F Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse($paket->end_date_departure)->translatedFormat('F Y') }}</span>
                            </div>
                            <div class="flex-three">
                                <span class="name text-secondary">Transportation Ticket:</span>
                                <span class="price mr-1">
                                    @if ($paket->transportation_ticket == 1)
                                        <span class="text-success">Include</span>
                                    @else
                                        <span class="text-danger">Exclude</span>
                                    @endif
                                </span>
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
                                    @if ($paket->hotel_bintang_1)
                                        <div class="form-check mr-3">
                                            <input class="form-check-input" type="radio" name="hotel_rating"
                                                id="hotel1" value="1">
                                            <label class="form-check-label font-weight-bold" for="hotel1">Bintang
                                                1</label>
                                        </div>
                                    @endif
                                    @if ($paket->hotel_bintang_2)
                                        <div class="form-check mr-3">
                                            <input class="form-check-input" type="radio" name="hotel_rating"
                                                id="hotel2" value="2">
                                            <label class="form-check-label font-weight-bold" for="hotel2">Bintang
                                                2</label>
                                        </div>
                                    @endif
                                    @if ($paket->hotel_bintang_3)
                                        <div class="form-check mr-3">
                                            <input class="form-check-input" type="radio" name="hotel_rating"
                                                id="hotel3" value="3">
                                            <label class="form-check-label font-weight-bold" for="hotel3">Bintang
                                                3</label>
                                        </div>
                                    @endif
                                    @if ($paket->hotel_bintang_4)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hotel_rating"
                                                id="hotel4" value="4">
                                            <label class="form-check-label font-weight-bold" for="hotel4">Bintang
                                                4</label>
                                        </div>
                                    @endif
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
                                        <input type="number" id="adults" name="adults" class="form-control"
                                            min="1" value="1" style="width: 80px;">
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label for="children" class="font-weight-bold mr-2">Children (2y - 12y):</label>
                                        <input type="number" id="children" name="children" class="form-control"
                                            min="0" value="0" style="width: 80px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-30">
                        <div class="extra">
                            <div class="flex-three">
                                <p class="text-muted">{{ $paket->description }}</p>
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
                                    <h5 style="color: #FE7C00;">{{ 'IDR ' . number_format($paket->price, 0, ',', '.') }}
                                        /person</h5>
                                </div>
                                <div class="d-flex align-items-end ml-auto">
                                    <button class="btn btn-outline-primary m-3"
                                        style="border-color: #307EC2; color: #307EC2;">Download PDF</button>
                                    <button class="btn btn-success m-3">Booking Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tf-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="border-bottom: 2px solid;">
                @foreach ($paket->itemDescPaket as $key => $fasilitas)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="{{ $fasilitas->itemDesc->code }}-tab"
                            data-bs-toggle="tab" data-bs-target="#{{ $fasilitas->itemDesc->code }}" type="button"
                            role="tab" aria-controls="{{ $fasilitas->itemDesc->code }}"
                            aria-selected="{{ $key == 0 ? 'true' : 'false' }}"
                            style="color: {{ $key == 0 ? '#307EC2' : '#000' }};">{{ $fasilitas->itemDesc->name }}</button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($paket->itemDescPaket as $key => $fasilitas)
                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                        id="{{ $fasilitas->itemDesc->code }}" role="tabpanel"
                        aria-labelledby="{{ $fasilitas->itemDesc->code }}-tab">
                        <p>{{ $fasilitas->desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.nav-link');
                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
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
