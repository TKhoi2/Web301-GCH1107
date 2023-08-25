<div class="command floating" style="margin-left:auto">
    <div class="command_icon_container flex center">
        <div class="command_icon"></div>
    </div>
    <div class="floating_container flex_col" style="
    width:100px;
    height:fit-content;
    background-color:whitesmoke;
    padding:5px;
    top:40px;
    right:-20px;
    user-select: none;
    ">

        <form class="fix" action="/follow-post/{{ $post->id }}" method="post">
            @csrf
            @method('PATCH')
            @if($post->userfollowed->contains('userId', auth()->user()->id))
                <button>Hủy Theo dõi</button>
            @else
                <button>Theo dõi</button>
            @endif
        </form>
        @if($post->user->id === auth()->user()->id)
            <form class="fix" action="#" method="post">
                @csrf
                @method('PATCH')
                <button>Sửa bài viết</button>
            </form>
        
        
            <form class="del" action="#" method="post" >
                @csrf
                @method('DELETE')
                <button>Xóa bài viết</button>
            </form>
        @endif
                        
        
    </div>
</div>