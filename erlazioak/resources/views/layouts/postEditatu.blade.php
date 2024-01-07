<div>
    <form action="/editatuta" method="post">
        @csrf
        <input type="text" value={{ $post->post }} name='post'>
        <input type="hidden" value={{ $post->id }} name='postId'>
        <input type="submit" value="editatu">
    </form>
</div>