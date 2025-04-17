@extends('frontend.layouts.main')
@section('main-container')

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color padding">
            <h1 class="page-title white-color">Contact Us</h1>
            <ul>
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    
    
    <!-- Breadcrumbs End -->            

    <!-- Contact Section Start -->
    <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row rs-contact-box mb-90 md-mb-50">
                <div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
                    <div class="address-item">
                        <div class="icon-part">
                            <img src="assets/images/contact/icon/1.png" alt="">
                        </div>
                        <div class="address-text">
                            <span class="label">Address</span>
                            <span class="des">228-5 Main Street, Georgia, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                    <div class="address-item">
                        <div class="icon-part">
                            <img src="assets/images/contact/icon/2.png" alt="">
                        </div>
                        <div class="address-text">
                            <span class="label">Email Address</span>
                            <span class="des"><a href="mailto:info@rstheme.com">info@rstheme.com</a></span>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                    <div class="address-item">
                        <div class="icon-part">
                            <img src="assets/images/contact/icon/3.png" alt="">
                        </div>
                        <div class="address-text">
                            <span class="label">Phone Number</span>
                            <span class="des"><a href="tel+0885898745">(+088)589-8745</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-30">
                    <!-- Map Section Start --> 
                    <div class="contact-map3">
                        <iframe src="https://maps.google.com/maps?q=Fort%20Miley&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-comment-box">
                        <div class="inner-part">
                            <h2 class="title mb-mb-15">Get In Touch</h2>
                            <p>Have some suggestions or just want to say hi? Our  support team are ready to help you 24/7.</p>
                        </div>
                        
                        <form method="post" action="{{route('enquiry.user')}}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div> 
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                    </div>   
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                    </div>   
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                    </div>
                                 
                                    <div class="col-lg-12 mb-50">
                                        <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Submit Now">
                                </div>										   
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->  

</div> 
<!-- Main content End --> 


@endsection