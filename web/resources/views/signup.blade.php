@auth
  <p>Chúc mừng đã bạn tạo tài khoản</p>
  <a href="{{ route('login') }}">
    <form action="/logout" method="POST">
        @csrf
        <button>Bấm vào đây để đăng nhập</button>
    </form> 
  </a>



  
@else
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="assets/css/signup.css" rel="stylesheet">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h2 style="text-align: center">REALBOOK</h2>
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/signup" method="POST">
          @csrf
          <!-- Username input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Username:</label>
            <input name="name" type="name" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter username" />
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address:</label>
            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password:</label>
            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <!--Confirm Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Confirm Password:</label>
            <input name="confirmpassword" type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>

@endauth