@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Добавление поста</h1>

        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">

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
                <label for="category" class="form-label">Category</label>
                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="exampleInputFile">Добавить превью</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="preview_image" name="preview_image">
                        <label class="custom-file-label" for="preview_image">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputFile">Добавить изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="main_image" name="main_image">
                        <label class="custom-file-label" for="main_image">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="pt-4">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Все посты</a>
        </div>
    </section>

@endsection
