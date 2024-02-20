@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Добавление поста</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
                <li class="breadcrumb-item">Добавить пост</li>
            </ol>
        </div>
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
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="col-md-6" data-select2-id="30">
                <div class="form-group d-flex flex-column">
                    <label>Multiple</label>
                    <select class="select2 select2-hidden-accessible w-50" multiple="multiple" name="tag_ids[]" data-placeholder="Select a Tag">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @error('tags')
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

            @error('preview_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


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

            @error('main_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="pt-4">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Все посты</a>
        </div>
    </section>


@endsection
