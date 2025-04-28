@extends('frontend.layouts.main')

@section('main-container')

<!-- Main content Start -->
<div class="main-content">


<div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/public/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">CMS & ED (Community Medical Services & Essential Drugs)</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/') }}">Home</a>
                </li>
                <li>Course Details</li>
            </ul>
        </div>
    </div>

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
                                            <h4>CMS & ED (Community Medical Services & Essential Drugs)</h4>
                                            <h3>What you’ll learn?</h3>
                                            <p>
                                                CMS & ED is a diploma course designed to train students in the basics of medical science and the use of essential drugs for primary healthcare. It enables practitioners to provide community-level healthcare services in rural and semi-urban areas, especially where doctors are unavailable.
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
                                            <th>Year</th>
                                        </tr>
                                        <tr>
                                            <td>Anatomy & Physiology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmacology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pathology & Microbiology</td>
                                            <th>2nd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Community Health & Nutrition</td>
                                            <th>2nd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Clinical Diagnosis & First Aid</td>
                                            <th>2nd Year</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>
                                        Eligibility: 10+2 passed in any stream (preferably with science background). Basic knowledge of human health, biology, and interest in primary medical care is recommended. Admission is often direct or based on merit.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-faq" role="tabpanel" aria-labelledby="prod-faq-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>The admission process generally includes:</p>
                                    <ul style="list-style: circle;">
                                        <li>Filling the application form online/offline</li>
                                        <li>Submission of educational documents</li>
                                        <li>Verification and counselling (if applicable)</li>
                                        <li>Direct admission in most cases</li>
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
                            <img class="video-img" src="/public/assets/images/courses/CMS-ED-13.png" alt="CMS & ED Course Image">
                        </div>
                        <!-- End Video Box -->
                        <div class="course-features-info">
                            <ul>
                                <li class="duration-feature">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">Duration</span>
                                    <span class="value">18 to 24 Months</span>
                                </li>
                                <li class="lectures-feature">
                                    <i class="fa fa-files-o"></i>
                                    <span class="label">Examination Type :</span>
                                    <span class="value">Theory & Practical</span>
                                </li>
                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Course Level :</span>
                                    <span class="value">Diploma</span>
                                </li>
                                <li class="students-feature">
                                    <i class="fa fa-users"></i>
                                    <span class="label">Language :</span>
                                    <span class="value">Hindi / English</span>
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
