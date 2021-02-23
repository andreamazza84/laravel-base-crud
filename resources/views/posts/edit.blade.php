@extends('layout')
@section('content')

    <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form title">
                <label for="title">Change title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div class="form">
                <label for="body">Change content</label>
                <textarea name="body" id="body" cols="30" rows="10">{{ $post->body }}</textarea>
            </div>
            <input class="btn" type="submit" value="Submit">
        </form>
@endsection