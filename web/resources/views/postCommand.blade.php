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
        <form class="fix" action="#" method="post">
            @csrf
            @method('PATCH')
            <button>Sửa bài viết</button>
        </form>
        <form class="fix" action="#" method="post">
            @csrf
            <button>Theo dõi</button>
        </form>
        <form class="fix" action="#" method="post">
            @csrf
            <button>Bỏ theo dõi</button>
        </form>
        <form class="del" action="#" method="post" >
            @csrf
            @method('DELETE')
            <button>Xóa bài viết</button>
        </form>
    </div>
</div>