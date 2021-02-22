@extends('layout')
@section('content')
    @foreach ($posts as $post)
        <div class="card">
            <h3 class="title">{{ $post->title }}</h3>
            <p class="content">{{ $post->body }}</p>
            <p class="time">{{ $post->created_at }}</p>
        </div>
    @endforeach    
@endsection