@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <p>Hello. my name is {{ $name }}</p>
    <p>you can e-mail me to {{ $email }} </p>
    <img src="image/{{ $image }}" alt="hanni" width="150px" class="img-thumbnail rounded-circle">
@endsection
