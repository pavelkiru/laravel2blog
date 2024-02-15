@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Тег</h1>

        <div>
            <p>ID: {{ $tag->id }}</p>
            <p>Title: {{ $tag->title }}</p>
        </div>

        <div class="d-flex">
            <a href="{{ route('admin.tags.index') }}" class="btn btn-primary mr-1">Все категории</a>

            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-primary mr-1">Edit</a>


            <form action="{{ route('admin.tags.delete', $tag->id)}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </section>

@endsection
