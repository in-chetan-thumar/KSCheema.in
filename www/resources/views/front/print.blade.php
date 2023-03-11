@extends('front.layouts.master')

@section('title') About @endsection

@section('content')

    <div class="artical-banner-section position-relative">
        <img src="{{asset('front/images/artical/artical-banner.png')}}" alt="banner">
        <h1>News and Updates</h1>
    </div>
    <div class="delarship-images artical_page">
        <div class="container">
            <div class="delarship-desktop">
                <div class="detail">
                    <h1>{{ config('constants.MEDIA')['PRINT'][$print_page - 1]['title'] }}</h1>
                </div>
                <!-- <div class="date">
                    <img src="{{asset('front/images//media/Icon.png')}}" alt="icon">
                    <p>{{ config('constants.MEDIA')['PRINT'][$print_page - 1]['date'] }}</p>
                </div> -->
            </div>
        </div>
    </div>

    <div class="artical-section">
        <div class="artical-top">
            <div class="container d-flex justify-content-between">
                <div class="prev_page">
                    @if($print_page > 1)
                        <a href="{{ route('print', $print_page - 1) }}">
                    @else
                        <a href="#">
                    @endif
                    <div class="prev_page_img">
                        <img src="{{asset('front/images/aboutus/down-arrow.png')}}" alt="arrow">
                    </div>
                    <span>Prev  Article</span>
                    </a>
                </div>
                <div class="next_page">
                    @if($print_page < 8)
                        <a href="{{ route('print', $print_page + 1) }}">
                    @else
                        <a href="#">
                    @endif
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
                        <img src="{{asset('front/images/articles/print/'.$print_page.'.png')}}" alt="artical">
                    </div>          
                </div>
                
            </div>
        </div>
    </div>
	
@endsection

@section('script')

@endsection
