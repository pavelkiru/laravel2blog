@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Kатегория</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Категории</a></li>
                <li class="breadcrumb-item active">{{ $category->title }}</li>
            </ol>
        </div>
        <div>
            <p>ID: {{ $category->id }}</p>
            <p>Title: {{ $category->title }}</p>
        </div>

        <div class="d-flex">
            <a href="{{ route('admin.category.index') }}" class="btn btn-primary mr-1">Все категории</a>

            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary mr-1">Edit</a>


            <form action="{{ route('admin.category.delete', $category->id)}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </section>

@endsection
