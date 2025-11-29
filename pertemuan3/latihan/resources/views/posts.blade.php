<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Posts</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }

        h1 {
            text-align: center;
        }

        .post {
            background: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        }

        .post h2 {
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #0d6efd;
        }

        .nav {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="nav">
        <a href="/posts">Posts</a> |
        <a href="/categories">Categories</a>
    </div>

    <h1>Daftar Posts</h1>

    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->excerpt }}</p>
            <small>Kategori ID : {{ $post->category_id }}</small>
        </div>
    @endforeach

</body>

</html>
