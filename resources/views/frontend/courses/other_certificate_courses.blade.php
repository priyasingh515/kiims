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
            <h1 class="page-title">Certificate Courses</h1>
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

                    
                        <tr><td>PCC-101</td><td>Certificate in Physiotherapy (CPT)</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-102</td><td>Certificate in Medical Lab Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-103</td><td>Certificate in Medical Laboratory Technology</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-104</td><td>Certificate in Radiology Imaging Technology</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-105</td><td>Certificate in X-Ray Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-106</td><td>Certificate in Electro-cardiography</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-107</td><td>Certificate in Nursing Assistant</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-108</td><td>Certificate in Veterinary Pharmacy</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-109</td><td>Certificate in Hospital Management</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-110</td><td>Certificate in Ward Boy</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-111</td><td>Certificate in Sanitary Inspector</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-112</td><td>Certificate in Community Health Worker</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-113</td><td>Certificate in Ophthalmology</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-114</td><td>Certificate in Cath Lab</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-115</td><td>Certificate in Community Medical Service</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-116</td><td>Multipurpose Health Worker (Male)</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-117</td><td>Multipurpose Health Worker (Female)</td><td>10th Pass</td><td>18 Months</td></tr>
    <tr><td>PCC-118</td><td>Certificate in Dialysis Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-119</td><td>Certificate in Cardiology</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-120</td><td>Certificate in CT Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-121</td><td>Certificate in ICU Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-122</td><td>Certificate in Operation Theatre Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-123</td><td>Certificate in Dental Lab Technician</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-124</td><td>Certificate in Homeopathy Pharmacy</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-125</td><td>Certificate in Veterinary Assistant</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-126</td><td>Certificate in Ophthalmic Assistant</td><td>10th Pass</td><td>1 Year</td></tr>
    <tr><td>PCC-127</td><td>Certificate in Ayurvedic Pharmacy</td><td>10th Pass</td><td>1 Year</td></tr>
  
                        </tbody>

                    </table>

                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-4">
                    <div class="inner-column">
                        <!-- Video Box -->
                        <div class="intro-video media-icon orange-color2">
                            <img class="video-img" src="/assets/images/courses/certificate.jpg" alt="Video Image">
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
