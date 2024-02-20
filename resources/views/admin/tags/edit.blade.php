@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Обновление тега</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Тэги</a></li>
                <li class="breadcrumb-item active">{{ $tag->title }}</li>
            </ol>
        </div>
        <form action="{{ route('admin.tags.update', $tag->id ) }}" method="post" class="w-25">

            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $tag->title }}">
            </div>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>

        <div class="mt-2">
            <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Все тэги</a>
        </div>

    </section>

@endsection
