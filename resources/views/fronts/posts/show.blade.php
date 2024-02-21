@extends('layouts.main')
@section('content')

<div class="container post_wr">

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

    <div class="main_image_wr">
        <img class="main_image" src="{{ url('storage/' . $post->main_image) }}" alt="">
    </div>
    <p>{!! $post->content !!}</p>





        <div class="row comments_wr">
            <div class="col-12">
                <h4>Комментарии {{ $post->comments->count() }}</h4>
                @if($post->comments->count() != 0)

                    @foreach($post->comments as $comment)
                        <div class="d-flex item">

                            <div class="mr-5 user_data_wr">
                                <p>{{ $comment->dateAsCarbon->diffForHumans() }}</p>
                                <p>{{ $comment->user->name }}</p>
                            </div>

                            <div>
                                {{ $comment->message }}
                            </div>
                        </div>
                        <hr>
                    @endforeach

                @else

                    <div>
                        Пусто
                    </div>

                @endif

            </div>
        </div>








    @auth()
        <div class="row">
            <div class="col-12">
                <form action="{{ route('post.comments.store', $post->id) }}" method="post" class="w-100">

                    @csrf

                    <div class="mb-3">
                        <label for="message" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="message" name="message" value="{{ old('title') }}">
                    </div>

                    {{--            <input type="hidden" name="post_id" value="{{ $post->id }}">--}}

                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endauth


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
