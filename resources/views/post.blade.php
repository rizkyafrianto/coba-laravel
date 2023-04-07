@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By: {{ $post->user->name }} in <a class="text-decoration-none"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                        alt="">
                @endif
                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block">Back to Posts</a>

            </div>
        </div>
    </div>
@endsection
