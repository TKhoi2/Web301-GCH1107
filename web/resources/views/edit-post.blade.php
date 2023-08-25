@include('header')
<head>
    <link rel="stylesheet" href="{{ asset('/css/mainContent.css') }}">
</head>
<main class="body flex justify_center">
    <div class="main_content">
    <main class="floating_menu" style="border: 5px solid black; background-color:rgb(197, 239, 239); border-radius: 10px; margin-top:10px; margin-bottom:10px">  
        <h1 style="padding: 10px">Chỉnh sửa bài viết</h1>
            <form class="flex_col center" action="/edit-post/{{$post->id}}" method="POST" style="style=width: 70%; gap: 20px">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{$post->title}}" style="width: 220px; heigh: 30px;">
                <textarea name="body" style="resize: none; width: 220px" rows="4">{{$post->body}} </textarea>
                <input type="text" name="picture" placeholder="link ảnh..." style="width: 215px">
                <button>Lưu sự thay đổi</button>
            </form>


    </main> 
</main>
@include('footer')