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
                    {{-- thông báo
                    <div class="notice floating gray_hover flex_col align_center" href="#">
                        <a class="flex_col align_center" href="#">
                            <img src="https://img.icons8.com/?size=512&id=16008&format=png" alt="Thông báo" width="30px">
                            <span class="flex center"><b>50</b></span>
                            <p>Thông báo</p>
                        </a>
                        {{-- floating notice --}}
                        {{-- @include('floatNotice')
                    </div>  --}}
                    {{-- followed --}}
                    <div class="notice floating gray_hover flex_col align_center" href="#">
                        <a class="flex_col align_center" href="#">
                            <img src="https://cdn-icons-png.flaticon.com/128/10016/10016918.png" alt="Theo dõi" width="30px">
                            <span class="flex center"><b>{{auth()->user()->followed->count()}}</b></span>
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
                        @auth
                        <p>{{auth()->user()->name}}</p>
                        @else
                        <p>Đăng nhập</p>
                        @endauth
                        
                    </a>
                    {{-- floating login board --}}
                    @include('floatLogin')
                    
                </div>
            </div>
        </div>
        
        {{-- chuyển hướng --}}
        <nav class="bottom_section flex" style="margin-top:20px; gap:10px ">
            <a href="/">Home <div class="underline"></div></a>
            <a href="#footer">Liên hệ <div class="underline"></div></a>
        </nav>
    </header>
