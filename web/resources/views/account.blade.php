{{--Header--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mainContent.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/command.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <title>RealBook</title>
</head>
<body>
    <header id="top_page_header" class="flex_col">
        <div class="top_section flex justify_between">
            {{-- tên page --}}
            <a class="home_link" href="/"><h1>Real<span style="color: rgb(0, 153, 255)">Book</span></h1></a>



            <div class="user_box flex">
                @auth
                    {{-- thông báo --}}
                    <div class="notice floating gray_hover flex_col align_center" href="#">
                        <a class="flex_col align_center" href="#">
                            <img src="https://img.icons8.com/?size=512&id=16008&format=png" alt="Thông báo" width="30px">
                            <span class="flex center"><b>50</b></span>
                            <p>Thông báo</p>
                        </a>
                        {{-- floating notice --}}
                        @include('floatNotice')
                    </div>
                    {{-- followed --}}
                    <div class="notice floating gray_hover flex_col align_center" href="#">
                        <a class="flex_col align_center" href="#">
                            <img src="https://cdn-icons-png.flaticon.com/128/10016/10016918.png" alt="Theo dõi" width="30px">
                            <span class="flex center"><b>5</b></span>
                            <p>Đang theo dõi</p>
                        </a>
                        {{-- floating followed --}}
                        @include('floatFollowed')
                    </div>
                @endauth
                


                {{-- Tài khoản --}}
                <div class="verify floating flex_col align_center floating" href="#">
                    <a href="#" class="flex_col align_center gray_hover">
                        <img src="https://img.icons8.com/?size=512&id=uOoIUTYvxnso&format=png" alt="Đăng nhập" width="30px">
                        <p>Đăng nhập</p>
                    </a>
                    {{-- floating login board --}}
                    @include('floatLogin')
                    
                </div>
            </div>
        </div>
        
        {{-- chuyển hướng --}}
        <nav class="bottom_section flex" style="margin-top:20px; gap:10px ">
            <a href="/">Home <div class="underline"></div></a>

        </nav>
    </header>
{{--Body--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">New Password</label><input type="text" class="form-control" placeholder="enter password" value=""></div>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="text" class="form-control" placeholder="enter password" value=""></div>

                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

{{-- footer--}}
<head>
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<footer id="footer" class="flex_col justify_center" style="font-weight: bold; gap:20px; padding-left:5vw">
    <p class="flex" style=" gap:20px">Thành viên:
        <a href="https://www.facebook.com/Moki6723">Tuấn khôi</a>|
        <a href="https://www.facebook.com/ThiMooc1214">Thi</a>|
        <a href="https://www.facebook.com/phan.hoangphong.9">Hoàng Phong</a>
    </p>
    <p>Liên hệ trưởng nhóm: <a href="#">Moiki@kiki.com</a></p>
</footer>
<script src="{{ asset('/js/interaction.js') }}"></script>
</body>
</html>