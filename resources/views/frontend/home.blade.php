@extends('frontend.layouts.main')
@section('main-container')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .rs-team.style1 .team-item:after {
            position: unset !important;
        }

        .rs-counter {
            background-color: #dc3741;
            padding: 80px 0;
        }

        .counter-item {
            background-color: #dc3741;

            border-right: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;

        }

        .counter-item .rs-count {
            font-size: 40px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .counter-item .title {
            font-size: 18px;
        }

        .slidehead {
            font-size: 50px !important;
            /* Default for desktop */
            font-weight: 700 !important;
        }

        @media (max-width: 767.98px) {
            .slidehead {
                font-size: 25px !important;
                /* Mobile view */
                font-weight: 700 !important;
            }
        }

        .facility {
            display: flex;
            flex-wrap: wrap;
            padding: 40px;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }

        .text-section {
            flex: 1 1 500px;
            background: #59c4ff;
            padding: 30px;
            border-radius: 12px;
            color: #000;
            font-size: 18px;
            line-height: 1.8;
        }

        .text-section h2 {
            color: red;
        }

        .image-section {
            flex: 1 1 300px;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }
    </style>
    <div class="main-content">
        <!-- Banner Section Start -->
        <div id="rs-banner-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="rs-banner style4">
                        <div class="container relative">
                            <div class="row relative">
                                <div class="col-lg-9 lg-pl-0">
                                    <div class="banner-line-shape js-tilt">
                                        <img src="{{asset('/public/assets/images/banner/banner-line.png')}}"
                                            alt="Banner Line">
                                    </div>
                                    <div class="banner-content pb-13">
                                        <h1 class="banner-title white-color wow fadeInLeft slidehead" data-wow-delay="300ms"
                                            data-wow-duration="3000ms">
                                            कृष्णायन इंस्टीट्यूट ऑफ मेडिकल साइंस
                                        </h1>

                                    </div>
                                    <div class="banner-circle-shape js-tilt">
                                        <img src="{{asset('/public/assets/images/banner/banner-circle.png')}}"
                                            alt="Banner Circle">
                                    </div>
                                </div>
                            </div>
                            <div class="banner-dots-shape js-tilt">
                                <img src="{{asset('/public/assets/images/banner/banner-dots.png')}}" alt="Banner Dots">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item">
                    <div class="rs-banner style4">
                        <div class="container relative">
                            <div class="row relative">
                                <div class="col-lg-9 lg-pl-0">
                                    <div class="banner-line-shape js-tilt">
                                        <img src="{{asset('/public/assets/images/banner/banner-line.png')}}"
                                            alt="Banner Line">
                                    </div>
                                    <div class="banner-content pb-13">
                                        <h1 class="banner-title white-color wow fadeInLeft slidehead" data-wow-delay="300ms"
                                            data-wow-duration="3000ms">
                                            कृष्णायन इंस्टीट्यूट ऑफ मेडिकल साइंस के साथ जुड़कर अपना खुद का पैरामेडिकल कॉलेज
                                            ओपन करने के लिए संपर्क करें
                                        </h1>
                                        <div class="banner-btn wow fadeInUp" data-wow-delay="500ms"
                                            data-wow-duration="3000ms">
                                            <a class="readon2 banner-style" href="{{ url('frechicy') }}"
                                                style="margin-left: 40px">Join Now</a>
                                        </div>
                                    </div>
                                    <div class="banner-circle-shape js-tilt">
                                        <img src="{{asset('/public/assets/images/banner/banner-circle.png')}}"
                                            alt="Banner Circle">
                                    </div>
                                </div>
                            </div>
                            <div class="banner-dots-shape js-tilt">
                                <img src="{{asset('/public/assets/images/banner/banner-dots.png')}}" alt="Banner Dots">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#rs-banner-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#rs-banner-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- Banner Section End -->

        <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background-color: #E6F4FA">
            <div class="container">
                <div class="row align-items-center">


                    <div class="col-lg-5 pl-60 order-last md-pl-15 md-mb-60">
                        <div class="img-part js-tilt">
                            {{-- <img class="" src="{{asset('/public/assets/images/photos/image1.jpeg')}}" alt=""> --}}

                            <div class="mt-5">
                                <img src="/public/assets/images/courses/team_1.jpg" alt=""
                                    style="height: 350px; !important">
                                <h3 class="mt-3 fw-bold ">DR Rajkumar Chauhan</h3>
                                <h5 class="">( Chairman KIMS )</h5>
                            </div>
                            <img class="shape top-center animated rotate infinite"
                                src="{{asset('/public/assets/images/about/image-center-circle.png')}}"
                                alt="Cirle Shape Img">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="sub-title primary primary-text-red-color">About Us</div>
                            <h2 class="title text-danger">Welcome to <br>Krishnayan Institute Of Medical Science</h2>
                            <div class="desc pr-30 text-justify">
                                Welcome to KIMS <span class="font-weight-bold">Krishnayan Institute of Medical
                                    Sciences</span> a premier institute dedicated to shaping the future of healthcare
                                professionals through excellence in paramedical education. Established with a vision to
                                bridge the gap between demand and supply in the healthcare sector, we offer a range of
                                certified paramedical programs designed to equip students with both theoretical knowledge
                                and practical skills.

                                <p class="text-justify">
                                    Our state-of-the-art infrastructure, experienced faculty, and industry-oriented
                                    curriculum ensure our students are well-prepared to serve with competence and
                                    compassion. At KIMS, we believe that healthcare is a calling and we are proud to nurture
                                    the next generation of healthcare heroes.
                                </p>
                            </div>
                        </div>
                        <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="readon2 primary-bg-red" href="{{url('/about')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Courses Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses style3 course-shape-bg pb-200 md-pb-170 sm-pb-100">
            <div class="container">
                <div class="row y-middle mb-50">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            {{-- <div class="sub-title primary">Top Courses</div> --}}
                            <h2 class="title mb-0 primary-text-blue-color mt-5">Our Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                    data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                    data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                    data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                    data-md-device-nav="false" data-md-device-dots="false">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="{{asset('/public/assets/images/about/ot.jpeg')}}" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/ot')}}">Diploma in Operation Theatre
                                    Technology</a></h3>

                        </div>
                    </div>

                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/about/ct.jpg" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/ctMR')}}">CT/MRI/X-RAY</a></h3>

                        </div>
                    </div>


                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/courses/dmlt.jpg" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/bmlt')}}">
                                    Bachelor in Medical Laboratory Technology (BMLT)
                                </a></h3>

                        </div>
                    </div>


                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/about/opthalmic.jpg" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/opthalmic')}}">OPHTHALMIC</a></h3>

                        </div>
                    </div>


                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/about/dresser.jpg" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/dresser')}}">Dresser</a></h3>

                        </div>
                    </div>


                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/courses/anm.png" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/anm')}}">ANM</a></h3>

                        </div>
                    </div>

                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/courses/dmlt.jpg" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/dmlt')}}">Diploma in Medical Lab
                                    Technician (DMLT)</a></h3>

                        </div>
                    </div>

                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/courses/ecg.jpg" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/anm')}}">ECG</a></h3>

                        </div>
                    </div>


                    <div class="courses-item">
                        <div class="img-part">
                            <img src="/public/assets/images/courses/gnm.webp" alt="">
                        </div>
                        <div class="content-part">

                            <h3 class="title primary-text-blue-color"><a href="{{url('/gnm')}}">GNM</a></h3>

                        </div>
                    </div>



                </div>
                <div class="view-all-btn text-center pt-50 mb-60 md-pt-30 md-mb-30"><a class="title-color"
                        href="{{url('allCourse')}}">View All Courses <i
                            class="flaticon-right-arrow ml-5 body-color"></i></a></div>
            </div>
        </div>
        <!-- Popular Courses Section End -->

        <!-- About Section Start -->
        {{-- <div class="rs-about video-style pt-120 pb-100 md-pt-90 md-pb-70">
            <div class="container relative">
                <div class="icon-shape js-tilt">
                    <img class="shape" src="/public/assets/images/about/icon-shape.png" alt="Icon Shape">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-part media-icon">
                            <img class="video-img" src="/public/assets/images/about/about-video-bg2.png" alt="Video Image">
                            <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                <i class="fa fa-play"></i>
                            </a>
                            <img class="dot-shape js-tilt" src="/public/assets/images/about/dot-shape.png" alt="Shape">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content gray-bg">
                            <div class="sec-title mb-46 md-mb-30 wow fadeInUp" data-wow-delay="300ms"
                                data-wow-duration="2000ms">
                                <div class="sub-title primary">How We Works</div>
                                <h2 class="title">Develope Your Skills<br>Shine Your Life</h2>
                                <div class="desc pr-30">
                                    The significance of paramedical courses has been realized by the increasing need for
                                    skilled paramedics in the medical field. This is important to mention that without
                                    paramedics the medical field would be crippled.
                                </div>
                            </div>
                            <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <a class="readon2" href="{{url('allCourse')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- About Section End -->

        <div class="rs-counter style2-about">
            <div class="container">
                <div class="row couter-area">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="counter-item text-center">
                            <h2 class="rs-count text-white">958</h2>
                            <h4 class="text-white mb-0">Awards & Recognition</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="counter-item text-center">
                            <h2 class="rs-count plus text-white">4523</h2>
                            <h4 class=" text-white mb-0">Enrolled Student</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="counter-item text-center">
                            <h2 class="rs-count plus text-white">120</h2>
                            <h4 class=" text-white mb-0">Expert Instructors</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item text-center">
                            <h2 class="rs-count percent text-white">100</h2>
                            <h4 class="text-white mb-0">Satisfaction Rate</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="rs-counter style2-about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter-item text-center">
                            <h2 class="text-white rs-count">958</h2>
                            <h4 class="text-white mb-0">Awards & Recognition</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter-item text-center">
                            <h2 class="text-white rs-count plus">4523+</h2>
                            <h4 class="text-white mb-0">Enrolled Student</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter-item text-center">
                            <h2 class="text-white rs-count plus">120+</h2>
                            <h4 class="text-white mb-0">Expert Instructors</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="counter-item text-center">
                            <h2 class="text-white rs-count percent">100%</h2>
                            <h4 class="text-white mb-0">Satisfaction Rate</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style1 pt-94 pb-100 md-pt-64 md-pb-70" style="background-color: #E6F4FA">
            <div class="container">
                <div class="sec-title mb-50 md-mb-30">
                    <div class="sub-title primary primary-text-red-color">Team</div>
                    <h2 class="title mb-0 primary-text-blue-color">Directiory Body</h2>
                </div>
                <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                    data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                    data-md-device-nav="true" data-md-device-dots="false">
                    {{-- <div class="team-item shadow">
                        <img src="/public/assets/images/courses/team_1.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-2 "><a class="primary-text-blue-color" href="">DR.R.K. CHAUHAN</a></h4> --}}
                            <!-- <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul> -->
                            {{--
                        </div>
                    </div> --}}
                    <div class="team-item shadow">
                        <img src="/public/assets/images/courses/team_2.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-2 "><a class="primary-text-blue-color" href="">AMAR KUMAR MANDAL</a></h4>
                            <!-- <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul> -->
                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/courses/team_3.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-2 "><a href="" class="primary-text-blue-color">DR. PRITI VERMA</a></h4>
                            <!-- <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section End -->


        {{-- advisory board --}}

        <div id="rs-team" class="rs-team style1 pb-100 md-pt-64 md-pb-70" style="background-color: #171F32">
            <div class="container">
                <div class="sec-title mb-50 md-mb-30 p-5">
                    <div class="sub-title text-white">Team</div>
                    <h2 class="title mb-0 text-white">Advisory Board</h2>
                </div>
                <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                    data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                    data-md-device-nav="true" data-md-device-dots="false">
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member5.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-5 text-white"><a href="" class="text-white">DR. Dipak Dubey ( MD Pathologist
                                    )</a></h4>
                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member1.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-5 text-white"><a href="" class="text-white">Dr. Rohit Agrwal ( MD
                                    Medicine)</a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member2.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-5 text-white"><a href="" class="text-white">Dr. Sandip Tiwari ( MBBS.MS)</a>
                            </h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member4.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-5 text-white"><a href="" class="text-white">DR. Akash Sharma ( Orthopeadics
                                    Surgen )</a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member6.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name mt-5 text-white"><a class="text-white" href="">Dr. Anupam Chaudhry ( DM
                                    Cardiologist )</a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member7.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="text-white name mt-5"><a class="text-white" href="">Dr. Arvind Pandit (state
                                    devlopment officer)</a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member8.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="name text-white mt-5"><a href="" class="text-white">
                                    Shri Shambhu Singh ( state public relation officer)
                                </a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member9.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="text-white name mt-5"><a class="text-white" href="">
                                    Dr. Mehta ( state coardinator)
                                </a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member10.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="text-white name mt-5"><a class="text-white" href="">
                                    Baliram ( district coardinator)
                                </a></h4>

                        </div>
                    </div>
                    <div class="team-item shadow">
                        <img src="/public/assets/images/board/member11.jpg" alt="" style="height: 350px;object-fit:cover;">
                        <div class="">
                            <h4 class="text-white name mt-5"><a href="" class="text-white">
                                    Shri Dipendra ( Advisor)
                                </a></h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section Start -->
        <div class="rs-cta">
            <div class="cta-img">
                <img src="/public/assets/images/cta/cta-bg.jpg" alt="">
            </div>
            <div class="cta-content text-center">
                <div class="sec-title mb-40 md-mb-20 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2 class="title mb-16 md-mb-10">Admission Open for 2025</h2>
                    <div class="desc text-justify">
                        We are now accepting applications for the upcoming academic session 2024-25. Join a vibrant learning
                        community with expert faculty, modern infrastructure, and career-driven programs. Don't miss your
                        chance! </div>
                </div>
                <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="readon2 primary-bg-red" href="{{'/register'}}">Register Now</a>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->


        <div class="facility">
            <h1>कृष्णायन इंस्टीट्यूट ऑफ मेडिकल साइंस ऑनलाइन क्लास के लिए निशुल्क टैब दिया जाएगा</h1>
            <div class="text-section">
                <h2>कोर्स के साथ निःशुल्क मिलने वाली सुविधाएँ</h2>
                <ol>
                    <li>ऑनलाइन क्लासेज की सुविधायें</li>
                    <li>100% जॉब असिस्टेंट की सुविधायें</li>
                    <li>MBBS & MD डॉक्टरों से प्रशिक्षण</li>
                    <li>फार्मासिस्ट के द्वारा दवाओं का प्रशिक्षण</li>
                    <li>व्यक्तित्व विकास का प्रशिक्षण</li>
                    <li>इंग्लिश स्पीकिंग कोर्स की सुविधायें</li>
                    <li>डिजिटल क्लासरूम</li>
                    <li>100% पावर बैकअप</li>
                    <li>लाइब्रेरी की सुविधायें</li>
                    <li>समय समय पर अस्पताल विजिट</li>
                    <li>समय समय पर हेल्थ चेकअप मेला</li>
                    <li>समय समय पर डोर टू डोर हेल्थ सर्वे</li>
                </ol>
            </div>
            <div class="image-section">
                <img src="{{asset('public/assets/images/courses/womenkims.png')}}" alt="Doctor Info Graphic">
            </div>
        </div>


        {{-- our affiliate account start --}}

        <div class="py-5" style="background-color: #283450;">
            <div class="container text-center">
                <div class="sec-title mb-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2 class="title mb-3 text-white">Our Affiliate Institutes</h2>
                </div>

                <div class="row justify-content-center g-4">
                    <!-- First Card -->
                    <div class="col-md-5">
                        <div class="card rounded-4" style="">
                            <img src="/public/assets/images/courses/team_2.jpg" alt="Institute 1"
                                class="card-img-top rounded-top-4"
                                style="margin-top:20px;height: 300px; object-fit: contain;">
                            <div class="mt-3">
                                <div>
                                    <h5 class="mb-0">Krishnayan Institute of Medical Science</h5>
                                    {{-- <p class=""> --}}
                                        <strong>Address:</strong> SM College Front, Swastik Tower, 1st Floor,<br>
                                        Khanjarpur, Bhagalpur - 812001
                                        {{--
                                    </p> --}}
                                    <p class=""><strong>Phone:</strong> 9955224626</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Card -->
                    <div class="col-md-5 d-none">
                        <div class="card rounded-4" style="">
                            <img src="/public/assets/images/courses/affiliate.jpeg" alt="Institute 2"
                                class="card-img-top rounded-top-4"
                                style="margin-top:20px;height: 300px; object-fit: contain;">
                            <div class="mt-3">
                                <div>
                                    <h5 class="mb-0">Krishnayan Institute of Medical Science</h5>
                                    {{-- <p class=""> --}}
                                        <strong>Address:</strong> Islampur, Nalanda,<br>
                                        Bihar - 801303
                                        {{--
                                    </p> --}}
                                    <p class=""><strong>Phone:</strong> 99342 41304</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- our affiliate account end --}}

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial style4 pt-100 pb-100 md-pt-70 md-pb-70" style="background-color: #E6F4FA">
            <div class="container relative">
                <div class="left-top-shape js-tilt">
                    <img src="/public/assets/images/shape/circle-shape.png" alt="">
                </div>
                <div class="sec-title mb-60 md-mb-30 text-center">
                    <div class="sub-title primary primary-text-red-color">Student Reviews</div>
                    <h2 class="title mb-0 primary-text-blue-color">What Our Students Says</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                    data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                    data-nav="false" data-nav-speed="false" data-md-device="3" data-md-device-nav="false"
                    data-md-device-dots="false" data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                    data-ipad-device-dots2="false" data-ipad-device="2" data-ipad-device-nav="false"
                    data-ipad-device-dots="false" data-mobile-device="1" data-mobile-device-nav="false"
                    data-mobile-device-dots="false">
                    <div class="testi-item">
                        <div class="row no-gutter">
                            {{-- <div class="col-md-4">
                                <div class="user-img">
                                    <img src="/public/assets/images/testimonial/style4/1.png" alt="">
                                </div>
                            </div> --}}
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">"KIMS has changed my life. The faculty and hands-on training helped me
                                        land a job right after my DMLT diploma!"</div>
                                    <p class="my-0">
                                        ⭐️⭐️⭐️⭐️⭐️
                                    </p>
                                    <a class="name" href="#">Priya</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-item">
                        <div class="row no-gutter">
                            {{-- <div class="col-md-4">
                                <div class="user-img">
                                    <img src="/public/assets/images/testimonial/style4/2.png" alt="">
                                </div>
                            </div> --}}
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>

                                    <div class="desc">"The Operation Theatre course at KIMS gave me the confidence to work
                                        in real-life surgical situations. Highly recommend it!"</div>
                                    <p class="my-0">
                                        ⭐️⭐️⭐️⭐️⭐️
                                    </p>
                                    <a class="name" href="#">Rakesh</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row no-gutter">
                            {{-- <div class="col-md-4">
                                <div class="user-img">
                                    <img src="/public/assets/images/testimonial/style4/3.png" alt="">
                                </div>
                            </div> --}}
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">"The emergency medical training was spot on—real-time simulations and
                                        excellent mentoring!"</div>
                                    <p class="my-0">
                                        ⭐️⭐️⭐️⭐️⭐️
                                    </p>
                                    <a class="name" href="#">Simran</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row no-gutter">
                            {{-- <div class="col-md-4">
                                <div class="user-img">
                                    <img src="/public/assets/images/testimonial/style4/4.png" alt="">
                                </div>
                            </div> --}}
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">"Highly qualified teachers and modern labs. KIMS lives up to its
                                        promise of quality education."</div>
                                    <p class="my-0">
                                        ⭐️⭐️⭐️⭐️⭐️
                                    </p>
                                    <a class="name" href="#">Ajay</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->


        @if(session('swal_message'))
            <script>
                Swal.fire({
                    icon: '{{ session('swal_message')['type'] }}',
                    title: '{{ session('swal_message')['title'] }}',
                    text: '{{ session('swal_message')['text'] }}',
                });
            </script>
        @endif
        <section class="py-5" style="background-color: #283450;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-5">
                        <div class="col-lg-12 text-center mb-4">
                            <h2 class="fw-bold text-white">🎓 Verify Your Certificate Verification</h2>
                            <p class="text-white">Enter your enrollment ID to check your approval status.</p>
                        </div>

                        <div class="col-md-12">
                            <form action="{{ route('admin.searchByEnrollment') }}" method="GET"
                                class="row g-3 shadow p-4 rounded bg-white">
                                <div class="col-md-9">
                                    <input type="text" name="enrol_id" class="form-control form-control-lg"
                                        placeholder="Enter Enrollment ID" required>
                                </div>
                                <div class="col-md-3 mt-3 mt-md-0 d-grid">
                                    <button type="submit" class="btn primary-bg-red btn-lg text-white">Verify</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-lg-12 text-center mb-4">
                            <h2 class="fw-bold text-white">🎓 Verify Your Admisssion Verification</h2>
                            <p class="text-white">Enter your enrollment ID to check your approval status.</p>
                        </div>

                        <div class="col-md-12">
                            <form action="{{ route('admin.searchByEnrollment') }}" method="GET"
                                class="row g-3 shadow p-4 rounded bg-white">
                                <div class="col-md-9">
                                    <input type="text" name="enrol_id" class="form-control form-control-lg"
                                        placeholder="Enter Enrollment ID" required>
                                </div>
                                <div class="col-md-3 mt-3 mt-md-0 d-grid">
                                    <button type="submit" class="btn btn-lg primary-bg-red text-white">Verify</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if(session('swal_message'))
                        <script>
                            Swal.fire({
                                icon: '{{ session('swal_message')['type'] }}',
                                title: '{{ session('swal_message')['title'] }}',
                                text: '{{ session('swal_message')['text'] }}',
                                confirmButtonColor: '#3085d6'
                            });
                        </script>
                    @endif
                </div>
            </div>
            @if(session('user_data'))
                @php $user = session('user_data'); @endphp
                <div class="container mt-5">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0">Enrollment Details</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Enrollment ID</th>
                                    <td>{{ $user->enrol_id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Course</th>
                                    <td>{{ strtoupper($user->course) }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><span class="badge bg-success">Approved</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection