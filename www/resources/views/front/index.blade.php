    @extends('front.layouts.master')

@section('title') Home @endsection

@section('content')

    <div class="banner-section">
        <div class="banner_logo"><img class="sub-image" src="{{asset('front/images/Asset-1@3x-2.png')}}" alt="banner-image"></div>
        <div class="owl-carousel banner banner-slider">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
                        <div class="heading">
                            <h1 class="sub-title">A future-ready <br>automobile business</h1>
                        </div>
                        <div class="images">
                            <img class="img" src="{{asset('front/images/home_page_slider_1.png')}}" alt="mask">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="heading">
                            <h1 class="sub-title">Largest self-owned <br>stone mines in India</h1>
                        </div>
                        <div class="images">
                            <img class="img" src="{{asset('front/images/home_page_slider_2.png')}}" alt="mask">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="heading">
                            <h1 class="sub-title">A prime destination <br>for luxury real estate</h1>
                        </div>
                        <div class="images">
                            <img class="img" src="{{asset('front/images/home_page_slider_3.png')}}" alt="mask">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container our-business-main">
        <div class="our-business-section">
            <p class="info">A culmination of hard work, ethics, environmentalism, and efficiency over the years has made us a
                thriving
                group
                of companies,
                set to continue expanding across India.</p>
            <h2 class="title">Our Businesses</h2>
            <div class="image-content one">
                <div class="image position-relative reveal">
                    <img src="{{asset('front/images/garnet-motors.png')}}" alt="garnet-motors">
                    <div class="shape d-flex flex-column align-items-center">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <span class="shape3"></span>
                    </div>
                </div>
                <div class="content reveal">
                    <h3 class="sub-title">Garnet Motors</h3>
                    <p>With a base in over 5 cities in the country and plans of expansion, Garnet Motors deals in top brands
                        of
                        automobiles.</p>
                    <a href="{{route('ourcompany')}}" class="link">READ MORE</a>
                </div>
            </div>

            <div class="company-section reveal">
                <div class="company-row justify-content-between">
                    <div class="company d-flex flex-column">
                        <div class="company-icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('front/images/mercedese-logo.png')}}" alt="mercedese">
                        </div>
                        <div class="company-name d-flex flex-column">
                            <p>Mercedes Benz Central Star</p>
                            <div class="company-content">
                                <span class="line"></span>
                                <a href="{{route('mercedes.benz.central.star')}}" class="link">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="company d-flex flex-column">
                        <div class="company-icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('front/images/carewale-logo.png')}}" alt="carewale">
                        </div>
                        <div class="company-name d-flex flex-column">
                            <p>Garnet Galaxy Absure Car wale</p>
                            <div class="company-content">
                                <span class="line"></span>
                                <a href="{{route('ather')}}" class="link">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="company d-flex flex-column">
                        <div class="company-icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('front/images/ather-logo.png')}}" alt="ather">
                        </div>
                        <div class="company-name d-flex flex-column">
                            <p>Ather</p>
                            <div class="company-content">
                                <span class="line"></span>
                                <a href="{{route('car.wale')}}" class="link">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="company d-flex flex-column">
                        <div class="company-icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('front/images/Altigreen-logo.png')}}" alt="Altigreen">
                        </div>
                        <div class="company-name d-flex flex-column">
                            <p>Altigreen</p>
                            <div class="company-content">
                                <span class="line"></span>
                                <a href="{{route('altigreen')}}" class="link">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-content two reveal">
                <div class="image position-relative">
                    <img src="{{asset('front/images/ks-metal.png')}}" alt="ks-metal">
                    <div class="shape d-flex flex-column align-items-center">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <span class="shape3"></span>
                    </div>
                </div>
                <div class="content">
                    <h3 class="sub-title">KS Metals</h3>
                    <p>Producing multi-size metals from its world class crushing plant setup in 77 acres of its own mining
                        land
                        near
                        Butibori in Nagpur ( Vidarbha)</p>
                    <a href="#" class="link" data-bs-toggle="modal" data-bs-target="#website_under_development">VISIT WEBSITE</a>
                    
                </div>
            </div>

            <div class="image-content three reveal">
                <div class="image position-relative">
                    <img src="{{asset('front/images/diamond-estate.png')}}" alt="diamond-estate">
                    <div class="shape d-flex flex-column align-items-center">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <span class="shape3"></span>
                    </div>
                </div>
                <div class="content">
                    <h3 class="sub-title">Diamond Estate</h3>
                    <p>A one-stop destination for luxurious commercial and residential properties, Diamond Real Estate
                        caters to
                        high-end and valuable real estate in the city of Nagpur.</p>
                    <a href="#" class="link" data-bs-toggle="modal" data-bs-target="#website_under_development">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
    </div>


    <div class="featured-storie-section">
        <h2 class="title reveal">Featured Stories</h2>
        <div class="owl-carousel featured-slider reveal">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    @foreach (config('constants.MEDIA') as $key => $media)
                    <div class="owl-item">
                        @if($media['type'] == 'article')
                            <a href="{{ $media['link'] }}" target="_blank">
                        @else
                            <a href="{{ route('print', $media['link']) }}"  target="_blank">
                        @endif
                            
                            <div class="image">
                                <img src="{{asset('front/images/'.$media['web_image'])}}" alt="featured">
                            </div>
                        
                        </a>
                            <div class="content">
                                @if($media['type'] == 'article')
                                    <a href="{{ $media['link'] }}" target="_blank">
                                @else
                                    <a href="{{ route('print', $media['link']) }}"  target="_blank">
                                @endif
                                <p>{{ $media['title'] }}</p>
                                Read More
                                </a>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="chairman-section reveal">
        <h4 class="title">Chairman’s Corner</h4>
        <div class="chairman chairman-wrapper">
            <div class="image position-relative">
                <img src="{{asset('front/images/chairman.png')}}" alt="chairman">
            </div>
            <div class="content">
                <div class="content-inner">
                    <p>“It is always 80% hard work, 10% luck, and 10% karma that contributes to your success. Hard work,
                        indeed,
                        always pays off.”</p>
                    <p class="name">KS Cheema, <span> Founder Chairman</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="sustainability-section reveal">
        <div class="container">
            <h4 class="title">sustainability</h4>
            <div class="image-tab">
                <div class="image">
                    <img src="{{asset('front/images/sustainability.png')}}" alt="sustainability">
                </div>
                <div class="tab">
                    <h4 class="sub-title">Taking India towards Growth, Mindfully</h4>
                    <p class="disc">Our goal as a thriving group of companies in the country is to inject growth and success
                        into
                        every business, brand, and employee journey associated with us.
                        At the same time, we acknowledge our duty towards the planet, our home.</p>
                    <ul class="nav nav-pills tablist" id="service-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active
              " id="overview-tab" data-bs-toggle="pill" data-bs-target="#overview" type="button" role="tab"
                                    aria-controls="overview" aria-selected="true" >
                                Overview
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link
              " id="impact-tab" data-bs-toggle="pill" data-bs-target="#impact" type="button" role="tab"
                                    aria-controls="impact" aria-selected="true" >
                                Impact
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <p>Our goal as a thriving group of companies in the country is to inject growth and success into
                                every
                                business, brand, and employee journey associated with us. At the same time, we acknowledge our
                                duty
                                towards the planet, our home. As a part of that commitment, we make sure that our businesses are
                                backed
                                by sustainable practices that make a difference.</p>
                        </div>
                        <div class="tab-pane fade" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                            <p>Our goal as a thriving group of companies in the country is to inject growth and success into
                                every
                                business, brand, and employee journey associated with us. At the same time, we acknowledge our
                                duty
                                towards the planet, our home. As a part of that commitment, we make sure that our businesses are
                                backed
                                by sustainable practices that make a difference.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
