@extends('layouts.main')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-6">
            <h1>{{ $post->title }}</h1>
            <p>ID: {{$post->id}}</p>
            <p>{{$post->category->title}}</p>
        </div>

        <div class="col-6  d-flex justify-content-end">
            <div>
                <a href="{{ route('fronts.index') }}" class="btn btn-primary">Все посты</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            {{ $data->day }}
            {{ $data->translatedFormat('F') }}
            {{ $data->year }}
            {{ $data->format('H:i') }}
            <span>{{ $post->comments->count() }}</span>
        </div>
    </div>

    <img src="{{ url('storage/' . $post->main_image) }}" alt="">
    <p>{!! $post->content !!}</p>

    <div class="row related_posts d-flex justify-content-around">

        @foreach($relatedPosts as $relatedPost)

            <a class="item" href="{{route('fronts.posts.show', $relatedPost->id) }}">
                <h3>{{ $relatedPost->title }}</h3>
                <p>{{$relatedPost->category->title}}</p>
                <img src="{{ url('storage/' . $relatedPost->preview_image) }}" alt="">
            </a>

        @endforeach

    </div>
</div>




@endsection
