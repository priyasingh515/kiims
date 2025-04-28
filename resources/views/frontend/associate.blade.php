@extends('frontend.layouts.main')
@section('main-container')
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay ">
            <div class="breadcrumbs-img">
                <img src="/public/assets/images/breadcrumbs/6.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title white-color">Association Form</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Association</li>
                </ul>
            </div>
        </div>
        @if(session('success') )
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    html: '{{ session('success') }} ',
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
                        <h2 class="title mb-15">Get Associate with us</h2>
                        <p>
                            Complete the Form Below to Partner with Us and Experience Tailored Support for
                            Your Training Center’s Journey to Excellence.
                            Please fill out the details of your Institution to Associate with us.
                        </p>
                    </div>
                    <div id="form-messages"></div>
                  
                    <form method="post" action="{{route('associate')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <p>
                                    Note :- SPOC – Single Person of Contact of Institution
                                </p>
                            </div>

                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">Name of the Organization <span class="text-danger">*</span></label>
                                <input class="from-control" type="text" id="organization_namae" name="organization_name"
                                    placeholder="Name of the Organization" required>
                            </div>

                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">Name of the Institution SPOC <span class="text-danger">*</span> </label>
                                <input class="from-control" type="text" id="institution_spoc" name="institution_spoc"
                                    placeholder="Name of the Institution SPOC " required>
                            </div>


                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">PHONE NUMBER <span class="text-danger">*</span></label>
                                <input class="from-control" type="text" id="phone_number" name="phone_number"
                                    placeholder="PHONE NUMBER" required>
                            </div>

                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input class="from-control" type="email" id="aadhar" name="email" placeholder="Email ID"
                                    required>
                            </div>


                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">Designation of SPOC <span class="text-danger">*</span>
                                </label>
                                <input class="from-control" type="text" id="spoc_designation" name="spoc_designation"
                                    placeholder="Designation of SPOC" required>
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">STATE <span class="text-danger">*</span></label>
                                <select class="from-control" id="state"  name="State" required>
                                    <option value="">Select State</option>
                                    <option value="cg">Chhattisgarh</option>
                                    <option value="up">UP</option>
                                    <option value="mp">MP</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-50">
                                <label for="">CITY <span class="text-danger">*</span></label>
                                <input class="from-control" type="text" id="city" name="city" placeholder="CITY"
                                    required>

                            </div>

                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">PINCODE</label>
                                <input class="from-control" type="text" id="pincode" name="pincode" placeholder="PINCODE"
                                    >
                            </div>

                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">GSTIN (optional)
                                </label>
                                <input class="from-control" type="text" id="religion" name="gstin" placeholder="GSTIN"
                                    >
                            </div>

                            <div class="col-lg-12 mb-35 col-md-12">
                                <label for="">
                                    Institution Complete Address</label>
                                <input class="from-control" type="text" id="nation" name="institution_address"
                                    placeholder="Institution Complete Address" >
                            </div>


                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">Institution Total Carpet Area (in sq. ft.)
                                </label>
                                <input class="from-control" type="text" id="pin" name="carpet_area" >
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <label for="">Institution Total Area (in sq. ft.):
                                </label>
                                <input class="from-control" type="text" id="city" name="total_area" >
                            </div>


                            <div class="col-lg-12 mb-35 col-md-12">
                                <label for="">Sector You Want to Work:
                                </label>
                                <div>
                                    <label for="Apparel">
                                        <input type="checkbox" name="work[]" id="Apparel">
                                        Apparel
                                    </label>
                                    <label for="Beauty_Wellness">
                                        <input type="checkbox" name="work[]" value="Beauty Wellness" id="Beauty_Wellness">
                                        Beauty & Wellness
                                    </label>
                                    <label for="Electronics">
                                        <input type="checkbox" name="work[]" value="Electronics" id="Electronics">
                                        Electronics
                                    </label>
                                    <label for="Healthcare">
                                        <input type="checkbox" name="work[]" value="Healthcare" id="Healthcare">
                                        Healthcare
                                    </label>
                                    <label for="IT-ITeS">
                                        <input type="checkbox" name="work[]" value="IT-ITeS" id="IT-ITeS">
                                        IT-ITeS
                                    </label>
                                    <label for="Management">
                                        <input type="checkbox" name="work[]" value="management" id="Management">
                                        Management
                                    </label>
                                    <label for="Plumbing">
                                        <input type="checkbox" name="work[]" value="plumbing" id="Plumbing">
                                        Plumbing
                                    </label>
                                    <label for="Food_Processing">
                                        <input type="checkbox" name="work[]" value="food processing" id="Food_Processing">
                                        Food Processing
                                    </label>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-35 col-md-12">
                                <label for="">Course Name You Working:
                                </label>
                                <input class="from-control" type="text" id="state" name="course" placeholder="Course Name"
                                    >
                            </div>


                        </div>
                        <div class="form-group mb-0">
                            {{-- <button type="submit" class="btn-send" type="submit" value="Submit Now"> --}}
                                <button type="submit" class="btn btn-danger btn-block">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

    </div>

@endsection