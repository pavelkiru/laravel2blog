@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Kатегория</h1>

        <div>
            <p>ID: {{ $category->id }}</p>
            <p>Title: {{ $category->title }}</p>
        </div>

        <div>
            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Все категории</a>
        </div>
    </section>

@endsection
