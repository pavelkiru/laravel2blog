@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Пост</h1>

        <div>
            <p>ID: {{ $post->id }}</p>
            <p>Title: {{ $post->title }}</p>
        </div>

        <div class="d-flex">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mr-1">Все посты</a>

{{--            <a href="{{ route('admin.tags.edit', $post->id) }}" class="btn btn-primary mr-1">Edit</a>--}}


{{--            <form action="{{ route('admin.tags.delete', $post->id)}}" method="post">--}}
{{--                @method('delete')--}}
{{--                @csrf--}}
{{--                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--            </form>--}}
        </div>
    </section>

@endsection
