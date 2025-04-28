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
            <h1 class="page-title">Diploma Courses</h1>
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

                        
                        <tr><td>PDC-201</td><td>Diploma in Multipurpose Health Worker (DMHW)</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-202</td><td>Diploma in Live Stock Veterinary Science (DLSVS)</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-203</td><td>Diploma in Sanitary Inspector</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-204</td><td>Diploma in Lab Technician</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-205</td><td>Diploma in Dialysis Technician</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-206</td><td>Diploma in Cardiology</td><td>12th Pass</td><td>3 Years</td></tr>
    <tr><td>PDC-207</td><td>Diploma in X-Ray Technician</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-208</td><td>Diploma in Optometry</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-209</td><td>Diploma in CT Technician</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-210</td><td>Diploma in ICU Technician</td><td>12th Pass</td><td>1 Year</td></tr>
    <tr><td>PDC-211</td><td>Diploma in Dental Health Technician</td><td>12th Pass</td><td>2 Years</td></tr>
    <tr><td>PDC-212</td><td>Diploma in Dental Health Worker</td><td>12th Pass</td><td>2 Years</td></tr>
    <tr><td>PDC-213</td><td>Diploma in Homeopathy Pharmacy</td><td>12th Pass</td><td>2 Years</td></tr>
    <tr><td>PDC-214</td><td>Diploma in Veterinary Assistant</td><td>12th Pass</td><td>2 Years</td></tr>
    <tr><td>PDC-215</td><td>Diploma in Ayurvedic Pharmacy</td><td>12th Pass</td><td>2 Years</td></tr>
    <tr><td>PDC-216</td><td>Diploma in Electro-Cardiography (ECG)</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-217</td><td>Diploma in Nursing Assistant (DNA)</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-218</td><td>Diploma in Operation Theatre (DOT)</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-219</td><td>Diploma in Hospital Management (DHM)</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-220</td><td>Diploma in Veterinary Pharmacy (DVP)</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-221</td><td>Diploma in Ward Boy (DWB)</td><td>10+2</td><td>18 Months</td></tr>
    <tr><td>PDC-222</td><td>Diploma in Cath Lab</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-223</td><td>Diploma in First Aid in Emergency</td><td>10+2</td><td>2 Years</td></tr>
    <tr><td>PDC-224</td><td>Diploma in Physiotherapy (DPT)</td><td>10+2 (Science/Maths)</td><td>2 Years</td></tr>
    <tr><td>PDC-225</td><td>Diploma in Medical Laboratory Technology (DMLT)</td><td>10+2 (Science/Maths)</td><td>2 Years</td></tr>
    <tr><td>PDC-226</td><td>Diploma in Radiology Imaging Technology (DRIT)</td><td>10+2 (Science/Maths)</td><td>2 Years</td></tr>
    <tr><td>PDC-227</td><td>Diploma in Hospitality</td><td>10+2</td><td>1 Year</td></tr>
  
                        </tbody>

                    </table>

                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-4">
                    <div class="inner-column">
                        <!-- Video Box -->
                        <div class="intro-video media-icon orange-color2">
                            <img class="video-img" src="/public/assets/images/courses/diploma.jpg" alt="Video Image">
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
