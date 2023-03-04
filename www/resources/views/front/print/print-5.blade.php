@extends('front.layouts.master')

@section('title') About @endsection

@section('content')

    <div class="artical-banner-section position-relative">
        <img src="{{asset('front/images/artical/artical-banner.png')}}" alt="banner">
        <h1>News and Updates</h1>
    </div>

    <div class="artical-section">
        <div class="artical-top">
            <div class="container d-flex justify-content-between">
                <div class="prev_page">
                    <a href="{{ route('print', 'print-4') }}">
                    <div class="prev_page_img">
                        <img src="{{asset('front/images/aboutus/down-arrow.png')}}" alt="arrow">
                    </div>
                    <span>Prev  Article</span>
                    </a>
                </div>
                <div class="next_page">
                    <a href="{{ route('print', 'print-6') }}">
                    <div class="next_page_img">
                        <img src="{{asset('front/images/aboutus/up-arrow.png')}}" alt="arrow">
                    </div>
                    <span>Prev  Article</span>
                    </a>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="container artical-slider-main">
            <div class="swiper artical-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('front/images/articles/print/5.png')}}" alt="artical">
                    </div>          
                </div>
                
            </div>
        </div>
    </div>
	
@endsection

@section('script')

@endsection
