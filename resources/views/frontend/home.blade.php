
@extends('frontend.layouts.main')
@section('main-container')
    <div class="main-content">
        <!-- Banner Section Start -->            
        <div id="rs-banner" class="rs-banner style4">
            <div class="container relative">
                <div class="row relative">
                    <div class="offset-lg-6"></div>
                    <div class="col-lg-6 lg-pl-0">
                        <div class="banner-line-shape js-tilt">
                            <img src="{{asset('assets/images/banner/banner-line.png')}}" alt="Banner Circle Shape">
                        </div>
                        <div class="banner-content pb-13">
                            <h1 class="banner-title white-color wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Distance Learning Build Your Skill</h1>
                            <div class="desc white-color mb-41 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="3000ms">The other hand, we denounce with righteous indignation and <br>dislike men who are so beguiled and demoralized</div>
                            <div class="banner-btn wow fadeInUp" data-wow-delay="500ms" data-wow-duration="3000ms">
                                <a class="readon2 banner-style" href="{{url('/register')}}">Register Now</a>
                            </div>
                        </div>
                        <div class="banner-circle-shape js-tilt">
                            <img src="{{asset('assets/images/banner/banner-circle.png')}}" alt="Banner Circle Shape">
                        </div>
                    </div>
                </div> 
                <div class="banner-dots-shape js-tilt">
                    <img src="{{asset('assets/images/banner/banner-dots.png')}}" alt="Banner Dots Shape">
                </div>                   
            </div>
        </div>
        <!-- Banner Section End -->

        <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 pl-60 order-last md-pl-15 md-mb-60">
                        <div class="img-part js-tilt">
                            <img class="" src="assets/images/about/about3.png" alt="">
                            <img class="shape top-center animated rotate infinite" src="assets/images/about/image-center-circle.png" alt="Cirle Shape Img">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="sub-title primary">About Us</div>
                            <h2 class="title">Welcome to <br>Krishnayan institute of medical science foundation</h2>
                            <div class="desc pr-30">
                                Every one comes to the service para medical staff who assist them along with the doctors. Apart from the doctor, all the people who help in their work, they are called para medical staff and hence they are also called assistant doctors
                            </div>
                        </div>
                        <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="readon2" href="{{url('/about')}}">Read More</a>
                        </div>
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
                            <h2 class="title mb-0">Our Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="assets/images/about/ot.jpeg" alt="">
                        </div>
                        <div class="content-part">
                          
                            <h3 class="title"><a href="{{url('/ot')}}">Diploma in Operation Theatre Technology</a></h3>
                            <div class="bottom-part">
                               
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="assets/images/about/dmit.jpg" alt="">
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('/cmit')}}">Diploma in Medical Imaging Technology (DMIT)</a></h3>
                            <div class="bottom-part">
                               
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="assets/images/about/ct.jpg" alt="">
                        </div>
                        <div class="content-part">
                            
                            <h3 class="title"><a href="{{url('/ctMR')}}">CT/MRI/X-RAY/ICU</a></h3>
                            <div class="bottom-part">
                                
                            </div>
                        </div>
                    </div>
                    <div class="courses-item">
                        <div class="img-part">
                            <img src="assets/images/courses/10.jpg" alt="">
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="course-single.html">Introduction to Quantitativ and Qualitative.</a></h3>
                            <div class="bottom-part">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all-btn text-center pt-50 mb-60 md-pt-30 md-mb-30"><a class="title-color" href="{{url('allCourse')}}">View All Courses <i class="flaticon-right-arrow ml-5 body-color"></i></a></div>
            </div>
        </div>
        <!-- Popular Courses Section End -->

        <!-- About Section Start -->
        <div class="rs-about video-style pt-120 pb-100 md-pt-90 md-pb-70">
            <div class="container relative">
                <div class="icon-shape js-tilt">
                    <img class="shape" src="assets/images/about/icon-shape.png" alt="Icon Shape">
                </div>
                <div class="row">                        
                    <div class="col-lg-6">
                        <div class="img-part media-icon">
                            <img class="video-img" src="assets/images/about/about-video-bg2.png" alt="Video Image">
                            <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                <i class="fa fa-play"></i>
                            </a>
                            <img class="dot-shape js-tilt" src="assets/images/about/dot-shape.png" alt="Shape">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content gray-bg">
                            <div class="sec-title mb-46 md-mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="sub-title primary">How We Works</div>
                                <h2 class="title">Develope Your Skills<br>Shine Your Life</h2>
                                <div class="desc pr-30">
                                    The significance of paramedical courses has been realized by the increasing need for skilled paramedics in the medical field. This is important to mention that without paramedics the medical field would be crippled.
                                </div>
                            </div>
                            <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <a class="readon2" href="{{url('allCourse')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <div class="rs-counter style2-about">
            <div class="container">
                <div class="row couter-area">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="counter-item text-center">
                            <h2 class="rs-count">958</h2>
                            <h4 class="title mb-0">Awards & Recognition</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="counter-item text-center">
                            <h2 class="rs-count plus">4523</h2>
                            <h4 class="title mb-0">Enrolled Student</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="counter-item text-center">
                            <h2 class="rs-count plus">120</h2>
                            <h4 class="title mb-0">Expert Instructors</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item text-center">
                            <h2 class="rs-count percent">100</h2>
                            <h4 class="title mb-0">Satisfaction Rate</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style1 pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="sec-title mb-50 md-mb-30">
                    <div class="sub-title primary">Instructor</div>
                    <h2 class="title mb-0">Expert Teachers</h2>
                </div>
                <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="team-item">
                        <img src="assets/images/team/1.jpg" alt="">
                        <div class="content-part">
                            <h4 class="name"><a href="team-singal.html">Jhon Pedrocas</a></h4>
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
                        <img src="assets/images/team/2.jpg" alt="">
                        <div class="content-part">
                            <h4 class="name"><a href="team-singal.html">Jesika Albenian</a></h4>
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
                        <img src="assets/images/team/3.jpg" alt="">
                        <div class="content-part">
                            <h4 class="name"><a href="team-singal.html">Alex Anthony</a></h4>
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
        </div>
        <!-- Team Section End -->

        <!-- CTA Section Start -->
        <div class="rs-cta">
            <div class="cta-img">
                <img src="assets/images/cta/cta-bg.jpg" alt="">
            </div>
            <div class="cta-content text-center">
                <div class="sec-title mb-40 md-mb-20 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2 class="title mb-16 md-mb-10">Admission Open for 2020</h2>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum sociis natoque penatibus et magnis.</div>
                </div>
                <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="readon2" href="#">Apply Now</a>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial style4 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container relative">
                <div class="left-top-shape js-tilt">
                    <img src="assets/images/shape/circle-shape.png" alt="">
                </div>
                <div class="sec-title mb-60 md-mb-30 text-center">
                    <div class="sub-title primary">Student Reviews</div>
                    <h2 class="title mb-0">What Our Students Says</h2>
                </div>
                <div class="rs-carousel owl-carousel" 
                    data-loop="true" 
                    data-items="3" 
                    data-margin="30" 
                    data-autoplay="true" 
                    data-hoverpause="true" 
                    data-autoplay-timeout="5000" 
                    data-smart-speed="800" 
                    data-dots="false" 
                    data-nav="false" 
                    data-nav-speed="false" 

                    data-md-device="3" 
                    data-md-device-nav="false" 
                    data-md-device-dots="false" 
                    data-center-mode="false"

                    data-ipad-device2="1" 
                    data-ipad-device-nav2="false" 
                    data-ipad-device-dots2="false"

                    data-ipad-device="2" 
                    data-ipad-device-nav="false" 
                    data-ipad-device-dots="false" 

                    data-mobile-device="1" 
                    data-mobile-device-nav="false" 
                    data-mobile-device-dots="false">
                    <div class="testi-item">
                        <div class="row no-gutter">
                            <div class="col-md-4">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/style4/1.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today.Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem accusantium do loremque laudantium,</div>
                                    <a class="name" href="#">Mahadi Monsura</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row no-gutter">
                            <div class="col-md-4">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/style4/2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today.Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem accusantium do loremque laudantium,</div>
                                    <a class="name" href="#">Mahadi Monsura</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row no-gutter">
                            <div class="col-md-4">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/style4/3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today.Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem accusantium do loremque laudantium,</div>
                                    <a class="name" href="#">Mahadi Monsura</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row no-gutter">
                            <div class="col-md-4">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/style4/4.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="user-info">
                                    <span class="quote"><i class="flaticon-phrase"></i></span>
                                    <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today.Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem accusantium do loremque laudantium,</div>
                                    <a class="name" href="#">Mahadi Monsura</a>
                                    <span class="designation">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session('swal_message'))
            <script>
                Swal.fire({
                    icon: '{{ session('swal_message')['type'] }}',
                    title: '{{ session('swal_message')['title'] }}',
                    text: '{{ session('swal_message')['text'] }}',
                });
            </script>
        @endif
        <section class="py-5" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-4">
                        <h2 class="fw-bold">🎓 Verify Your Enrollment Number</h2>
                        <p class="text-muted">Enter your enrollment ID to check your approval status.</p>
                    </div>
        
                    <div class="col-md-8">
                        <form action="{{ route('admin.searchByEnrollment') }}" method="GET" class="row g-3 shadow p-4 rounded bg-white">
                            <div class="col-md-9">
                                <input type="text" name="enrol_id" class="form-control form-control-lg" placeholder="Enter Enrollment ID" required>
                            </div>
                            <div class="col-md-3 d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Verify</button>
                            </div>
                        </form>
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
        
        <!-- Testimonial Section End -->

@endsection

       