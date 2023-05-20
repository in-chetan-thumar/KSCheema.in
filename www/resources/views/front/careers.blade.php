@extends('front.layouts.master')

@section('title') Careers @endsection

@section('content')
    <div class="container career-section">
        <h1>Join A Team That's Dedicated To Helping You Succeed</h1>
        <a href="{{route('view.open.positions')}}" class="view-open-button">View Open Positions<img
                src="front/images/career/arrow-white.png" alt="arrow"></a>
    </div>

    <div class="success-environment container">
        <h2>Success-Driven Environment</h2>

        <div class="success-environment-section">
            <div class="environment-box">
                <div class="box-icon">
                    <img src="front/images/career/driven-bg.png" alt="driven-bg">
                    <div class="icon">
                        <img src="front/images/career/icon1.png" alt="icon">
                    </div>
                </div>
                <h3>A Professional Work Culture</h3>
                <p>A work environment that is leveraged by a supportive team of champions.</p>
            </div>
            <div class="environment-box">
                <div class="box-icon">
                    <img src="front/images/career/driven-bg.png" alt="driven-bg">
                    <div class="icon">
                        <img src="front/images/career/icon2.png" alt="icon">
                    </div>
                </div>
                <h3>A Growth-Centric Workplace</h3>
                <p>A dynamic leadership team that is ambitious and focused on fast-paced growth.</p>
            </div>
            <div class="environment-box">
                <div class="box-icon">
                    <img src="front/images/career/driven-bg.png" alt="driven-bg">
                    <div class="icon">
                        <img src="front/images/career/icon3.png" alt="icon">
                    </div>
                </div>
                <h3>An Employee-Centric Approach</h3>
                <p>A company that believes in the power of feedback and open communication in employees' growth.</p>
            </div>
            <div class="environment-box">
                <div class="box-icon">
                    <img src="front/images/career/driven-bg.png" alt="driven-bg">
                    <div class="icon">
                        <img src="front/images/career/icon4.png" alt="icon">
                    </div>
                </div>
                <h3>Employee Health Programs</h3>
                <p>Supporting the overall well-being of employees to enhance their quality of life.</p>
            </div>
            <div class="environment-box">
                <div class="box-icon">
                    <img src="front/images/career/driven-bg.png" alt="driven-bg">
                    <div class="icon">
                        <img src="front/images/career/icon5.png" alt="icon">
                    </div>
                </div>
                <h3>An Avenue of Opportunities</h3>
                <p>Giving the freedom to introduce innovative ideas and develop cross-functional skills.</p>
            </div>
            <div class="environment-box">
                <div class="box-icon">
                    <img src="front/images/career/driven-bg.png" alt="driven-bg">
                    <div class="icon">
                        <img src="front/images/career/icon6.png" alt="icon">
                    </div>
                </div>
                <h3>Salary, Rewards & Incentives</h3>
                <p>Offering competitive salaries and incentives with timely and attractive rewards.</p>
            </div>
        </div>
    </div>

    <div class="welcome-in-style reveal">
        <h3>Welcome In Style</h3>

        <iframe width="1000" height="400" src="https://www.youtube-nocookie.com/embed/JjMSvMFp0R0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <!-- <video width="100%" height="401" controls>
            <source src="https://youtu.be/JjMSvMFp0R0" type="video/mp4">
            <source src="front/images/video.ogg" type="video/ogg">
        </video> -->


    </div>

    <div class="side-of-work container reveal">
        <h3>The Fun Side of Work</h3>
        <div class="owl-carousel side-of-work-slider owl-theme reveal">
            <div class="item">
                <img src="front/images/career/slider1.png" alt="slider">
            </div>
            <div class="item">
                <img src="front/images/career/slider2.png" alt="slider">
            </div>
            <div class="item">
                <img src="front/images/career/slider3.png" alt="slider">
            </div>
        </div>
    </div>

    <div class="group-values container reveal">
        <h3>group values</h3>
        <div class="group-values-section">
            <div class="values-box">
                <div class="images-icon">
                    <img src="front/images/career/v1.png" alt="values1">
                </div>
                <h6>Hire, Retain & Develop the Best</h6>
                <p>Aspire to be the “Great Place to Work”</p>
            </div>
            <div class="values-box">
                <div class="images-icon">
                    <img src="front/images/career/v2.png" alt="values2">
                </div>
                <h6>Prioritize Customer First</h6>
                <p>Customer Centricity</p>
            </div>
            <div class="values-box">
                <div class="images-icon">
                    <img src="front/images/career/v3.png" alt="values3">
                </div>
                <h6>Grow</h6>
                <p>Customer, Revenue & Profit</p>
            </div>
            <div class="values-box">
                <div class="images-icon">
                    <img src="front/images/career/v4.png" alt="values4">
                </div>
                <h6>Practice</h6>
                <p>Passion, Empathy, Discipline, Integrity & Transparency</p>
            </div>
        </div>
    </div>
    <div class="numbers-section">
        <div class="container">
            <h4>numbers</h4>
            <div class="numbers-inner">
                <div class="numbers-box">
                    <div class="box-image">
                        <img src="front/images/career/number.png" alt="images">
                    </div>
                    <div class="box-info">
                        <h6>10x</h6>
                        <p> Team Size in 10 Years</p>
                    </div>
                </div>
                <div class="numbers-box">
                    <div class="box-image">
                        <img src="front/images/career/number.png" alt="images">
                    </div>
                    <div class="box-info">
                        <h6>05</h6>
                        <p>LOCATIONS & counting</p>
                    </div>
                </div>
                <div class="numbers-box">
                    <div class="box-image">
                        <img src="front/images/career/number.png" alt="images">
                    </div>
                    <div class="box-info">
                        <h6>400+</h6>
                        <p>Employee Base</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stories-one container reveal">
        <!-- <h3><a href="{{route('careers.stories')}}">Stories</a></h3> -->
        <h3>Stories</h3>
        <div class="owl-carousel stories-one-slider owl-theme reveal">
            <div class="item">
                <div class="stories-one-box">
                    <div class="stories-one-info">
                        <div class="images-box">
                            <img src="front/images/career/mr-praveen.jpg" alt="testimonials">
                        </div>
                        <p>Although I have just joined the KS Cheema group, I have had the opportunity to work with Mr. KS Cheema on various projects in the last 6 years. I must say that every experience in those years and every day as an employee here is marked with a learning opportunity. If there's one key takeaway from my time here it's that taking decisions, whether successful or unsuccessful, and acting on them is the most crucial step to success. I will forever be grateful to the whole team at KS Cheema Group and always cherish my time with Mr. KS Cheema Sir.</p>
                    </div>
                    <div class="stories-one-detail">
                        <h6>Mr. Pravin Kumar</h6>
                        <p>Business Head, Garnet Motors</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="stories-one-box">
                    <div class="stories-one-info">
                        <div class="images-box">
                            <img src="front/images/career/mr-sachin.jpg" alt="testimonials">
                        </div>
                        <p>Words fail to express the gratitude I feel towards KS Cheema Group. As an ex-employee who re-joined the Garnet family, I am deeply thankful for the grand welcome, warm onboarding process, and heartfelt surprises on my day one back.  The organization culture is truly admirable and I feel blessed to be a part of it. I'd also like to take this opportunity to thank Mr. KS Cheema for his guidance and encouragement as I look forward to building a long-lasting relationship with the group. The organization truly makes me believe that with proper guidance and leadership anyone can achieve success in life.</p>
                    </div>
                    <div class="stories-one-detail">
                        <h6>Mr. Sachin Lambe</h6>
                        <p>VP - POC, Mercedes Benz Central Star Nagpur</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="stories-one-box">
                    <div class="stories-one-info">
                        <div class="images-box">
                            <img src="front/images/career/mr-dhanraj.jpg" alt="testimonials">
                        </div>
                        <p>In  my career of 22 years, I never knew that farewells could be so heartwarming. I am grateful to Mr. KS Cheema and the board of directors for making my time here so warm with memories that will last a lifetime. No matter where we are, we will always remember him and keep him in our highest regards. The KS Cheema Group is like a family to me, the memories and learnings of which I will cherish forever.</p>
                    </div>
                    <div class="stories-one-detail">
                        <h6>Mr. Dhanraj Kamdar</h6>
                        <p>CEO - Customer Services, Mercedes Benz Gujarat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="opportunities-now container reveal">
        <h4>Explore opportunities now.</h4>
        <a href="{{route('view.open.positions')}}" class="view-open-button">View All Openings<img
                src="front/images/career/arrow-white.png" alt="arrow"></a>
    </div>
@endsection
@section('script')

@endsection
