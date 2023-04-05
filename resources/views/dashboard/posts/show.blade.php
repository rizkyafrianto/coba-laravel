@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <p>in <a class="text-decoration-none"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="">

                <article class="my-3 fs-6">
                    {{ $post->body }}
                </article>

                <a href="/dashboard/posts" class="btn btn-dark"><i class="bi bi-back"></i> Back</a>
                <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i> Delete</a>

            </div>
        </div>
    </div>
@endsection
