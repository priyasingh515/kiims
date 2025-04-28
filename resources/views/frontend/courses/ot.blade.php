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
            <h1 class="page-title">Diploma in Operation Theatre Technology
            </h1>
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
                            <!-- <li class="nav-item tab-btns">
                                    <a class="nav-link tab-btn" id="prod-reviews-tab" data-toggle="tab" href="#prod-reviews" role="tab" aria-controls="prod-reviews" aria-selected="false">Reviews</a>
                                </li> -->
                        </ul>
                        <div class="tab-content tabs-content" id="myTabContent">
                            <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                <div class="content white-bg pt-30">
                                    <!-- Cource Overview -->
                                    <div class="course-overview">
                                        <div class="inner-box">
                                            <h4>Diploma in Operation Theatre Technology
                                            </h4>

                                            {{-- <p>Eleifend euismod pellentesque vel Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus.</p>
                                                <ul class="student-list">
                                                    <li>23,564 Total Students</li>
                                                    <li><span class="theme_color">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (1254 Rating)</li>
                                                    <li>256 Reviews</li>
                                                </ul> --}}
                                            <h3>What you’ll learn?</h3>
                                            <p>
                                                Diploma in Operation Theatre Technology is a Diploma level Operations Theatre Technology program. This program prepares aspirants to work in the operation theatre as competent reliable technologists among the other team members of a healthcare department, under the supervision and guidance of senior doctors and Technical persons in their delivery of patient care.
                                            </p>
                                            {{-- <ul class="review-list">
                                                    <li>Phasellus enim magna, varius et commodo ut.</li>
                                                    <li>Sed consequat justo non mauris pretium at tempor justo.</li>
                                                    <li>Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo</li>
                                                    <li>Phasellus enim magna, varius et commodo ut.</li>
                                                    <li>Phasellus enim magna, varius et commodo ut.</li>
                                                    <li>Sed consequat justo non mauris pretium at tempor justo.</li>
                                                    <li>Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo</li>
                                                    <li>Phasellus enim magna, varius et commodo ut.</li>
                                                </ul> --}}
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
                                            <td>Anatomy</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Physiology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Biochemistry</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pharmacology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Pathology</td>
                                            <th>1st Year</th>
                                        </tr>
                                        <tr>
                                            <td>Microbiology</td>
                                            <th>1st Year</th>
                                        </tr>

                                        <tr>
                                            <td>Principles and practices of surgery</td>
                                            <th>1st Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Sterilization, disinfection and waste disposal</td>
                                            <th>1st Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Basics of anesthesia & CPR</td>
                                            <th>1st Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Computer and data processing</td>
                                            <th>1st Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Equipment’s- Know-how and maintenance of OT Tables, OT. Lights, Diathermy, Sucker Machine etc.</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Special Surgeries: Common Operations and Laying of Instrument Trolleys</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Practical Classes
                                            </td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Gynaecology & Obstetrics</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                Orthopaedic Surgery</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>Urology</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>Paediatric Surgery</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>CTVS</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>Plastic Surgery</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>Neuro Surgery</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td> Ophthalmology</td>
                                            <th>2nd Year</th>
                                        </tr>

                                        <tr>
                                            <td>ENT</td>
                                            <th>2nd Year</th>
                                        </tr>

                                    </table>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                    {{-- <h3 class="instructor-title">Instructors</h3> --}}
                                    <p>
                                        Students enrolling in the program must have passed class 12th with a minimum of 45-50% aggregate, from a recognized board. The students who want to pursue the course may belong to any stream, for institutes such as Virohan, but for other institutions students who have completed their class 12th with Science stream i.e. Physics, Chemistry, Biology/ Mathematics are only eligible.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-faq" role="tabpanel" aria-labelledby="prod-faq-tab">
                                <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">

                                    The admission process for the OT course is as follows:

                                    <ul style="list-style: circle;">
                                        <li>Check out the institution websites and choose the course of your choice
                                        </li>
                                        <li>Fill out the application/ registration form under the admission section</li>
                                        <li>Alternatively, you can contact the institution directly to get assistance</li>
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
                            <img class="video-img" src="/public/assets/images/about/ot.jpeg" alt="Video Image">

                        </div>
                        <!-- End Video Box -->
                        <div class="course-features-info">
                            <ul>

                                <li class="duration-feature">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">Duration</span>
                                    <span class="value">2 year </span>
                                </li>
                                <li class="lectures-feature">
                                    <i class="fa fa-files-o"></i>
                                    <span class="label">Examination Type :</span>
                                    <span class="value">Semester and Annual</span>
                                </li>

                                <li class="quizzes-feature">
                                    <i class="fa fa-puzzle-piece"></i>
                                    <span class="label">Course level :</span>
                                    <span class="value">Diploma</span>
                                </li>



                                <li class="students-feature">
                                    <i class="fa fa-users"></i>
                                    <span class="label">Language :</span>
                                    <span class="value">Hindi/English</span>
                                </li>

                            </ul>
                        </div>

                        <div class="btn-part">
                            {{-- <a href="#" class="btn readon2 orange"></a> --}}
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