<footer>
    <h1 class="orange-text">Last 3 posts</h1>
    <ul>
        @foreach ($latestPosts as $post)
            <a href="/post/{{ $post->id }}">{{ $post->author }} |</a>
        @endforeach
    </ul>
</footer>