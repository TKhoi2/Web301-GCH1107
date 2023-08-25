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
    ">
    
        <div class="fix">
            <button id="editcomment{{$comment->id}}" onclick="showeditcomment({{$comment->id}})">Sửa bình luận</button>
        </div>
        <form class="del" action="/delete/{{$comment->id}}" method="post" >
            @csrf
            @method('DELETE')
            <button>Xóa bình luận</button>
        </form>
    </div>
</div>