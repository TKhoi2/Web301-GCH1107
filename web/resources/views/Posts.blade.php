<div id="post{{ $i }}" class="post">
    <div class="user flex align_center">
        <div class="avt_container" style="width:50px;"><img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
        <p class="name mr-20"><b>Kudle</b></p>
        <p class="mr-20">4 ngày trước</p> 
        @include('PostCommand')
    </div>
    <div class="content">
        {{-- title --}}
        <h2 class="title"><b>Tiêu đề Post</b></h2>
        {{-- content --}}
        <p class="body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim delectus pariatur maxime rerum beatae ad accusamus molestias magni nam! Beatae harum, blanditiis molestiae nihil sit aspernatur suscipit porro maxime nulla!</p>
        <img src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""> 
    </div>
    <div class="action flex align_center">
        <div class="flex_col align_center">
            <label id="label{{ $i }}" class="flex align_center" for="like{{ $i }}"><img src="https://img.icons8.com/?size=512&id=581&format=png" alt="" width="20px"><p>154</p></label>
            <button class="like flex center gray_hover" id="like{{ $i }}" onclick="LikePost({{ $i }})"><div class="img" style="transform:scaleX(-1)" ></div>Thích</button>
        </div>
        <div class="flex_col align_center">
            <label class="flex align_center" for="comment{{ $i }}"><img src="https://img.icons8.com/?size=512&id=82768&format=png" alt="" width="20px">30 </label>
            <a href="/comment/{{ $i }}" class="comment flex center gray_hover"><img src="https://img.icons8.com/?size=512&id=38977&format=png" width="25px" id="comment{{ $i }}">Bình luận</a>
        </div>
    </div>
</div>