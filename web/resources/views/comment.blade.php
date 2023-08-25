@include('header')
<head>
    <link rel="stylesheet" href="{{ asset('/css/mainContent.css') }}">
</head><main class="body flex justify_center">
    <div class="main_content">
        {{-- Post --}}
        @include('Posts')
        @auth
        <form action="/upcomments/{{$post->id}}" method="POST"  class="write_comment flex">
            @csrf
            <div class="avt_container" style="width:30px; height:30px"><img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
            <div style="width: 100%; gap:10px" class="flex_col">
                <textarea name="commentcontent" class="input_area" rows="4" oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';" placeholder="Viết gì đó cho bài viết này"></textarea>
                <button class="send">Đăng</button>
            </div>
        </form>
        @endauth
        <div class="comment_container flex_col">
            @foreach($comments as $comment)
                <div class="comment">
                    <div class="user flex align_center">
                        <div class="avt_container" style="width:30px;"><img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
                        <p class="name mr-20"><b>{{$comment->user->name}}</b></p>
                        @auth
                        @if($comment->user->id === auth()->user()->id)
                        @include('commentCommand')
                        @endif
                        @endauth
                    </div>
                    <p class="content">{{$comment->content}}</p>
                    <form class="hidden editcomment " id="edits{{$comment->id}}" action="/editcomment/{{ $comment->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex_col" style="gap: 10px">
                            <textarea name="edited_comment">{{ $comment->comment }}</textarea>
                            <button>Sửa</button>
                        </div>
                        
                    </form>
                </div>
            @endforeach
            
        </div>

    </div>
</main> 
@include('footer')