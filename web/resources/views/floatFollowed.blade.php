<div class="floating_container" style="
width:300px; 
max-height:80vh; 
background-color:rgb(255, 255, 255);
top:50px;
right:0"
>
    <div class="floating_menu">
        {{-- notice --}}
            @foreach ( auth()->user()->followed as $follow)
                <a href="/comment/{{ $follow->id}}" class="notification flex_col gray_hover">
                    <div class="user_container flex align_center">
                        <div class="avt_container" style="width:30px">
                            <img class="avt" src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60">
                        </div>
                        <p class="name" style="margin-left:20px"><b> {{$follow->title}}</b></b></p>
                    </div>
                    <p class="content"></p>
                </a>
            @endforeach
    </div>
</div>