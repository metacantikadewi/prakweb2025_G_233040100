<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Categories</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }

        h1 {
            text-align: center;
        }

        ul {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            list-style: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
        }

        .nav {
            text-align: center;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <div class="nav">
        <a href="/posts">Posts</a> |
        <a href="/categories">Categories</a>
    </div>

    <h1>Daftar Categories</h1>

    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>

</body>

</html>
