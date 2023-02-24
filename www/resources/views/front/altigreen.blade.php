@extends('front.layouts.master')

@section('title') Garnet Motors India Pvt. Ltd  @endsection

@section('content')
    <div class="benz-option-car-heading">
        <div class="benz-option-title">
            <h2>Garnet Motors India Pvt. Ltd.</h2>
        </div>
        <div class="benz-option-logo">
            <img src="front/images/benz-option/logo-3.png" alt="car-logo">
        </div>
    </div>

    <div class="benz-option-description">
        <div class="container">
            <p>A dealership of Altigreen in Ahmedabad and Nagpur—an electric vehicle company that specialises in manufacturing and facilitating the growth of green advanced 3-wheelers in India.</p>
        </div>
    </div>

    <div class="benz-gallary-section">
        <div class="container">
            <div class="benz-gallary-item">
                <div class="images-group">
                    <div class="images-box" data-bs-toggle="modal" data-bs-target="#cardekho">
                        <img src="front/images/benz-option/car1.png" alt="car" >
                        <img src="front/images/benz-option/car2.png" alt="car">
                    </div>
                    <div class="images-box" data-bs-toggle="modal" data-bs-target="#cardekho">
                        <img src="front/images/benz-option/car3.png" alt="car">
                        <img src="front/images/benz-option/car4.png" alt="car">
                    </div>
                    <div class="images-counter-galler">+6 Images</div>
                </div>
                <div class="owl-carousel images-group-mobile  owl-theme">
                    <div class="item"><img src="front/images/benz-option/slider1.png" alt="slider"></div>
                    <div class="item"><img src="front/images/benz-option/slider2.png" alt="slider"></div>
                    <div class="item"><img src="front/images/benz-option/slider1.png" alt="slider"></div>
                    <div class="item"><img src="front/images/benz-option/slider2.png" alt="slider"></div>
                </div>
                <div class="benz-gallary-contect">
                    <h2 class="title">Altigreen </h2>
                    <h3 class="sub-title">(3S Facility - Sales, Service & Spare Parts)</h3>
                    <div class="benz-line">
                        <p class="contact">Contact</p>
                    </div>
                    <p>398/p, Near Ujala Circle, opp.indian motorcycle, Sarkhej-Bavla Rd, Sarkhej, Ahmedabad, Gujarat 382210.</p>
                    <a class="phone-no" href="tel:+916352553831">Tel: +91 63525 53831</a>
                    <a href="#" class="know-more-button">
                        <span class="icon"> <img src="front/images/benz-option/global.png" alt="global"> </span>
                        <span class="text">know More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
