@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit post</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                {{-- oldy('', $). merupakan fitur laravel untuk cetak value old value --}}
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required value="{{ old('title', $post->title) }}">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3" style="display: none;">
                <label for="slug" class="form-label">Auto generate slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    readonly required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            {{-- image --}}
            <div class="mb-3">
                <label for="image" class="form-label">Update image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                {{-- case if untuk preview old image --}}
                @if ($post->image)
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid img-preview col-sm-5 mb-3">
                    </div>
                @else
                    <img class="img-fluid img-preview col-sm-5 mb-3">
                @endif
                {{-- case input and preview image --}}
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body" class="form-control @error('body') is-invalid @enderror"></trix-editor>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Post</button>
        </form>
    </div>


    {{-- script untuk melakukan event change slug dari title --}}
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });


        // script untuk mematikan fitur upload file trix
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        });

        // script untuk membuat preview image 
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
