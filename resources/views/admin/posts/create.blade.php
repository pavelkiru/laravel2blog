@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Добавление поста</h1>

        <form action="{{ route('admin.posts.store') }}" method="post" >

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10">{{old('content')}}</textarea>
            </div>

            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <input type="text" class="form-control" id="category_id" name="category_id" value="{{ old('category') }}">
            </div>

            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="pt-4">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Все посты</a>
        </div>
    </section>

@endsection
