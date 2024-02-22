@extends('layouts.main')
@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>

            <ul>
                @foreach($categories as $category)

                    <a href="{{ route('categories.posts.index', $category->id) }}"><li>{{ $category->title }}</li></a>

                @endforeach
            </ul>
        </div>

    </main>



@endsection
