@extends('frontend.layouts.main')
@section('main-container')
<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">ECG Technician</h1>
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
                                            <h4>ECG Technician</h4>
                                            <h3>What you’ll learn?</h3>
                                            <p>The ECG Technician course is designed to train students in the use and interpretation of electrocardiogram (ECG) machines. Students will learn how to record and monitor ECG readings, recognize abnormalities, and support cardiologists in patient diagnosis and care.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-curriculum" role="tabpanel">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <table class="table table-striped">
                                        <tr><td>Introduction to ECG</td><th>1st Semester</th></tr>
                                        <tr><td>Cardiac Anatomy and Physiology</td><th>1st Semester</th></tr>
                                        <tr><td>ECG Machine Operation</td><th>1st Semester</th></tr>
                                        <tr><td>Electrophysiology</td><th>2nd Semester</th></tr>
                                        <tr><td>ECG Interpretation Techniques</td><th>2nd Semester</th></tr>
                                        <tr><td>Common Cardiac Disorders</td><th>2nd Semester</th></tr>
                                        <tr><td>Clinical Training & Case Studies</td><th>2nd Semester</th></tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>Candidates must have completed 10+2 with Science stream (Biology/Mathematics preferred) from a recognized board. Basic understanding of human anatomy is desirable.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-faq" role="tabpanel">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <ul style="list-style: circle;">
                                        <li>Visit the institution’s website and select the ECG Technician course</li>
                                        <li>Fill out the application form under the admissions section</li>
                                        <li>Upload the required documents and submit</li>
                                        <li>Contact the institute for counseling or further steps</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-column col-lg-4">
                    <div class="inner-column">
                        <div class="intro-video media-icon orange-color2">
                            <img class="video-img" src="/assets/images/courses/ecg.jpg" alt="Video Image">
                        </div>
                        <div class="course-features-info">
                            <ul>
                                <li class="duration-feature">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">Duration</span>
                                    <span class="value">1 Year</span>
                                </li>
                                <li class="lectures-feature">
                                    <i class="fa fa-files-o"></i>
                                    <span class="label">Examination Type :</span>
                                    <span class="value">Semester</span>
                                </li>
                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Course level :</span>
                                    <span class="value">Certificate</span>
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
