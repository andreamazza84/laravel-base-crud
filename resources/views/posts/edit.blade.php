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

        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form">
                <label class="subtitle" for="title">Change title: </label>
                <input type="text" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div class="form">
                <label class="subtitle" for="body">Change content: </label>
                <textarea name="body" id="body" cols="30" rows="10">{{ $post->body }}</textarea>
            </div>
            <input class="btn" type="submit" value="Insert">
        </form>
        <form action="{{ route('posts.store')}}">
            <input class="btn" type="submit" value="Back to list">
        </form>
    </div>
</body>