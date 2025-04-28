@extends('frontend.layouts.main')
@section('main-container')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="/public/assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title white-color">Contact Us</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#3085d6'
                });
            </script>
        @endif

        @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonColor: '#d33'
        });
    </script>
@endif

        <!-- Contact Section Start -->
        <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row rs-contact-box mb-90 md-mb-50">
                    <div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="/public/assets/images/contact/icon/1.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Address</span>
                                <span class="des">Uttam Nagar West New Delhi near metro pillar number 683</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="/public/assets/images/contact/icon/2.png" alt="">
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
                                <img src="/public/assets/images/contact/icon/3.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Phone Number</span>
                                <span class="des">
                                    <a href="tel+8236049275">
                                        8236049275</a> <br>
                                    <a href="tel+9343420572">
                                        9343420572</a> <br>
                                    <a href="tel+9955224626">
                                        9955224626</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-30">
                        <!-- Map Section Start -->
                        <div class="contact-map3">
                            <!-- <iframe src="https://maps.google.com/maps?q=Fort%20Miley&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> -->

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2609878981393!2d77.05402687583769!3d28.62193907567057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04d87f2f31c9%3A0x82667e93daa89c08!2sMetro%20Pillar%20Number%20683%2C%20Shivaji%20Marg%2C%20Block%20E%2C%20Param%20Puri%2C%20Uttam%20Nagar%2C%20Delhi%2C%20110059!5e0!3m2!1sen!2sin!4v1745051420297!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-comment-box">
                            <div class="inner-part">
                                <h2 class="title mb-mb-15">Get In Touch</h2>
                                <p>Have some suggestions or just want to say hi? Our support team are ready to help you
                                    24/7.</p>
                            </div>
                            <div id="form-messages"></div>
                            <form method="post" action="{{route('enquiry.user')}}">
                                @csrf

                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                            <label for="">Enter Name </label>
                                            <input class="from-control" type="text" id="name" name="name" placeholder=""
                                                value="{{ old('name') }}" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                            <label for="">Enter Email </label>
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="" value="{{ old('email') }}" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                            <label for="">Enter Phone Number </label>
                                            <input class="from-control" type="text" id="phone" name="phone"
                                                placeholder="" value="{{ old('phone') }}" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                            <label for="">Enter Subject </label>
                                            <input class="from-control" type="text" id="subject" name="subject"
                                                placeholder="Subject" value="{{ old('subject') }}" required="">
                                        </div>

                                        <div class="col-lg-12 mb-50">
                                            <label for="">Enter Message </label>
                                            <textarea class="from-control" id="message" name="message"
                                                placeholder=" Message" required="">
                                                {{ old('message') }} 
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6LfPLSQrAAAAAP2K9FhPv0f1x_LQ80ay2RymEGvn"></div>

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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>