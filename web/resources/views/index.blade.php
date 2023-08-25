@include('header')
{{--  than web --}}
<main class="body flex justify_center">
    <div class="main_content">
        @auth
        <div style="border: 5px solid black; background-color:aqua; border-radius: 10px">
            <h2 style="color: orchid; text-align:center; background-color:aqua;">Tạo một Post mới</h2>
            <form class="flex_col center"  action="/create-post" method="POST">
                @csrf
                <div class="flex_col" style="width: 70%; gap: 10px">
                    <h4 >Tiêu đề: <input type="text" name="title" placeholder="Tiêu đề" style="width: 220px"></h4>
                    <textarea name="body" placeholder="Viết gì đây nhỉ..." style="resize: none;" rows="4" oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';" ></textarea>
                    <h4>Link ảnh: <input type="text" name="picture" placeholder="link ảnh..." style="width: 215px"></h4>
                    <button style="margin-bottom: 10px; width: 100px; height: 34px;">Lưu Post</button>
                </div>
            </form>
        </div>

        
        @endauth
        {{-- Post --}}
        {{-- @for($i=0; $i<10; $i++)
            @include('Posts')
        @endfor --}}
        @foreach ($Posts as $post)
            @include('Posts')
        @endforeach
        
    </div>
</main> 
@include('footer')