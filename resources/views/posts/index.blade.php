<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista di tutti i post</title>
    <style>
        html, body{
            background-color: #f1f1f1;
            color: #333;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            width: 90%;
            margin: auto;
        }
        table{
            border: 1px solid #aaa;
        }
        td{
            padding: 2px;
        }
        .btn{
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">

        <h1>Admin | All posts</h1>
        <a class="btn" href="{{ route('posts.create') }}">Create a new post</a>
    
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                    <th>date</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="body">{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a class="btn" href="">View</a>
                        <a class="btn" href="">Edit</a>
                        <form action="" method="get">
                            <input class="btn" type="submit" value="Delete">
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>