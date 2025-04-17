<style>
    .contact-comment-box {
        max-width: 450px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.05); /* slight transparency */
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(6px);
        color: #ffffff;
    }

    .contact-comment-box h5 {
        color: #00bcd4;
        font-weight: 600;
    }

    .contact-comment-box input,
    .contact-comment-box textarea {
        font-size: 14px;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        width: 100%;
        background-color: rgba(255, 255, 255, 0.08);
        color: #fff;
        margin-bottom: 12px;
        transition: all 0.3s ease;
    }

    .contact-comment-box input::placeholder,
    .contact-comment-box textarea::placeholder {
        color: #ffffff; /* light blue placeholder */
        font-weight: 400;
    }

    .contact-comment-box input:focus,
    .contact-comment-box textarea:focus {
        outline: none;
        border-color: #00bcd4;
        background-color: rgba(255, 255, 255, 0.12);
    }

    .contact-comment-box textarea {
        height: 80px;
        resize: none;
    }

    .contact-comment-box button {
        background-color: #00bcd4;
        color: #fff;
        font-size: 14px;
        padding: 8px 20px;
        border: none;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .contact-comment-box button:hover {
        background-color: #0195a3;
    }
</style>


 <!-- Footer Start -->
 <footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <h4 class="widget-title">Address</h4>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">503 Old Buffalo Street Northwest #205 New York-3087</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(123)-456-7890">(123)-456-7890</a> , 
                                <a href="tel:(123)-456-7890">(123)-456-7890</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:infoname@gmail.com">infoname@gmail.com</a> , 
                                <a href="#">www.yourname.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="site-map">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li><a href="{{'/about'}}">About</a></li>
                        <li><a href="{{'/contact'}}">Contact</a></li>
                        <li><a href="{{'/team'}}">Team</a></li>
                        <li><a href="{{'/gallery'}}">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Course</h4>
                    <ul class="site-map">
                        <li><a href="{{'/ot'}}">O.T</a></li>
                        <li><a href="{{'dmit'}}">D.M.I.T</a></li>
                        <li><a href="{{'emt'}}">E.M.T</a></li>
                        <li><a href="{{'/ctMR'}}">CT/MRI/X-RAY/ICU</a></li>
                        <li><a href="{{'/opthemic'}}">OPTHEMIC</a></li>
                        <li><a href="{{'/drasser'}}">DRASSER</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Enquiry form</h4>
                    <div class="contact-comment-box p-3 rounded shadow-sm">
                        <div class="inner-part mb-2">
                            <h5 class="widget-title mb-2 text-white">Get In Touch</h5>
                        </div>
                
                        <form method="post" action="{{ route('enquiry.user') }}">
                            @csrf
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Name" required>
                                </div>
                                <div class="col-6">
                                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="phone" class="form-control form-control-sm" placeholder="Phone" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="subject" class="form-control form-control-sm" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="3" class="form-control form-control-sm" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12 text-end mt-2">
                                    <button type="submit" class="btn btn-sm btn-primary px-3">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">                    
            <div class="row y-middle">
                <div class="col-lg-4 md-mb-20">
                    <div class="footer-logo md-text-center">
                        <a href=""><img src="assets/images/rays.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-20">
                    <div class="copyright text-center md-text-left">
                        <p>&copy; Developed By <a href="https://www.raysitworld.com/">Ray's IT & Design world</a></p>
                    </div>
                </div>
                <div class="col-lg-4 text-right md-text-left">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<!-- jquery latest version -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Menu js -->
<script src="{{asset('assets/js/rsmenu-main.js')}}"></script> 
<!-- op nav js -->
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>        
 <!-- counter top js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- video js -->
<script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- tilt js -->
<script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>      
<!-- plugins js -->
<script src="{{{asset('assets/js/plugins.js')}}}"></script>
<!-- contact form js -->
<script src="{{asset('assets/js/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>