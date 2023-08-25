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
        <form class="fix" action="#" method="post">
            @csrf
            @method('PATCH')
            <button>Sửa bình luận</button>
        </form>
        <form class="del" action="#" method="post" >
            @csrf
            @method('DELETE')
            <button>Xóa bình luận</button>
        </form>
    </div>
</div>