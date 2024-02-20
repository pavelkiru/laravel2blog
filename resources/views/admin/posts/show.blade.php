@extends('admin.layouts.main')
@section('content')

    <section class="content show_post">
        <h1>Пост</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
                <li class="breadcrumb-item">{{ $post->title }}</li>
            </ol>
        </div>
        <div>
            <p>ID: {{ $post->id }}</p>
            <p>Title: {{ $post->title }}</p>
            <p>
                <img class="" src="{{ asset('storage/' . $post->main_image) }}" alt="">
            </p>
            <p>Content: {!! $post->content !!}  </p>
            <p>Category: {{ $category->title }}</p>

            <p>Tags</p>
            <ol>
                @foreach($tags as $tag)

                        @foreach($post_tags as $post_tag)
                        @if($tag->id == $post_tag)
                            <li>{{ $tag->title }}</li>
                        @endif

                        @endforeach
                @endforeach

            </ol>
        </div>

        <div class="d-flex">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mr-1">Все посты</a>

            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary mr-1">Edit</a>


            <form action="{{ route('admin.posts.delete', $post->id)}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </section>

@endsection
