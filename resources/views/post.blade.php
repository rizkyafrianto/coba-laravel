@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>


    <p>By: in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {{ $post->body }}

    <a href="/blog">Back to Posts</a>
@endsection
