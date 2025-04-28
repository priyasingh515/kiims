@extends('frontend.layouts.main')
@section('main-container')
<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/public/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Bachelor in Medical Laboratory Technology (BMLT)</h1>
            <ul>
                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                <li>Course Details</li>
            </ul>
        </div>
    </div>

    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 md-mb-50">
                    <div class="intro-info-tabs">
                        <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                            <li class="nav-item tab-btns">
                                <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item tab-btns">
                                <a class="nav-link tab-btn" id="prod-curriculum-tab" data-toggle="tab" href="#prod-curriculum" role="tab" aria-controls="prod-curriculum" aria-selected="false">Subjects</a>
                            </li>
                            <li class="nav-item tab-btns">
                                <a class="nav-link tab-btn" id="prod-instructor-tab" data-toggle="tab" href="#prod-instructor" role="tab" aria-controls="prod-instructor" aria-selected="false">Requirements</a>
                            </li>
                            <li class="nav-item tab-btns">
                                <a class="nav-link tab-btn" id="prod-faq-tab" data-toggle="tab" href="#prod-faq" role="tab" aria-controls="prod-faq" aria-selected="false">Ad-process</a>
                            </li>
                        </ul>
                        <div class="tab-content tabs-content" id="myTabContent">
                            <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel">
                                <div class="content white-bg pt-30">
                                    <div class="course-overview">
                                        <div class="inner-box">
                                            <h4>Bachelor in Medical Laboratory Technology (BMLT)</h4>
                                            <h3>What you’ll learn?</h3>
                                            <p>This degree focuses on training students in laboratory diagnostic procedures. Graduates will gain expertise in analyzing clinical samples, operating advanced lab equipment, and understanding diagnostic processes under professional supervision.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-curriculum" role="tabpanel">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <table class="table table-striped">
                                        <tr><td>Human Anatomy</td><th>1st Year</th></tr>
                                        <tr><td>Physiology</td><th>1st Year</th></tr>
                                        <tr><td>Biochemistry</td><th>1st Year</th></tr>
                                        <tr><td>Microbiology</td><th>2nd Year</th></tr>
                                        <tr><td>Pathology</td><th>2nd Year</th></tr>
                                        <tr><td>Clinical Haematology</td><th>2nd Year</th></tr>
                                        <tr><td>Histopathology</td><th>3rd Year</th></tr>
                                        <tr><td>Immunology</td><th>3rd Year</th></tr>
                                        <tr><td>Clinical Biochemistry</td><th>3rd Year</th></tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>Students must have passed class 12th with Science stream (Physics, Chemistry, Biology/Mathematics) with a minimum of 50% from a recognized board.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-faq" role="tabpanel">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <ul style="list-style: circle;">
                                        <li>Visit the institution’s website and choose the BMLT course</li>
                                        <li>Fill out the registration form under the admissions section</li>
                                        <li>Contact the institute directly for any support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-column col-lg-4">
                    <div class="inner-column">
                        <div class="intro-video media-icon orange-color2">
                            <img class="video-img" src="/public/assets/images/about/dmit.jpg" alt="Video Image">
                        </div>
                        <div class="course-features-info">
                            <ul>
                                <li class="duration-feature">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">Duration</span>
                                    <span class="value">3 Years</span>
                                </li>
                                <li class="lectures-feature">
                                    <i class="fa fa-files-o"></i>
                                    <span class="label">Examination Type :</span>
                                    <span class="value">Semester</span>
                                </li>
                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Course level :</span>
                                    <span class="value">Bachelor Degree</span>
                                </li>
                                <li class="students-feature">
                                    <i class="fa fa-users"></i>
                                    <span class="label">Language :</span>
                                    <span class="value">Hindi/English</span>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a href="{{ url('register') }}" class="btn readon2 orange-transparent">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
