@extends('frontend.layouts.main')
@section('main-container')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="/public/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Team</h1>
                <ul>
                    <li>
                        <a class="active" href="{{url('/')}}">Home</a>
                    </li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style1 inner-style orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
            <div class="container">
                <div class="sec-title mb-50 md-mb-30 text-center">
                    <div class="sub-title orange">Team</div>
                    <h2 class="title mb-0">Directory Body</h2>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-item">
                            <img src="/public/assets/images/courses/team_1.jpg" alt="" style="height: 400px;">
                            <div class="content-part">
                                <h4 class="name"><a href="">DR.R.K. CHAUHAN</a></h4> --}}
                                {{-- <span class="designation">Professor</span> --}}
                                <!-- <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul> -->
                            {{-- </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-item">
                            <img src="/public/assets/images/courses/team_2.jpg" alt="" style="height: 400px;">
                            <div class="content-part">
                                <h4 class="name"><a href="">AMAR KUMAR MANDAL</a></h4>
                                {{-- <span class="designation">Professor</span> --}}
                                <!-- <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-item">
                            <img src="/public/assets/images/courses/team_3.jpg" alt="" style="height: 400px;">
                            <div class="content-part">
                                <h4 class="name"><a href="">DR. PRITI VERMA</a></h4>
                                {{-- <span class="designation">Professor</span> --}}
                                <!-- <ul class="social-links">
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
        </div>
        <!-- Team Section End -->

    </div> 
    <!-- Main content End --> 
@endsection