@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <h5 class="my-3 text-center">Categories</h5>

            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blog?category={{ $category->slug }}" class="text-decoration-none text-light">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-3 fs-3"
                                    style="background-color: rgba(0, 0, 0, 0.4)">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
