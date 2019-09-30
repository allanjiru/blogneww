<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/boardsterui/template/demo/vertical-dark-sidebar/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2019 15:43:40 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" placeholder="Name">
                              @error('name')
                                   <p style="color: red">{{ $message }}</p>
                                @enderror
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" placeholder="Email">
                              @error('email')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                              @error('password')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password_confirmation"  placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
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
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/boardsterui/template/demo/vertical-dark-sidebar/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2019 15:43:40 GMT -->
</html>
