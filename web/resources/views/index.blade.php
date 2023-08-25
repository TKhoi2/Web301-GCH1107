@include('header')
{{--  than web --}}
<main class="body flex justify_center">
    <div class="main_content">
        @auth
        <div style="border: 3px solid black;">
            <h2>Tạo một Post mới</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="post title">
                <textarea name="body" placeholder="body content..."></textarea>
                <button>Lưu Post</button>
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