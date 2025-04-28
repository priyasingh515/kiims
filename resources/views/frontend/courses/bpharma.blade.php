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
            <h1 class="page-title">B. Pharma Course</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/') }}">Home</a>
                </li>
                <li>Course Details</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Intro Courses -->
    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="col-lg-8 md-mb-50">
                    <!-- Intro Info Tabs-->
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
                            <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                <div class="content white-bg pt-30">
                                    <!-- Course Overview -->
                                    <div class="course-overview">
                                        <div class="inner-box">
                                            <h4>B. Pharma Course</h4>
                                            <h3>What you’ll learn?</h3>
                                            <p>
                                                The Bachelor of Pharmacy (B. Pharma) course is a four-year undergraduate program that teaches students the principles of pharmacy, pharmacology, pharmaceutical chemistry, and pharmacy practice. The course prepares students for careers in healthcare, clinical pharmacy, and research.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-curriculum" role="tabpanel" aria-labelledby="prod-curriculum-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Subject Name</td>
                                            <th>Semester/Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmaceutical Chemistry</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmacology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmaceutics</td>
                                            <th>2nd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmaceutical Biotechnology</td>
                                            <th>3rd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Clinical Pharmacy</td>
                                            <th>4th Year</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>
                                        Candidates must have completed 12th grade with Physics, Chemistry, and Biology/Mathematics as subjects. The B. Pharma course is designed for those passionate about working in the pharmaceutical industry and healthcare settings.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-faq" role="tabpanel" aria-labelledby="prod-faq-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>The admission process for the B. Pharma course involves:</p>
                                    <ul style="list-style: circle;">
                                        <li>Filling out the online application form.</li>
                                        <li>Providing the necessary documents (12th marksheet, ID proof, etc.).</li>
                                        <li>Entrance exam and interview (if applicable).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-4">
                    <div class="inner-column">
                        <!-- Video Box -->
                        <div class="intro-video media-icon orange-color2">
                            <img class="video-img" src="/public/assets/images/courses/bpharm.jpg" alt="Video Image">
                        </div>
                        <!-- End Video Box -->
                        <div class="course-features-info">
                            <ul>
                                <li class="duration-feature">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">Duration</span>
                                    <span class="value">4 years</span>
                                </li>
                                <li class="lectures-feature">
                                    <i class="fa fa-files-o"></i>
                                    <span class="label">Examination Type :</span>
                                    <span class="value">Semester and Annual</span>
                                </li>

                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Eligibility :</span>
                                    <span class="value">10+2 (Science + Maths/Biology)</span>
                                </li>

                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Course Level :</span>
                                    <span class="value">Degree</span>
                                </li>
                                <li class="students-feature">
                                    <i class="fa fa-users"></i>
                                    <span class="label">Language :</span>
                                    <span class="value">English</span>
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
    <!-- End intro Courses -->

</div>
<!-- Main content End -->
@endsection
