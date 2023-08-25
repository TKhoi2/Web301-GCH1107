@include('header')
<main class="body flex justify_center">     
    <h1>Edit Post</h1>
        <form action="/edit-post/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}">
            <textarea name="body">{{$post->body}}</textarea>
            <button>Save Changes</button>
        </form>


</main> 
@include('footer')