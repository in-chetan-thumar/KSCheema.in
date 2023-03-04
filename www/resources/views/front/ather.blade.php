@extends('front.layouts.master')

@section('title')
    Garnet Motors India Pvt. Ltd
@endsection

@section('content')
    <div class="benz-option-car-heading">
        <div class="benz-option-title">
            <h2>Garnet Motors India Pvt. Ltd.</h2>
        </div>
        <div class="benz-option-logo">
            <img src="front/images/benz-option/logo-4.png" alt="car-logo">
        </div>
    </div>

    <div class="benz-option-description">
        <div class="container">
            <p>A purveyor of convenience, progress, and efficiency, Ather by Garnet Motors is an aggregator of smart
                electric scooters that offer in-class performance. The brand houses its showroom and office in the
                metropolitan city of Mumbai.</p>
        </div>
    </div>
    @foreach (config('constants.ATHER') as $key => $location_detail)
        <div class="benz-gallary-section">
            <div class="container">
                <div class="benz-gallary-item">
                    <div class="images-group">
                        <div class="images-box" data-bs-toggle="modal" data-bs-target="#cardekho{{ $key }}">
                            <img src="front/images/companies/{{ $location_detail['photos'][0] }}" alt="car">
                            <img src="front/images/companies/{{ $location_detail['photos'][1] }}" alt="car">
                        </div>
                        <div class="images-box box-2" data-bs-toggle="modal" data-bs-target="#cardekho{{ $key }}">
                            <img src="front/images/companies/{{ $location_detail['photos'][2] }}" alt="car">
                            <img src="front/images/companies/{{ $location_detail['photos'][3] }}" alt="car">
                        </div>
                        @php 
                        $photo_count = sizeof($location_detail['photos']);
                        @endphp
                        @if($photo_count > 4)
                            <div class="images-counter-galler"> +{{ $photo_count - 4}} Images</div>
                        @endif
                    </div>
                    <div class="owl-carousel images-group-mobile  owl-theme">
                        @foreach($location_detail['photos'] as $photo)
                            <div class="item"><img src="front/images/companies/{{ $photo }}" alt="slider"></div>
                        @endforeach
                    </div>
                    <div class="benz-gallary-contect">
                        <h2 class="title">{{ $location_detail['name'] }} </h2>
                        <h3 class="sub-title">{{ $location_detail['short_line'] }}</h3>
                        <div class="benz-line">
                            <p class="contact">Contact</p>
                        </div>
                        <p>{{ $location_detail['address'] }}</p>
                        <a class="phone-no" href="tel:{{ $location_detail['phone'] }}">Tel: {{ $location_detail['phone'] }}</a>
                        <a href="https://www.atherenergy.com" class="know-more-button" target="_blank">
                            <span class="icon"> <img src="front/images/benz-option/global.png" alt="global">
                            </span>
                            <span class="text">know More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach (config('constants.ATHER') as $key => $location_detail)
        <div class="modal fade cardekho" id="cardekho{{ $key }}" tabindex="-1" aria-labelledby="cardekho{{ $key }}" aria-hidden="true">
            <div class="modal-dialog model-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="owl-carousel images-galler-section owl-theme">
                            @foreach($location_detail['photos'] as $photo)
                                <div class="item"><img src="front/images/companies/{{ $photo }}" alt="Car Images"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('script')
@endsection
