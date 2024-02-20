@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Обновление категории</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Категории</a></li>
                <li class="breadcrumb-item active">{{ $category->title }}</li>
            </ol>
        </div>
        <form action="{{ route('admin.category.update', $category->id ) }}" method="post" class="w-25">

            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
            </div>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>

        <div class="mt-2">
            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Все категории</a>
        </div>

    </section>

@endsection
