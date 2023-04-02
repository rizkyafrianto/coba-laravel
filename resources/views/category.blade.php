@extends('layouts.main')

@section('container')
    <h5 class="my-3">Category: {{ $category }} </h5>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
