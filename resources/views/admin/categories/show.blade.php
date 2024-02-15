@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Kатегория</h1>

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
