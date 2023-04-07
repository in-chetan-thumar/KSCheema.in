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



        <video width="100%" height="401" controls>
            <source src="front/images/video.mp4" type="video/mp4">
            <source src="front/images/video.ogg" type="video/ogg">
        </video>


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

    <div class="stories container reveal">
        <h3>stories</h3>
        <div class="owl-carousel stories-slider owl-theme reveal">
            <div class="item">
                <div class="stories-box">
                    <video width="100%" height="471" controls>
                        <source src="front/images/reel-1.mp4" type="video/mp4">
                        <source src="front/images/reel-1.ogg" type="video/ogg">
                    </video>
                    <div class="stories-detail">
                        <p><strong>Tejas Ardeshna</strong></p>
                        <p>CEO Metrix </p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="stories-box">
                    <video height="471" controls poster="front/images/career/r2.png">
                        <source src="front/images/career/r2.png" type="video/mp4">
                    </video>
                    <div class="stories-detail">
                        <p><strong>Tejas Ardeshna</strong></p>
                        <p>CEO Metrix </p>
                    </div>
                    <div class="video-play">
                        <img src="front/images/career/video-p.png" alt="video-play">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="stories-box">
                    <video height="471" controls poster="front/images/career/r3.png">
                        <source src="front/images/career/r2.png" type="video/mp4">
                    </video>
                    <div class="stories-detail">
                        <p><strong>Tejas Ardeshna</strong></p>
                        <p>CEO Metrix </p>
                    </div>
                    <div class="video-play">
                        <img src="front/images/career/video-p.png" alt="video-play">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="stories-box">
                    <video height="471" controls poster="front/images/career/r4.png">
                        <source src="front/images/career/r2.png" type="video/mp4">
                    </video>
                    <div class="stories-detail">
                        <p><strong>Tejas Ardeshna</strong></p>
                        <p>CEO Metrix </p>
                    </div>
                    <div class="video-play">
                        <img src="front/images/career/video-p.png" alt="video-play">
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
