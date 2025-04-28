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
            <h1 class="page-title">Nursing Course</h1>
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
                                            <h4>Nursing Course</h4>
                                            <h3>What you’ll learn?</h3>
                                            <p>
                                                The Nursing Course is designed to train students in patient care, nursing techniques, medical terminology, pharmacology, and healthcare ethics. Graduates are equipped to work in hospitals, clinics, and healthcare institutions as nurses or nursing assistants, ensuring the wellbeing of patients under the supervision of doctors.
                                            </p>
                                        </div>

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Course Name</th>
                                                    <th>Eligibility</th>
                                                    <th>Duration</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>BSC - Degree in Nursing</td>
                                                <td>12th pass with 45% aggregate in science subjects and 40% for SC/ST candidates
                                                </td>
                                                <td>4 yrs</td>
                                            </tr>
                                            <tr>
                                                <td>Post Basic B.Sc.,
                                                    Nursing (Degree in Nursing)
                                                </td>
                                                <td>G.N.M Dip. With one yrs exp.
                                                </td>
                                                <td>2 yrs</td>
                                            </tr>
                                            <tr>
                                                <td>MSC - PG in Nursing</td>
                                                <td>Pass in Basic B.Sc., Nursing or Post Basic Nursing with 2 yrs exp.
                                                </td>
                                                <td>2 yrs</td>
                                            </tr>
                                        </table>
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
                                            <td>Anatomy</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Physiology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmacology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Medical Surgical Nursing</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Community Health Nursing</td>
                                            <th>2nd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pediatric Nursing</td>
                                            <th>2nd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Obstetrics and Gynecology</td>
                                            <th>2nd Year</th>
                                        </tr>
                                        <tr>
                                            <td>Mental Health Nursing</td>
                                            <th>2nd Year</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>
                                        Candidates must have completed their 12th grade with at least 50% marks from a recognized board. Students who have a Science background with subjects like Physics, Chemistry, and Biology are eligible. This program is open to both male and female candidates.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-faq" role="tabpanel" aria-labelledby="prod-faq-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    <p>The admission process for the Nursing course is as follows:</p>
                                    <ul style="list-style: circle;">
                                        <li>Visit the institution's official website.</li>
                                        <li>Complete the application form and submit required documents.</li>
                                        <li>For more details, feel free to contact the institution directly.</li>
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
                            <img class="video-img" src="/public/assets/images/courses/nursing.jpg" alt="Video Image">
                        </div>
                        <!-- End Video Box -->
                        <!-- <div class="course-features-info">
                            <ul>
                                <li class="duration-feature">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">Duration</span>
                                    <span class="value">2 years</span>
                                </li>
                                <li class="lectures-feature">
                                    <i class="fa fa-files-o"></i>
                                    <span class="label">Examination Type :</span>
                                    <span class="value">Semester and Annual</span>
                                </li>
                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Course Level :</span>
                                    <span class="value">Diploma</span>
                                </li>
                                <li class="students-feature">
                                    <i class="fa fa-users"></i>
                                    <span class="label">Language :</span>
                                    <span class="value">Hindi/English</span>
                                </li>
                            </ul>
                        </div> -->

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