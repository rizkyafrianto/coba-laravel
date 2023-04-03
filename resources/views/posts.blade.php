@extends('layouts.main')

@section('container')
    <h1 class="mb-3 ">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            {{-- img with web unsplash --}}
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/blog/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p><small class="text-body-secondary">
                        <a href="/categories/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif


    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/blog/{{ $post->slug }}"
                                    class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <p><small class="text-body-secondary"> <a href="/categories/{{ $post->category->slug }}"
                                        class="text-decoration-none">{{ $post->category->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
