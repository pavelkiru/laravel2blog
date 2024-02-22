@extends('layouts.main')
@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Посты категории {{ $category->title}}</h1>

            <div class="row related_posts d-flex justify-content-around">

                @foreach($posts as $post)

                    <a class="item" href="{{route('fronts.posts.show', $post->id) }}">
                        <h3>{{ $post->title }}</h3>
                        <p>{{$post->category->title}}</p>
                        <img src="{{ url('storage/' . $post->preview_image) }}" alt="">
                    </a>

                @endforeach

            </div>
        </div>

    </main>



@endsection
