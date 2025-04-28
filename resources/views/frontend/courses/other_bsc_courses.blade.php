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
            <h1 class="page-title">BSC Courses</h1>
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
                <div class="col-lg-8 md-mb-50 bg-white">
                    <!-- Intro Info Tabs-->
                   
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Eligibility</th>
                                <th>Duration</th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
      <td>PUP-301</td>
      <td>B.Sc. Radio Imaging Technology (Lateral)</td>
      <td>10+2 (PCB) & DRIT</td>
      <td>1 Year</td>
    </tr>
    <tr>
      <td>PUP-302</td>
      <td>B.Sc. Radio Imaging Technology (Lateral)</td>
      <td>10+2 (PCB) & CRIT</td>
      <td>2 Years</td>
    </tr>
    <tr>
      <td>PUP-303</td>
      <td>B.Sc. Medical Laboratory Technology (Lateral)</td>
      <td>10+2 (PCB) & CMLT</td>
      <td>2 Years</td>
    </tr>
    <tr>
      <td>PUP-304</td>
      <td>B.Sc. Medical Laboratory Technology (Lateral)</td>
      <td>10+2 (PCB) & DMLT</td>
      <td>2 Years</td>
    </tr>
    <tr>
      <td>PUP-305</td>
      <td>B.Sc. Medical Laboratory Technology</td>
      <td>10+2 (PCB)</td>
      <td>3 Years</td>
    </tr>
    <tr>
      <td>PUP-306</td>
      <td>B.Sc. Radio Imaging Technology</td>
      <td>10+2 (PCB)</td>
      <td>3 Years</td>
    </tr>
    <tr>
      <td>PUP-307</td>
      <td>B.Sc. Hospital Administration</td>
      <td>Any Science Degree with Botany, Zoology, Microbiology</td>
      <td>3 Years</td>
    </tr>
    <tr>
      <td>PUP-308</td>
      <td>B.Sc. Medical Records Management</td>
      <td>12th Standard or Equivalent</td>
      <td>3 Years</td>
    </tr>
    <tr>
      <td>PUP-309</td>
      <td>B.Sc. Lab Technician</td>
      <td>10+2 (PCB)</td>
      <td>3 Years</td>
    </tr>
    <tr>
      <td>PUP-310</td>
      <td>M.Sc. Microbiology</td>
      <td>BMLT</td>
      <td>2 Years</td>
    </tr>
                        </tbody>

                    </table>

                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-4">
                    <div class="inner-column">
                        <!-- Video Box -->
                        <div class="intro-video media-icon orange-color2">
                            <img class="video-img" src="/assets/images/courses/bsc.jpg" alt="Video Image">
                        </div>
                       

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
