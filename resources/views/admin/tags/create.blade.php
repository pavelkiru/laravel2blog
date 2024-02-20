@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Добавление тега</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Тэги</a></li>
                <li class="breadcrumb-item active">Добавить тэг</li>
            </ol>
        </div>
        <form action="{{ route('admin.tags.store') }}" method="post" class="w-25">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="pt-4">
            <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Все тэги</a>
        </div>
    </section>

@endsection
