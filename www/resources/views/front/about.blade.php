@extends('front.layouts.master')

@section('title') About @endsection

@section('content')
    <div class="aboutus-banner-section">
        <div class="container">
            <div class="banner-img">
                <img class="image1" src="front/images/aboutus/aboutus-banner.png" alt="banner" title="banner">
                <img class="image2" src="front/images/aboutus/aboutus-banner-mobile.png" alt="banner"
                     title="banner">
            </div>
        </div>
    </div>

    <div class="know-aboutus-section">
        <div class="container">
            <div class="know-content">
                <h1>Know About Us</h1>
                <p class="desktop-text">A savant of law and management, Mr KS Cheema has been a successful independent
                    lawyer, in-house legal
                    counsel, director of business & projects development, and a board member of various MNCs. He also
                    achieved notable success with the establishment of many international joint ventures before he
                    founded the KS Cheema Group of Companies.</p>
                <p class="desktop-text">It was in the year 2012 that he started this entrepreneurial journey by entering
                    the real estate
                    industry. From there on, the corporate group ventured into the automobile and mining sector, led by
                    his strong vision of being an ethical, futuristic and customer-friendly organisation. Backed by
                    decades of experience in business and an unfettered visionary spirit, Mr Cheema’s hard work and
                    persistence have enabled us to secure a successful future for countless individuals across the
                    country. </p>
                <p class="mobile-text">Founded by Mr KS Cheema in 2012, the group of companies first saw the daylight by
                    stepping foot into the real estate industry. Since then, we have forayed our way into the automobile
                    and mining sector, led by his vision, values, and guidance. Backed by decades of experience in
                    business and an unfettered visionary spirit, Mr Cheema’s hard work and persistence have enabled us
                    to secure a successful future for countless individuals across the country.</p>
            </div>
        </div>
    </div>

    <div class="our-journey-section">
        <div class="container">
            <h2>OUR JOURNEY</h2>
            <div class="our-journey-wrapper journey-slider-main">
                <div>
                    <div class="our-journey-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h3 class="year">2012</h3>
                                <p class="content">With a vision of optimising his worldwide exposure, experience and
                                    knowledge,
                                    Mr KS Cheema started his entrepreneurial journey in 2012 with a real estate project
                                    in Nagpur,
                                    K K A Lifestyle through an entity, K K Associates Builders & Developers with
                                    professional partners.
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="year">2016</h3>
                                <p class="content">Expanded the avenues by going solo (100% family owned) with Diamond
                                    Estate Builders & Developers, which is today one of the leading real estate players
                                    in
                                    Nagpur for luxury housing and commercial complexes.
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="year">2018</h3>
                                <p class="content">Formed Garnet Motors (India) Private Limited (Garnet) and started
                                    scouting for automobile dealerships.
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="year">2012</h3>
                                <p class="content">With a vision of optimising his worldwide exposure, experience and
                                    knowledge,
                                    Mr KS Cheema started his entrepreneurial journey in 2012 with a real estate project
                                    in Nagpur,
                                    K K A Lifestyle through an entity, K K Associates Builders & Developers with
                                    professional partners.
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="year">2016</h3>
                                <p class="content">Expanded the avenues by going solo (100% family owned) with Diamond
                                    Estate Builders & Developers, which is today one of the leading real estate players
                                    in
                                    Nagpur for luxury housing and commercial complexes.
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="year">2018</h3>
                                <p class="content">Formed Garnet Motors (India) Private Limited (Garnet) and started
                                    scouting for automobile dealerships.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next slide-button">
                        <img src="front/images/aboutus/up-arrow.png" alt="arrow">
                    </div>
                    <div class="swiper-button-prev slide-button">
                        <img src="front/images/aboutus/down-arrow.png" alt="arrow">
                    </div>
                </div>
                <div class="image position-relative">
                    <img class="main-image" src="front/images/aboutus/journey-img.png" alt="journey">
                    <img class="shape-image" src="front/images/aboutus/shap-icon.png" alt="shape" title="shape">
                </div>
            </div>
        </div>
    </div>

    <div class="team-section">
        <div class="container">
            <h4>MEET OUR TEAM</h4>
            <div class="team-wrapper">
                <div class="member">
                    <div class="member-image">
                        <img src="front/images/aboutus/member1.png" alt="team-member">
                    </div>
                    <div class="member-detail">
                        <h5>James Branch</h5>
                        <p>Chairman, K S Cheema Group</p>
                        <p>Business Administration (MBA)</p>
                    </div>
                </div>
                <div class="member">
                    <div class="member-image">
                        <img src="front/images/aboutus/member2.png" alt="team-member">
                    </div>
                    <div class="member-detail">
                        <h5>James Branch</h5>
                        <p>Chairman, K S Cheema Group</p>
                        <p>Business Administration (MBA)</p>
                    </div>
                </div>
                <div class="member">
                    <div class="member-image">
                        <img src="front/images/aboutus/member3.png" alt="team-member">
                    </div>
                    <div class="member-detail">
                        <h5>James Branch</h5>
                        <p>Chairman, K S Cheema Group</p>
                        <p>Business Administration (MBA)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-section">
        <div class="container">
            <div class="tab-wrapper image-tab">
                <div class="image">
                    <img src="front/images/aboutus/tab-image.png" alt="tab">
                </div>
                <div class="tab">
                    <ul class="nav nav-pills tablist" id="service-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active
                        " id="vison-tab" data-bs-toggle="pill" data-bs-target="#vison" type="button" role="tab"
                                    aria-controls="vison" aria-selected="true">
                                Vison
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link
                        " id="mission-tab" data-bs-toggle="pill" data-bs-target="#mission" type="button" role="tab"
                                    aria-controls="mission" aria-selected="true">
                                Mission
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link
                        " id="values-tab" data-bs-toggle="pill" data-bs-target="#values" type="button" role="tab"
                                    aria-controls="values" aria-selected="true">
                                Values
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vison" role="tabpanel"
                             aria-labelledby="vison-tab">
                            <p>Infusing the same spirit that the group of companies started with, into our work today, we hope to keep that hard work, diligence, and empathy intact even tomorrow. Our mission is to treat hustle, transparency, determination, and environmentalism as non-negotiable pillars in our journey to expand beyond our dreams.</p>
                        </div>
                        <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                            <p>With efficiency, ethical practices, and environmentalism at the core of our values, our mission is to create a lasting impact on the country’s development. Our purpose is to perpetually fuel the growth of our businesses, thereby, empowering our people and resources for sustainable success.</p>
                        </div>
                        <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab">
                            <ul class="tab-content-list">
                                <li>A balanced combination of hard work and smart work to attain long-term success.</li>
                                <li>Transparency to ensure the longevity, trust, and stability of our businesses.</li>
                                <li>Respect and attention to our customers’ needs to ensure impeccable service.</li>
                                <li>Focus on the sustainability of the environment as our duty and core value.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')

@endsection
