<div id="post{{ $post->id }}" class="post">
    <div class="user flex align_center">
        <div class="avt_container" style="width:50px;"><img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
        <p class="name mr-20"><b>Được viết Bởi {{ $post->user->name}}</b></p>
        <p class="mr-20">4 ngày trước</p> 
        @include('PostCommand')
    </div>
    <div class="content">
        {{-- title --}}
        <h2 class="title"><b>{{$post->title}}</b></h2>
        {{-- content --}}
        <p class="body">{{$post->body}}</p>
        <img src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> 
    </div>
    <div class="action flex align_center">
        <div class="flex_col align_center">
            <label id="label{{ $post->id }}" class="flex align_center" for="like{{ $post->id }}"><img src="https://img.icons8.com/?size=512&id=581&format=png" alt="" width="20px"><p>154</p></label>
            <button class="like flex center gray_hover" id="like{{ $post->id }}" onclick="LikePost({{ $post->id }})"><div class="img" style="transform:scaleX(-1)" ></div>Thích</button>
        </div>
        <div class="flex_col align_center">
            <label class="flex align_center" for="comment{{ $post->id }}"><img src="https://img.icons8.com/?size=512&id=82768&format=png" alt="" width="20px">30 </label>
            <a href="/comment/{{ $post->id }}" class="comment flex center gray_hover"><img src="https://img.icons8.com/?size=512&id=38977&format=png" width="25px" id="comment{{ $post->id }}">Bình luận</a>
        </div>
    </div>
</div>