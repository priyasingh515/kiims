<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KIMS Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/public/adminasset/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/public/adminasset/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/adminasset/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('/public/adminasset/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/public/adminasset/images/favicon.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{asset('/public/assets/images/KIMS_logo.png')}}">
                </div>
                {{-- <h4>Hello! let's get started</h4> --}}
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="{{route('admin.authenticate')}}" method="post">
                    @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                

                <div class="input-group mb-3">
                    <label class="sr-only control-label" for="message">Captcha</label>
                    <img src="{{ url('/captcha') }}" id="captcha-img" alt="Captcha Image">  
                    <button type="button" class="btn btn-secondary ml-2" onclick="refreshCaptcha()">
                        <i class="fas fa-sync"></i> 
                    </button>
                    <input type="text" name="captcha" class="form-control" placeholder="Captcha" required>   
                    @if ($errors->has('captcha'))
                        <div class="alert alert-danger">
                            {{ $errors->first('captcha') }}
                        </div>
                    @endif
                    
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  
    <script src="{{asset('/public/adminasset/vendors/js/vendor.bundle.base.js')}}"></script>

    <script src="{{asset('/public/adminasset/js/off-canvas.js')}}"></script>
    <script src="{{asset('/public/adminasset/js/misc.js')}}"></script>
    <script>
        function refreshCaptcha() {
            document.getElementById('captcha-img').src = "{{ url('/captcha') }}?" + Math.random();
        }
    </script>
    <!-- endinject -->
  </body>
</html>