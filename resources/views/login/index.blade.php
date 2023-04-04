@extends('layouts.main')


@section('container')
    <main class="form-signin w-100 m-auto">


        {{-- alert pop up when regist success --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- image --}}
        <div class="d-flex justify-content-center">
            <img src="image/{{ $image }}" alt="hanni" width="100px" class="img-thumbnail mb-2 rounded-circle">
        </div>

        {{-- header 1 --}}
        <h1 class="h3 mb-3 fw-normal text-center">Login to connect with people around the world</h1>

        {{-- form login --}}
        <form>
            <div class="form-floating my-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
        </form>

        {{-- click and redirect to regist page --}}
        <small class="d-block text-center mt-2">Not already have accout?
            <a href="/register">
                Register now
            </a>
        </small>
    </main>
@endsection
