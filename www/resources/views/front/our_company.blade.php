@extends('front.layouts.master')

@section('title') Garnet Motors India Pvt. Ltd @endsection

@section('content')
    <div class="our-companies position-relative">
        <div class="bg-images-one position-relative">
            <div class="images-phone">
                <img src="front/images/companies/bg1.png" alt="bg1">
            </div>
            <div class="images-mobile">
                <img src="front/images/companies/bg_mobile.png" alt="bg1">
            </div>
            <div class="companies-contect">
                <h1 class="title">Our Companies</h1>
            </div>
        </div>
        <div class="bg-images-two"><img src="front/images/companies/bg2.png" alt="bg2"></div>
    </div>

    <div class="companies-garnet-motors">
        <div class="container">
            <div class="garnet-motors-inner">
                <div class="images-box">
                    <img class="destop" src="front/images/companies/img1.png" alt="Garnet Motors">
                    <img class="mobile" src="front/images/companies/img_mobile1.png" alt="Garnet Motors">
                </div>
                <div class="garnet-motors-content">
                    <h2 class="sub-title">Garnet Motors</h2>
                    <div class="destop-content">
                        <p>Built on the strong pillars of integrity, honesty, a growth-centric approach, and a
                            customer-first ideology, Garnet Motors started operations in 2019 in Nagpur, Maharashtra.
                            Today,
                            it has successfully spread its wings and established business across 5 cities in the
                            country.
                        </p>
                        <h4>VISION :</h4>
                        <p>We aspire to occupy every customer's mind space as a distinguished automobile business known for its ethical practices, in turn, contributing to India's progress and delivering smiles.</p>
                        <h4>MISSION :</h4>
                        <p>Our sole mission is to be a one-stop destination for automobile sales and services that facilitates a business of 6,000 vehicles and services 50,000 vehicles per year by 2025.
                        </p>
                    </div>

                    <div class="mobile-content">
                        <p>Built on the strong pillars of integrity, honesty, a growth-centric approach, and a
                            customer-first ideology, Garnet Motors started operations in 2019 in Nagpur, Maharashtra.
                            Today,
                            it has successfully spread its wings and established business across 5 cities in the
                            country.
                        </p>
                        <h4>VISION</h4>
                        <p>We aspire to occupy every customer's mind space as a distinguished automobile business known for its ethical practices, in turn, contributing to India's progress and delivering smiles.</p>
                        <h4>MISSION</h4>
                        <p>Our sole mission is to be a one-stop destination for automobile sales and services that facilitates a business of 6,000 vehicles and services 50,000 vehicles per year by 2025.
                        </p>
                    </div>
                    <div class="brands-text">
                        <h5>Brands We Are Working With</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brands-logo-information reveal">
        <div class="container">
            <div class="brands-logo-inner">
                <div class="brands-logo-box">
                    <div class="logo-box">
                        <img src="front/images/companies/logo1.png" alt="brand logo">
                    </div>
                    <div class="brands-logo-contect">
                        <p>Mercedes Benz Central Star</p>
                    </div>
                    <div class="brands-know-button">
                        <a href="{{route('mercedes.benz.central.star')}}"> KNOW MORE</a>
                    </div>
                </div>
                <div class="brands-logo-box">
                    <div class="logo-box">
                        <img src="front/images/companies/logo2.png" alt="brand logo">
                    </div>
                    <div class="brands-logo-contect">
                        <p>Ather</p>
                    </div>
                    <div class="brands-know-button">
                        <a href="{{route('ather')}}"> KNOW MORE</a>
                    </div>
                </div>
                <div class="brands-logo-box">
                    <div class="logo-box">
                        <img src="front/images/companies/logo3.png" alt="brand logo">
                    </div>
                    <div class="brands-logo-contect">
                        <p>Garnet Galaxy Absure Car wale</p>
                    </div>
                    <div class="brands-know-button">
                        <a href="{{route('car.wale')}}"> KNOW MORE</a>
                    </div>
                </div>
                <div class="brands-logo-box">
                    <div class="logo-box">
                        <img src="front/images/companies/logo4.png" alt="brand logo">
                    </div>
                    <div class="brands-logo-contect">
                        <p>Altigreen</p>
                    </div>
                    <div class="brands-know-button">
                        <a href="{{route('altigreen')}}">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ks-metals-galler reveal">
        <div class="container">
            <div class="metals-galler-innner">
                <div class="metals-galler-box">
                    <div class="images-box">
                        <div class="destop">
                            <img src="front/images/companies/img3.png" alt="images-box">
                        </div>
                        <div class="mobile">
                            <img src="front/images/companies/img3_mobile.png" alt="images-box">
                        </div>
                    </div>
                    <div class="metals-galler-content">
                        <div class="title-content">
                            <h4>KS Metals</h4>
                        </div>
                        <p>K S Metal produces the best quality metals (Crushed sand and metals from 6mm-8mm sizes) complying with all rules and regulations, using solar power. (Green energy)</p>
                        <div class="brands-know-button">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#website_under_development">VISIT WEBSITE</a>
                        </div>
                    </div>
                </div>
                <div class="metals-galler-box">
                    <div class="images-box">
                        <div class="destop">
                            <img src="front/images/companies/img4.png" alt="images-box">
                        </div>
                        <div class="mobile">
                            <img src="front/images/companies/img4_mobile.png" alt="images-box">
                        </div>
                    </div>
                    <div class="metals-galler-content">
                        <div class="title-content">
                            <h4>Diamond Estate</h4>
                        </div>
                        <p>A one-stop destination for luxury real estate, Diamond Estate boasts high-end and valuable properties.</p>
                        <div class="brands-know-button">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#website_under_development">VISIT WEBSITE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
