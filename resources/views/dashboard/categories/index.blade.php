@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
    </div>

    {{-- alert pop up when regist success --}}
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        {{-- loop variable from laravel --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{-- tool crud --}}

                            {{-- show button --}}
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i
                                    class="bi bi-eye"></i></a>
                            {{-- edit button --}}
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil"></i></a>
                            {{-- delete button --}}
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                        class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
