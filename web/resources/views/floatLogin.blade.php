<div class="floating_container flex_col center justify_between" style="
    width:400px;
    height:70vh;
    background-color:rgb(255, 255, 255);
    top:50px;
    right:0;
    user-select: none;"
    >
        @auth
        <h2>Chào mừng {{auth()->user()->name}}</h2>
        <h2>Email: {{auth()->user()->email}}</h2>
        <form action="/logout" method="POST">
            @csrf
            <button>Đăng xuất</button>
        </form>
        @else 
            {{-- Đăng nhập --}}
        <form action="/login" class="login flex_col align_center justify_around visible" style="width:100%; height:70%" method="POST">
            @csrf
            <h1>Đăng Nhập</h1>
            <div class="flex_col label">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="loginname" placeholder="User Name">
            </div>
            <div class="flex_col label">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="loginpassword" placeholder="Password">
            </div>
            <button>Đăng nhập</button>
            <p>Chưa có tài khoản? <b class="register_btn gray_hover" style="color: blue">Đăng ký</b></p>
        </form>
         {{-- Đăng ký --}}
        <form action="/register" class="register flex_col align_center justify_around invisible" style="width:100%; height:70%" method="POST">
            @csrf
            <h1>Đăng Ký</h1>
            <div class="flex_col label">
                <label for="username">Tên đăng Ký</label>
                <input type="text" id="username" name="name" placeholder="User Name">
            </div>
            <div class="flex_col label">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your Email">
            </div>
            <div class="flex_col label">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="flex_col label">
                <label for="repassword">Nhập lại mật khẩu</label>
                <input type="password" id="repassword" name="repassword" placeholder="Confirm Password">
            </div>
            <button>Đăng Ký</button>
            <p>Đã có tài khoản? <b class="login_btn gray_hover" style="color: blue">Đăng Nhập</b></p>
        </form>
    @endauth
</div>

    
    

