@extends('front.layouts.master')

@section('title')
    Garnet Motors India Pvt. Ltd
@endsection

@section('content')
    {{-- @foreach ($ather_detail as $detail)
        @foreach ($detail as $key => $value)
            @if ($key == 'details')
                {{ $value['name'] }}
            @elseif($key == 'photos')
                    <img src="front/images/companies/{{ $value[0]}}" alt="car">
                    <img src="front\images\companies\{{ $value[1]}}" alt="car">
            @endif
        @endforeach
    @endforeach --}}

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
    @foreach ($ather_detail as $detail)
        @foreach ($detail as $key => $value)
            <div class="benz-gallary-section">
                <div class="container">
                    <div class="benz-gallary-item">
                        <div class="images-group">
                            <div class="images-box" data-bs-toggle="modal" data-bs-target="#cardekho">
                                <img src="front/images/companies/{{ $value['photos'][0] }}" alt="car">
                                <img src="front/images/companies/{{ $value['photos'][1] }}" alt="car">
                            </div>
                            <div class="images-box box-2" data-bs-toggle="modal" data-bs-target="#cardekho">
                                <img src="front/images/companies/{{ $value['photos'][2] }}" alt="car">
                                <img src="front/images/companies/{{ $value['photos'][3] }}" alt="car">
                            </div>
                            <div class="images-counter-galler">+6 Images</div>
                        </div>
                        <div class="owl-carousel images-group-mobile  owl-theme">
                            <div class="item"><img src="front/images/companies/{{ $value['photos'][0] }}" alt="slider">
                            </div>
                            <div class="item"><img src="front/images/companies/{{ $value['photos'][1] }}" alt="slider">
                            </div>
                            <div class="item"><img src="front/images/companies/{{ $value['photos'][2] }}" alt="slider">
                            </div>
                            <div class="item"><img src="front/images/companies/{{ $value['photos'][3] }}" alt="slider">
                            </div>
                        </div>
                        <div class="benz-gallary-contect">
                            <h2 class="title">{{ $value['name'] }} </h2>
                            <h3 class="sub-title">{{ $value['short_line'] }}</h3>
                            <div class="benz-line">
                                <p class="contact">Contact</p>
                            </div>
                            <p>{{ $value['address'] }}</p>
                            <a class="phone-no" href="tel:+918799916255">Tel: {{ $value['phone'] }}</a>
                            <a href="#" class="know-more-button">
                                <span class="icon"> <img src="front/images/benz-option/global.png" alt="global">
                                </span>
                                <span class="text">know More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
@endsection
@foreach ($ather_detail as $detail)
    @foreach ($detail as $key => $value)
        <div class="modal fade" id="cardekho" tabindex="-1" aria-labelledby="cardekho" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="owl-carousel images-galler-section owl-theme">
                            <div class="item">
                                <img src="front/images/companies/{{ $value['photos'][0] }}" alt="Car Images">
                            </div>
                            <div class="item">
                                <img src="front/images/companies/{{ $value['photos'][1] }}" alt="Car Images">
                            </div>
                            <div class="item">
                                <img src="front/images/companies/{{ $value['photos'][2] }}" alt="Car Images">
                            </div>
                            <div class="item">
                                <img src="front/images/companies/{{ $value['photos'][3] }}" alt="Car Images">
                            </div>
                            <div class="item">
                                <img src="front/images/companies/{{ $value['photos'][0] }}" alt="Car Images">
                            </div>
                            <div class="item">
                                <img src="front/images/companies/{{ $value['photos'][1] }}" alt="Car Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endforeach
@section('script')
@endsection
