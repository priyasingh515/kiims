
@extends('frontend.layouts.main')
@section('main-container')
    

<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="/public/assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color padding">
        <h1 class="page-title white-color">Franchise Form</h1>
        <ul>
            <li>
                <a class="active" href="{{ url('/') }}">Home</a>
            </li>
            <li>Franchise</li>
        </ul>
    </div>
</div>
      

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
    
    
@if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'error',
                text: '{{ session('error') }}',
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif         

        <section class="py-5" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-4">
                        <h2 class="fw-bold">Franchise Form</h2>
                        <p class="text-muted"></p>
                    </div>
        

                    <form action="{{ route('frenchise.user') }}" method="post">
                        @csrf
                    <div class="row bg-white p-3">

                    <div class="col-md-6 mb-2">
                        <label for="">Name</label>
                        <input type="text" class="form-control" required name="name" id="">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="">Email ID</label>
                        <input type="email" class="form-control" required name="email" id="">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="">Aadhar Card Number</label>
                        <input type="number" class="form-control" maxlength="16" name="aadhar_card" id="">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="">Mobile Number</label>
                        <input type="text" class="form-control" required maxlength="10" name="phone" id="">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="">District</label>
                        <input type="text" class="form-control"  required name="district" id="">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="">Address</label>
                        <input type="text" class="form-control" required name="address" id="">
                    </div>

                    <div class="col-md-12 mt-3 text-center">
                        <input type="submit" class="btn btn-primary" value="submit" name="submit" id="">
                    </div>

                    
                </div>
            </form>

                
                </div>
            </div>
         
        </section>
        
        <!-- Testimonial Section End -->

@endsection

       