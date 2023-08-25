@include('header')
{{--  than web --}}
<main class="body flex justify_center">
    <div class="main_content">
        @auth
        <div style="border: 3px solid black;">
            <h2 style="color: orchid; text-align:center">Tạo một Post mới</h2>
            <form class="flex_col center"  action="/create-post" method="POST">
                @csrf
                <div class="flex_col" style="width: 70%; gap: 10px">
                    <input type="text" name="title" placeholder="Tiêu đề">
                    <textarea name="body" placeholder="Viết gì đây nhỉ..." style="resize: none" oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';" ></textarea>
                    <input type="text" name="picture" placeholder="link ảnh...">
                    <button>Lưu Post</button>
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