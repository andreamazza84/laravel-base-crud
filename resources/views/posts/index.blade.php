<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Lista di tutti i post</title>
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
                        <a class="btn" href="{{ route('posts.show', $post->id) }}">View</a>
                        <a class="btn" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
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