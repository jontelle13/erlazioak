<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <label>Azken 12 postak:</label>
    <ul>
        @foreach ($azkenPosts as $post)
        <div>
            
            <li>
                <h3>{{ $post->post }}</h3>
                <p>{{ $post->created_at }}</p>
            </li>
        </div>
    @endforeach
    </ul>
    
</body>
</html>
