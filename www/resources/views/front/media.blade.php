@extends('front.layouts.master')

@section('title') Media @endsection

@section('content')

    <div class="news-articles-section-bg">

        <div class="news-articles-section position-relative">
            <div class="articles-section-one-mobile"><img src="front/images/articles/bg4.png" alt="bg"></div>
            <div class="articles-section-title">
                <h1>News and Updates</h1>
            </div>
            <div class="articles-section-one"><img src="front/images/articles/bg2.png" alt="bg"></div>
        </div>
    </div>

    <div class="articles-section-images"><img src="front/images/articles/bg3.png" alt="bg"></div>

    <div class="latest-news">
        <div class="container">
            <div class="latest-news-inner">

                @foreach (config('constants.MEDIA')['ARTICLE'] as $key => $media)

                    @if($key > 3)
                        <div class="latest-news-box hide_media" style="display:none">
                    @else
                        <div class="latest-news-box ">
                    @endif
                        <div class="images-box order-lg-1 order-2">
                            <div class="img-destop">
                                <img src="front/images/{{$media['web_image']}}" alt="news">
                            </div>
                            <div class="img-mobile">
                                <img src="front/images/{{$media['mobile_image']}}" alt="news">
                            </div>
                        </div>
                        <div class="latest-content order-lg-2 order-1">
                            <div class="img-destop">
                                <h4>{{ $media['title'] }}</h4>
                            </div>
                            <div class="img-mobile">
                                <h4>{{ $media['title'] }}</h4>
                            </div>
                            <div class="date">
                                <p>{{ $media['date'] }}</p>
                            </div>
                            <p>{{ $media['description'] }}</p>
                            <div class="lat-read-more-button">
                                @if($media['type'] == 'article')
                                    <a href="{{ $media['link'] }}" target="_blank">Read More <span><img src="front/images/benz-option/right-arrow.png"
                                                                alt="arrow"></span></a>
                                @else
                                    <a href="{{ route('print', $media['link']) }}" target="_blank">Read More <span><img src="front/images/benz-option/right-arrow.png"
                                                                alt="arrow"></span></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if($key == 3)
                        <div id="media_view_all">
                            <div class="lat-read-more-button">
                                <a href="javascript:void(0)">View All<span><img src="front/images/benz-option/right-arrow.png" alt="arrow"></span></a>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach (config('constants.MEDIA')['PRINT'] as $key => $media)

                    <div class="latest-news-box hide_media" style="display:none">
                        <div class="images-box order-lg-1 order-2">
                            <div class="img-destop">
                                <img src="front/images/{{$media['web_image']}}" alt="news">
                            </div>
                            <div class="img-mobile">
                                <img src="front/images/{{$media['mobile_image']}}" alt="news">
                            </div>
                        </div>
                        <div class="latest-content order-lg-2 order-1">
                            <div class="img-destop">
                                <h4>{{ $media['title'] }}</h4>
                            </div>
                            <div class="img-mobile">
                                <h4>{{ $media['title'] }}</h4>
                            </div>
                            <div class="date">
                                <p>{{ $media['date'] }}</p>
                            </div>
                            <p>{{ $media['description'] }}</p>
                            <div class="lat-read-more-button">
                                @if($media['type'] == 'article')
                                    <a href="{{ $media['link'] }}" target="_blank">Read More <span><img src="front/images/benz-option/right-arrow.png"
                                                                alt="arrow"></span></a>
                                @else
                                    <a href="{{ route('print', $key + 1) }}" target="_blank">Read More <span><img src="front/images/benz-option/right-arrow.png"
                                                                alt="arrow"></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="articles-section">
        <div class="container">
            <div class="title">
                <h3>VIDEOS</h3>
            </div>
            <div class="articles-inner-section">
                <div class="section-box-one">
                    <div class="articles-item">
                        <div class="images-box">
                            <div class="img-destop">
                                <img src="front/images/articles/videos/video-1.png" alt="news">
                            </div>
                            <div class="img-mobile">
                                <img src="front/images/articles/videos/video-1-mobile.png" alt="news">
                            </div>
                        </div>
                        <div class="latest-content">
                            <div class="img-destop">
                                <h4>Karnail Singh Cheema felicitated with Champions of Change Haryana Award</h4>
                            </div>
                            <div class="img-mobile">
                                <h4>Karnail Singh Cheema felicitated with Champions of Change Haryana Award</h4>
                            </div>
                            <div class="date">
                                <p>November 11, 2022</p>
                            </div>
                            <div class="lat-read-more-button">
                                <a href="https://youtu.be/n2jOXtXRJJk" target="_blank">Watch Now <span><img src="front/images/benz-option/right-arrow.png"
                                                                 alt="arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="articles-item">
                        <div class="images-box">
                            <div class="img-destop">
                                <img src="front/images/articles/videos/video-2.png" alt="news">
                            </div>
                            <div class="img-mobile">
                                <img src="front/images/articles/videos/video-2-mobile.png" alt="news">
                            </div>
                        </div>
                        <div class="latest-content">
                            <div class="img-destop">
                                <h4>K.S. Cheema speech at Hind Ratan Award</h4>
                            </div>
                            <div class="img-mobile">
                                <h4>K.S. Cheema speech at Hind Ratan Award</h4>
                            </div>
                            <div class="date">
                                <p>15th Nov 2022</p>
                            </div>
                            <div class="lat-read-more-button">
                                <a href="https://youtu.be/6Elwqmj971E" target="_blank">Watch Now <span><img src="front/images/benz-option/right-arrow.png"
                                                                 alt="arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box-two">
                    <div class="articles-item">
                        <div class="images-box">
                            <div class="img-destop">
                                <img src="front/images/articles/videos/video-3.png" alt="news">
                            </div>
                            <div class="img-mobile">
                                <img src="front/images/articles/videos/video-3-mobile.png" alt="news">
                            </div>
                        </div>
                        <div class="latest-content">
                            <div class="img-destop">
                                <h4>Signing ceremony of first ever private methanol project in the Sultanate of Oman by Omzest Group.</h4>
                            </div>
                            <div class="img-mobile">
                                <h4>Signing ceremony of first ever private methanol project in the Sultanate of Oman by Omzest Group.</h4>
                            </div>
                            <div class="date">
                                <p>15th Nov 2022</p>
                            </div>
                            <div class="lat-read-more-button">
                                <a href="https://youtu.be/gZ4lI_ha-Us" target="_blank">Watch Now <span><img src="front/images/benz-option/right-arrow.png"
                                                                 alt="arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
