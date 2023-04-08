@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <p>in <a class="text-decoration-none"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                {{-- pengkondisian untuk gambar --}}
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid col-sm-8" alt="">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                        alt="">
                @endif

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

                {{-- back button --}}
                <a href="/dashboard/posts" class="btn btn-dark"><i class="bi bi-back"></i> Back</a>
                {{-- edit button --}}
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil">
                        Edit</i></a>
                {{-- delete button --}}
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i>
                        Delete</button>
                </form>

            </div>
        </div>
    </div>
@endsection
