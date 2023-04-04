@extends('layouts.main')


@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Fill up to complete register</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating my-2">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Name" required value="{{ old('name') }}" autocomplete="off">
                        <label for="name">Name</label>
                        {{-- give error message from laravel --}}
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}"
                            autocomplete="off">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-2">Already registered?
                    <a href="/login">
                        Login
                    </a>
                </small>
            </main>
        </div>
    </div>
@endsection
