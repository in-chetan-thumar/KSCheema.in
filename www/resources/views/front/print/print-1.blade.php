@extends('front.layouts.master')

@section('title') About @endsection

@section('content')

    <div class="artical-banner-section position-relative">
        <img src="{{asset('front/images/artical/artical-banner.png')}}" alt="banner">
        <h1>Autism care day</h1>
    </div>

    <div class="artical-section">
        <div class="artical-top">
            <div class="container d-flex justify-content-between">
                <div class="swiper-prev d-flex gap-3 align-items-center">
                    <div class="swiper-button-prev slide-button">
                        <img src="{{asset('front/images/aboutus/down-arrow.png')}}" alt="arrow">
                    </div>
                    <span>Prev  Article</span>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-next  d-flex gap-3 align-items-center">
                    <span>Next  Article</span>
                    <a href="{{ route('print', 'print-2') }}">
                        <div class="swiper-button-next slide-button">
                            <img src="{{asset('front/images/aboutus/up-arrow.png')}}" alt="arrow">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container artical-slider-main">
            <div class="swiper artical-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('front/images/articles/print/1.png')}}" alt="artical">
                    </div>          
                </div>
                
            </div>
        </div>
    </div>
	
@endsection

@section('script')

@endsection
