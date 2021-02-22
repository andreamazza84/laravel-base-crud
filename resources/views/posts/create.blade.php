<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Create a new post</h1>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form title">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="form">
                <label for="body">Insert content</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <input class="btn" type="submit" value="Submit">
        </form>
        
    </div>
</body>
</html>