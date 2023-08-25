@auth

<link rel="stylesheet" href="assests/css/login.css">
<nav class="navbar">
  <div class="logo"><a href="/">RealBook</a></div>
  <ul class="nav-links">
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
  </ul>
</nav>


<h2 style="padding-top: 60px">Xin chào người dùng: {{Auth::user()->name}}</h2>
  <div style="border: 3px solid black;">
    <h2>Tạo 1 bài viết mới</h2>
    <form action="/create-post" method="POST">
      @csrf
      <input type="text" name="title" placeholder="Tiêu đề">
      <textarea name="body" placeholder="Nội dung cần viết"></textarea>
      <button>Lưu bài viết</button>
    </form>
  </div>

        <div style="border: 3px solid black;">
          <h2>các post đã follow</h2>
          @foreach ($Follows as $follow)
              <div style="background-color: gray; padding: 10px; margin: 10px;">
                  <h3>{{ $follow['title'] }} bởi {{ $follow->user->name }}</h3>
                  <p>{{ $follow['body'] }}</p>
                  </form>
                  <form action="/follow-post/{{ $follow->id }}" method="POST">
                      @csrf
                      @method('PATCH')
                      <button>Hủy Theo dõi</button>

                  </form>
              </div>
          @endforeach
      </div>


        <div style="border: 3px solid black;">
            <h2>các post của bạn</h2>
            @foreach ($myposts as $mypost)
                <div style="background-color: gray; padding: 10px; margin: 10px;">
                    <h3>{{ $mypost['title'] }} bởi {{ $mypost->user->name }}</h3>
                    {{ $mypost['body'] }}
                    <p><a href="/edit-post/{{ $mypost->id }}">chỉnh xửa</a></p>
                    <form action="/delete-post/{{ $mypost->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Xóa bài</button>
                    </form>
                </div>
            @endforeach
        </div>




      <div style="border: 3px solid black;">
          <h2>post của mọi người</h2>
          @foreach ($posts as $post)
              <div style="background-color: gray; padding: 10px; margin: 10px;">
                  <h3>{{ $post['title'] }} bởi {{ $post->user->name }}</h3>
                  {{ $post['body'] }}
                  @if ($post->user->id == auth()->user()->id)
                      <p><a href="/edit-post/{{ $post->id }}">chỉnh xửa</a></p>
                      <form action="/delete-post/{{ $post->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button>Xóa bài</button>
                      </form>
                  @endif
                  <form action="/follow-post/{{ $post->id }}" method="POST">
                      @csrf
                      @method('PATCH')
                      @if ($post->userfollowed->contains('postId', auth()->user()->id))
                          <button>Hủy Theo dõi</button>
                      @else
                          <button>Theo dõi</button>
                      @endif
                  </form>
              </div>
          @endforeach
</div>




<form action="/logout" method="POST">
  @csrf
  <button>LogOut</button>
</form>
@else
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h2 style="text-align: center">REALBOOK</h2>
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <!-- Username input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Username:</label>
            <input name="loginname" type="username" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter username" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password:</label>
            <input name="loginpassword" type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button class="btn btn-primary btn-lg"
              style="submit; padding-left: 2.5rem; padding-right: 2.5rem;" >Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="http://127.0.0.1:8000/signup"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
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
