
@extends('frontend.layouts.main')
@section('main-container')
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay ">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/6.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color padding">
            <h1 class="page-title white-color">Register</h1>
            <ul>
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
   
    @if(session('success') && session('enrol_id'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                html: '{{ session('success') }} <br> Your Enrollment ID is: {{ session('enrol_id') }}',
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif
    <!-- Breadcrumbs End -->            

    <!-- Contact Section Start -->
    <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
           <div class="rs-quick-contact">
                <div class="inner-part text-center mb-50">
                    <h2 class="title mb-15">Register</h2>
                </div>
                    <div id="form-messages"></div>
                <form  method="post" action="{{route('register.user')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 mb-50">
                            <label for="">Courses</label>
                            <select class="from-control" id="course" name="course" placeholder=" Course" required="">
                                <option value="">Select Courses</option>
                                <option value="ot">O.T</option>
                                <option value="dmit">D.M.I.T</option>
                                <option value="ctmri">CT/MRI/X-RAY/ICU</option>
                                <option value="emt">E.M.T</option>
                                <option value="opthemic">OPTHEMIC</option>
                                <option value="drasser">DRASSER</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">Name</label>
                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                        </div> 

                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">Aadhar number</label>
                            <input class="from-control" type="number" id="aadhar" name="aadhar" placeholder="Aadhar Number" required="">
                        </div> 
                        <div class="col-lg-12 mb-35 col-md-12">
                            <label for="">Email</label>
                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                        </div>   
                        <div class="col-lg-12 mb-35 col-md-12">
                            <label for="">Phone</label>
                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                        </div>   
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">Father Name</label>
                            <input class="from-control" type="text" id="fname" name="fname" placeholder="Fathar Name" required="">
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">Mother Name</label>
                            <input class="from-control" type="text" id="mname" name="mname" placeholder="Mother Name" required="">
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label for="">Gender</label>
                            <select class="from-control" id="gender" name="gender" placeholder=" Gender" required="">
                                <option value="">Select</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">Date of Birth</label>
                            <input class="from-control" type="date" id="dob" name="dob" placeholder="Date of Birth" required="">
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">Nathionality</label>
                            <input class="from-control" type="text" id="nation" name="nation" placeholder="Nationality" required="">
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for="">religion</label>
                            <input class="from-control" type="text" id="religion" name="religion" placeholder="Religion" required="">
                        </div>
                        <div class="col-lg-4 mb-50">
                            <label for="">Disability</label>
                            <select class="from-control" id="disability" name="disability" placeholder="Disability" required="">
                                <option value="">Select Disability</option>
                                <option value="Y">YES</option>
                                <option value="N">NO</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-50">
                            <label for="">Disadvantaged group</label>
                            <select class="from-control" id="disadvantaged" name="disadvantaged" placeholder="disadvantaged" required="">
                                <option value="">Disadvantaged group</option>
                                <option value="Y">YES</option>
                                <option value="N">NO</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-50">
                            <label for="">Medium of study</label>
                            <select class="from-control" id="medium" name="medium" placeholder="medium" required="">
                                <option value="">Medium of study</option>
                                <option value="H">Hindi</option>
                                <option value="E">English</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-35 col-md-12">
                            <label for="">PinCode</label>
                            <input class="from-control" type="text" id="pin" name="pin" placeholder="Pin code" required="">
                        </div>
                        <div class="col-lg-4 mb-35 col-md-12">
                            <label for="">City</label>
                            <input class="from-control" type="text" id="city" name="city" placeholder="City" required="">
                        </div>
                        <div class="col-lg-4 mb-35 col-md-12">
                            <label for="">State</label>
                            <input class="from-control" type="text" id="state" name="state" placeholder="State" required="">
                        </div>
                     
                        <div class="col-lg-12 mb-50">
                            <label for="">Address</label>
                            <textarea class="from-control" id="address" name="address" placeholder="Address" required=""></textarea>
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for=""> Upload your image</label>
                            <input class="from-control" type="file" id="image" name="image" placeholder="Image" required="">
                        </div>
                        <div class="col-lg-6 mb-35 col-md-12">
                            <label for=""> Upload your sign</label>
                            <input class="from-control" type="file" id="sign" name="sign" placeholder="Sign" required="">
                        </div>
                        
                    </div>
                    <div class="form-group mb-0">
                        {{-- <button type="submit" class="btn-send" type="submit" value="Submit Now"> --}}
                            <button type="submit" class="btn-send">Submit Now</button>
                    </div>       
                </form>
           </div> 
        </div>
    </div>
    <!-- Contact Section End -->  

</div> 

@endsection

       