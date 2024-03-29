@extends('front.layouts.master')

@section('title') Contact @endsection

@section('content')
    <div class="contact-bg">
        <div class="contact-here">
            <div class="blank">
                <div class="line-icon-section">
                    <img src="front/images/contact/bg1.png" alt="contact">
                </div>
            </div>
            <div class="index">
                <div class="inbox">
                    <h1>We want to hear from you!</h1>
                    <p>We welcome feedback, suggestions, queries, and appreciation in our inbox! Feel free to reach out
                        to us.</p>
                </div>
                <div class="information">
                    <h1>Let's talk! </h1>
                    <a href="tel:+917104238121">+91 7104238121/41</a>
                    <a href="mailto:cmdoffice@centralstar.co.in">cmdoffice@centralstar.co.in</a>
                </div>
            </div>
        </div>
    </div>
    <div class="our-companies-map-slider ">
        <h2>OUR COMPANIES</h2>
        <div class="owl-carousel map-section owl-theme">
            @foreach (config('constants.MERCEDES_BENZ') as $key => $location_detail)
                <div class="item">
                    <div class="map-sectopn-box">
                        <div class="contact-location-block">
                            <h3> {{ $location_detail['name'] }}</h3>
                            <h4> {{ $location_detail['short_line'] }} {{ $location_detail['location_type'] }}</h4>
                            <p>{{ $location_detail['address'] }}</p>
                        </div>
                        <a href="tel:+{{ $location_detail['phone'] }}">{{ $location_detail['phone'] }}</a>
                        <div id="map{{ $key}}" style="width: 280px;height:380px"></div>
                    </div>
                </div>
            @endforeach

            @foreach (config('constants.ATHER') as $key => $location_detail)
                <div class="item">
                    <div class="map-sectopn-box">                        
                        <div class="contact-location-block">
                            <h3> {{ $location_detail['name'] }}</h3>
                            <h4> {{ $location_detail['short_line'] }} {{ $location_detail['location_type'] }}</h4>
                            <p>{{ $location_detail['address'] }}</p>
                        </div>
                        <a href="tel:+{{ $location_detail['phone'] }}">{{ $location_detail['phone'] }}</a>
                        <div id="map{{ $key + count(config('constants.MERCEDES_BENZ')) }}" style="width: 280px;height:380px"></div>
                    </div>
                </div>
            @endforeach

            @foreach (config('constants.CARWALE') as $key => $location_detail)
                <div class="item">
                    <div class="map-sectopn-box">
                        <div class="contact-location-block">
                            <h3> {{ $location_detail['name'] }}</h3>
                            <h4> {{ $location_detail['short_line'] }} {{ $location_detail['location_type'] }}</h4>
                            <p>{{ $location_detail['address'] }}</p>
                        </div>
                        <a href="tel:+{{ $location_detail['phone'] }}">{{ $location_detail['phone'] }}</a>
                        <div id="map{{ $key + count(config('constants.MERCEDES_BENZ')) + count(config('constants.ATHER')) }}" style="width: 280px;height:380px"></div>
                    </div>
                </div>
            @endforeach

            @foreach (config('constants.ALTIGREEN') as $key => $location_detail)
                <div class="item">
                    <div class="map-sectopn-box">
                        <div class="contact-location-block">
                            <h3> {{ $location_detail['name'] }}</h3>
                            <h4> {{ $location_detail['short_line'] }} {{ $location_detail['location_type'] }}</h4>
                            <p>{{ $location_detail['address'] }}</p>
                        </div>
                        <a href="tel:+{{ $location_detail['phone'] }}">{{ $location_detail['phone'] }}</a>
                        <div id="map{{ $key + count(config('constants.MERCEDES_BENZ')) + count(config('constants.ATHER')) + count(config('constants.CARWALE'))  }}" style="width: 280px;height:380px"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="container reveal">
        <div class="contact-grup">
            <div class="contact-form">
                <form method="post" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input name="fname" type="text" class="feedback-input" placeholder="John" id="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input name="lname" type="text" class="feedback-input" placeholder="Doe" id="lname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input name="email" type="text" class="feedback-input" id="email"
                               placeholder="johndoe@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone (Optional)</label>
                        <input name="phone" type="number" class="feedback-input" placeholder="" id="name">
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea name="message" class="feedback-input" id="Message"
                                  placeholder="Type your Messege"></textarea>
                    </div>
                    <button type="submit" class="form-button">Send Details<img src="front/images/contact/Arrow-button.png" alt=""></button>
                </form>
            </div>
            <div class="contact-image">
                <img class="image-1 " src="front/images/contact/image.png" alt="">
                <img class="image-2 " src="front/images/contact/image-2.png" alt="">
            </div>
        </div>
    </div>


@endsection
@section('script')


@endsection
