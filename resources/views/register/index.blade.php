@extends('layouts.main')


@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Fill up to complete register</h1>
                <form>
                    <div class="form-floating my-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
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
