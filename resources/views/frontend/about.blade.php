@extends('frontend.layouts.main')
@section('main-container')
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/public/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">About Us</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/') }}">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class="" src="{{asset('/public/assets/images/photos/image6.jpeg')}}">
                    </div>
                </div>
                <div class="col-lg-6 pr-70 md-pr-15">
                    <div class="sec-title">
                        <div class="sub-title orange">About Us</div>
                        <h2 class="title mb-17">Welcome to
                            Krishnayan Institute Of Medical Science Foundation</h2>

                        <div class="desc">
                            Welcome to KIMS <span class="font-weight-bold text-justify">Krishnayan Institute of Medical Sciences</span> a premier institute dedicated to shaping the future of healthcare professionals through excellence in paramedical education. Established with a vision to bridge the gap between demand and supply in the healthcare sector, we offer a range of certified paramedical programs designed to equip students with both theoretical knowledge and practical skills.

                            <p class=" text-justify">
                                Our state-of-the-art infrastructure, experienced faculty, and industry-oriented curriculum ensure our students are well-prepared to serve with competence and compassion. At KIMS, we believe that healthcare is a calling and we are proud to nurture the next generation of healthcare heroes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- CTA Section Start -->
    {{-- <div class="rs-cta style2">
            <div class="partition-bg-wrap inner-page">
                <div class="container">
                    <div class="row y-bottom">
                        <div class="col-lg-6 pb-50 md-pt-70 md-pb-70">
                            <div class="video-wrap">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                        <i class="fa fa-play"></i>
                                        <h4 class="title mb-0">Take a Video  Tour at Educavo</h4>
                                    </a>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-62 pt-134 pb-150 md-pt-50 md-pb-50 md-pl-15">
                            <div class="sec-title mb-40 md-mb-20">
                                    <h2 class="title mb-16">Admission Open for 2020</h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum sociis natoque penatibus et magnis.</div>
                            </div>
                            <div class="btn-part">
                                    <a class="readon2 orange" href="#">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- CTA Section End -->

    <!-- Counter Section Start -->
    <div id="rs-counter" class="rs-counter style2-about pt-100 md-pt-70">
        <div class="container">
            <div class="row couter-area">
                <div class="col-md-4 sm-mb-30">
                    <div class="counter-item text-center">
                        <div class="counter-bg">
                            <img src="/public/assets/images/counter/bg1.png" alt="Counter Image">
                        </div>
                        <div class="counter-text">
                            <h2 class="rs-count kplus">2</h2>
                            <h4 class="title mb-0">Students</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sm-mb-30">
                    <div class="counter-item text-center">
                        <div class="counter-bg">
                            <img src="/public/assets/images/counter/bg2.png" alt="Counter Image">
                        </div>
                        <div class="counter-text">
                            <h2 class="rs-count">3.50</h2>
                            <h4 class="title mb-0">Average CGPA</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-item text-center">
                        <div class="counter-bg">
                            <img src="/public/assets/images/counter/bg3.png" alt="Counter Image">
                        </div>
                        <div class="counter-text">
                            <h2 class="rs-count percent">95</h2>
                            <h4 class="title mb-0">Graduates</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- About Section Start -->
    <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class="" src="/public/assets/images/photos/image2.jpeg" alt="About Image">
                    </div>
                    <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                        <li class="nav-item tab-btns single-history">
                            <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab" href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span class="icon-part"><i class="flaticon-banknote"></i></span>History</a>
                        </li>
                        <li class="nav-item tab-btns single-history">
                            <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i class="flaticon-flower"></i></span>Mission</a>
                        </li>
                        <li class="nav-item tab-btns single-history last-item">
                            <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i class="flaticon-analysis"></i></span>Vision</a>
                        </li>
                    </ul>
                </div>
                <div class="offset-lg-1"></div>
                <div class="col-lg-5">
                    <div class="tab-content tabs-content" id="myTabContent">
                        <div class="tab-pane tab fade show active" id="about-history" role="tabpanel" aria-labelledby="about-history-tab">
                            <div class="sec-title mb-25">
                                <h2 class="title">Our History</h2>
                                <div class="desc text-justify ">
                                    Krishnayan Institute of Medical Sciences (KIMS) was founded with a simple yet powerful goal: to provide quality paramedical education to aspiring students in rural and urban communities alike.

                                    What began as a small training center has evolved into a full-fledged institution offering multiple diploma and certificate programs in allied health sciences. Over the years, we have built strong relationships with hospitals, clinics, and diagnostic labs, giving our students an edge in practical exposure and job readiness.

                                    Our journey has been fueled by our commitment to serve, educate, and empower and we continue to grow each year with stronger programs, better infrastructure, and broader outreach.

                                </div>
                            </div>
                            <!-- <div class="tab-img">
                                    <img class="" src="/public/assets/images/about/tab1.jpg" alt="Tab Image">
                                </div> -->
                        </div>
                        <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                            <div class="sec-title mb-25">
                                <h2 class="title">Our Mission</h2>
                                <div class="desc text-justify">
                                    At KIMS, our mission is to provide high-quality, accessible, and affordable paramedical education that empowers students with the skills, confidence, and ethical values needed to serve in the healthcare sector. We aim to:

                                    <ul>
                                        <li>● Develop competent paramedical professionals through rigorous academic and hands-on training.</li>
                                        <li>● Promote compassion, discipline, and integrity among students.</li>
                                        <li>
                                            ● Ensure continuous improvement in teaching methodologies and learning environments.</li>
                                        <li>
                                            ● Contribute to society by addressing the shortage of skilled healthcare workers.
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- <div class="tab-img">
                                    <img class="" src="/public/assets/images/about/tab2.jpg" alt="Tab Image">
                                </div> -->
                        </div>
                        <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                            <div class="sec-title mb-25">
                                <h2 class="title">Our Vision</h2>
                                <div class="desc text-justify">
                                    Our vision is to be recognized as a center of excellence in paramedical education and healthcare training across India. We strive to:
                                    <ul>
                                        <li>● Become a trusted name in healthcare education through innovation, quality, and commitment.</li>
                                        <li>●
                                            Foster partnerships with hospitals, research centers, and healthcare institutions for real-world exposure.
                                        </li>
                                        <li>
                                            ● Inspire a new generation of medical support staff who uphold the dignity and service values of the healthcare profession.</li>

                                    </ul>


                                </div>
                            </div>
                            <!-- <div class="tab-img">
                                    <img class="" src="/public/assets/images/about/tab3.jpg" alt="Tab Image">
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Intro Info Tabs-->
            <div class="intro-info-tabs">

            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Team Section Start -->
    <!-- <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
        <div class="container">
            <div class="sec-title mb-50 md-mb-30">
                <div class="sub-title orange">Instructor</div>
                <h2 class="title mb-0">Expert Teachers</h2>
            </div>
            <div class="rs-carousel owl-carousel nav-style2 orange-color" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <div class="team-item">
                    <img src="/public/assets/images/team/1.jpg" alt="">
                    <div class="content-part">
                        <h4 class="name"><a href="team-single.html">Vaibhav Rai</a></h4>
                        <span class="designation">Professor</span>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item">
                    <img src="/public/assets/images/team/2.jpg" alt="">
                    <div class="content-part">
                        <h4 class="name"><a href="team-single.html">Leena Yadav</a></h4>
                        <span class="designation">Professor</span>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item">
                    <img src="/public/assets/images/team/3.jpg" alt="">
                    <div class="content-part">
                        <h4 class="name"><a href="team-single.html">Ishwar Nishad</a></h4>
                        <span class="designation">Professor</span>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team Section End -->

    <!-- Testimonial Section Start -->
    {{-- <div class="rs-testimonial style2 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pr-90 md-pr-15 md-mb-30">
                        <div class="donation-part">
                            <img src="/public/assets/images/donor/1.jpg" alt="">
                            <h3 class="title mb-10">Donation helps us</h3>
                            <div class="desc mb-38">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua  enims ad minim.</div>
                            <div class="btn-part">
                                    <a class="readon2 orange" href="#">Become a donor</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 lg-pl-0 ml--15 md-ml-0">
                        <div class="testi-wrap mb-50">
                            <div class="img-part">
                                <img src="/public/assets/images/testimonial/style2/1.jpg" alt="">
                            </div>
                            <div class="content-part new-content pt-12">
                                <div class="desc">Education is the passport to the future for tomorrow belongs to those who prepare for it today</div>
                                <div class="info">
                                    <h5 class="name">Mahadi mansura</h5>
                                    <div class="designation">Head Teacher</div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap">
                            <div class="img-part">
                                <img src="/public/assets/images/testimonial/style2/2.jpg" alt="">
                            </div>
                            <div class="content-part new-content pt-12">
                                <div class="desc">Education is the passport to the future for tomorrow belongs to those who prepare for it today</div>
                                <div class="info">
                                    <h5 class="name">Jonathon Lary</h5>
                                    <div class="designation">Math Teacher</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Testimonial Section End -->
</div>
@endsection