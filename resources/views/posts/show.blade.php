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
        <h1 class="title">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <p>Created at: {{ $post->created_at }}</p>
        <p>Updated at: {{ $post->updated_at }}</p>
        <form action="{{ route('posts.store')}}">
            <input class="btn" type="submit" value="Back to list">
        </form>
    </div>
</body>