<!DOCTYPE html>
<html>
<body>
    <h1>Alle Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->content }}
            </li>
        @endforeach
    </ul>
</body>
</html>
