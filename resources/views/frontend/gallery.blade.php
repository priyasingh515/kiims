@extends('frontend.layouts.main')
@section('main-container')
 <!-- Main content Start -->
 <div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="/assets/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Gallery</h1>
            <ul>
                <li>
                    <a class="active" href="">KIMS</a>
                </li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Events Section Start -->
    <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
           <div class="row">
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-item h-100">
                        <div class="gallery-img h-100">
                            <a class="image-popup" href="/assets/images/photos/image1.jpeg"><img src="/assets/images/photos/image1.jpeg" class="h-100" alt=""></a>
                        </div>
                        {{-- <div class="title">
                            Group Study Time
                        </div> --}}
                    </div>
                </div>  
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-item h-100">
                        <div class="gallery-img h-100">
                            <a class="image-popup" href="/assets/images/photos/image2.jpeg"><img src="/assets/images/photos/image2.jpeg" class="h-100" alt=""></a>
                        </div>
                        {{-- <div class="title">
                            Examination Hall
                        </div> --}}
                    </div>
                </div>  
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-item h-100">
                        <div class="gallery-img h-100">
                            <a class="image-popup" href="/assets/images/photos/image3.jpeg"><img src="/assets/images/photos/image3.jpeg" class="h-100" alt=""></a>
                        </div>
                        {{-- <div class="title">
                            Final Year Study
                        </div> --}}
                    </div>
                </div>  
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-item h-100">
                        <div class="gallery-img h-100">
                            <a class="image-popup" href="/assets/images/photos/image4.jpeg"><img src="/assets/images/photos/image4.jpeg" class="h-100" alt=""></a>
                        </div>
                        {{-- <div class="title">
                            Online Study
                        </div> --}}
                    </div>
                </div>  
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-item h-100">
                        <div class="gallery-img h-100">
                            <a class="image-popup" href="/assets/images/photos/image5.jpeg"><img src="/assets/images/photos/image5.jpeg" class="h-100" alt=""></a>
                        </div>
                        {{-- <div class="title">
                           Group Solution
                        </div> --}}
                    </div>
                </div>  
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-item h-100">
                        <div class="gallery-img h-100">
                            <a class="image-popup" href="/assets/images/photos/image6.jpeg"><img src="/assets/images/photos/image6.jpeg" class="h-100" alt=""></a>
                        </div>
                        {{-- <div class="title">
                           New Teacher
                        </div> --}}
                    </div>
                </div>  
             
                
           </div>
        </div> 
    </div>
    <!-- Events Section End -->

    
    

</div> 
<!-- Main content End --> 

@endsection