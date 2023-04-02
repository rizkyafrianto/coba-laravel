@extends('layouts.main')

@section('container')
    <h5 class="my-3">Category: {{ $category }} </h5>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2><a href="/categories/{{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
