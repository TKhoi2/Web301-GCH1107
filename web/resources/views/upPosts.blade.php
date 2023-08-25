<div style="border: 3px solid black;">
    <h2>Tạo một Post mới</h2>
    <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="post title">
        <textarea name="body" placeholder="body content..."></textarea>
        <button>Lưu Post</button>
    </form>
</div>
