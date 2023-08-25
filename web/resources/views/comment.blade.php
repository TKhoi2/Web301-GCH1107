@include('header')
<head>
    <link rel="stylesheet" href="{{ asset('/css/mainContent.css') }}">
</head><main class="body flex justify_center">
    <div class="main_content">
        {{-- Post --}}
        @include('Posts')
        <form action="" method="POST"  class="write_comment flex">
            @csrf
            <div class="avt_container" style="width:30px; height:30px"><img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
            <div style="width: 100%; gap:10px" class="flex_col">
                <textarea name="hi" class="input_area" rows="4" oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';" placeholder="Viết gì đó cho bài viết này"></textarea>
                <button class="send">Đăng</button>
            </div>
        </form>
        <div class="comment_container flex_col">
            @for ($i = 0; $i < 10; $i++)
                <div class="comment">
                    <div class="user flex align_center">
                        <div class="avt_container" style="width:30px;"><img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
                        <p class="name mr-20"><b>Kudle</b></p>
                        <p class="mr-20" style="font-size:0.7rem">4 ngày trước</p>
                        @include('commentCommand')
                    </div>
                    <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis provident inventore facilis nisi voluptatem illo nesciunt quae voluptates. Consequuntur dignissimos nulla saepe pariatur, illo totam dolore maxime corporis fugiat unde!</p>
                </div>
            @endfor
            
        </div>

    </div>
</main> 
@include('footer')