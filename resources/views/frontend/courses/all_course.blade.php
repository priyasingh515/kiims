@extends('frontend.layouts.main')
@section('main-container')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">All Courses</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/') }}">Home</a>
                </li>
                <li>Courses</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            {{-- <div class="gridFilter text-center mb-50">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".filter1">SCIENCE</button>
                <button data-filter=".filter2">BUSINESS</button>
                <button data-filter=".filter3">HUMANITIES</button>
                <button data-filter=".filter4">DIPLOMA</button>
            </div> --}}
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('/ot')}}">
                                <img src="/assets/images/about/ot.jpeg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                            
                            <h3 class="title"><a href="{{url('/ot')}}">Diploma in Operation Theatre Technology</a></h3>
                            <div class="bottom-part">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter1 filter4">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('emt')}}">
                                <img src="/assets/images/about/emt.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('emt')}}">Diploma in Emergency Medical Technology</a></h3>
                            <div class="bottom-part">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter1 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('bmlt')}}">
                                <img src="/assets/images/about/dmit.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('bmlt')}}">Bachelor in Medical Laboratory Technology (BMLT)
                            </a></h3>
                            <div class="bottom-part">
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item filter1 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('dmlt')}}">
                                <img src="/assets/images/courses/dmlt.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('dmlt')}}">Diploma in Medical Lab Technician (DMLT)
                            </a></h3>
                            <div class="bottom-part">
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item filter4 filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('opthemic')}}">
                                <img src="/assets/images/about/opthalmic.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                            
                            <h3 class="title"><a href="{{url('opthemic')}}">OPHTHALMIC</a></h3>
                            <div class="bottom-part">
                               
                                {{-- <div class="btn-part">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('ctMR')}}">
                                <img src="/assets/images/about/ct.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('ctMR')}}">CT/MRI/X-RAY/ICU</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 grid-item filter2 filter4">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('dresser')}}">
                                <img src="/assets/images/about/dresser.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                            
                            <h3 class="title"><a href="{{url('dresser')}}">Dresser</a></h3>
                            <div class="bottom-part">
                                
                            </div>
                        </div>
                    </div>
                </div>

             

                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('nursing')}}">
                                <img src="/assets/images/courses/nursing.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('nursing')}}">Nursing</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('anm')}}">
                                <img src="/assets/images/courses/anm.webp" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('anm')}}">ANM</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('gnm')}}">
                                <img src="/assets/images/courses/gnm.webp" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('gnm')}}">GNM</a></h3>
                            <div class="bottom-part">

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('bpharma')}}">
                                <img src="/assets/images/courses/bpharm.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('bpharma')}}">B Pharma</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('dpharma')}}">
                                <img src="/assets/images/courses/d-pharma-2.webp" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('dpharma')}}">D Pharma</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('ecg')}}">
                                <img src="/assets/images/courses/ecg.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('ecg')}}">ECG</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('others-bsc-courses')}}">
                                <img src="/assets/images/courses/bsc.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('others-bsc-courses')}}">Others BSC Courses</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('others-certificate-courses')}}">
                                <img src="/assets/images/courses/certificate.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('others-certificate-courses')}}">Others Certificate Courses</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                

                <div style="visibility: hidden;" class="col-lg-4 col-md-6 grid-item filter3 filter2 ">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('others-diploma-courses')}}">
                                <img src="/assets/images/courses/diploma.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('others-diploma-courses')}}">Others Diploma Courses</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-lg-4 col-md-6 grid-item filter3 filter2 ">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('others-diploma-courses')}}">
                                <img src="/assets/images/courses/diploma.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('others-diploma-courses')}}">Others Diploma Courses</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div style="visibility: hidden;" class="col-lg-4 col-md-6 grid-item filter3 filter2 ">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{url('others-diploma-courses')}}">
                                <img src="/assets/images/courses/diploma.jpg" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                           
                            <h3 class="title"><a href="{{url('others-diploma-courses')}}">Others Diploma Courses</a></h3>
                            <div class="bottom-part">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            {{-- <div class="pagination-area orange-color text-center mt-30 md-mt-0">
                <ul class="pagination-part">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
    <!-- Popular Courses Section End -->

    
</div> 
<!-- Main content End --> 

@endsection

       