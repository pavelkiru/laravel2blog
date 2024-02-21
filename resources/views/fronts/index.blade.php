@extends('layouts.main')
@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <a href="{{route('fronts.posts.show', $post->id) }}" class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ url('storage/' . $post->preview_image) }}" alt="">
                            </div>
                            <p class="blog-post-category">
                                {{$post->category->title}}
                            </p>
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_4.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_5.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_6.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_7.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_8.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_9.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_10.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_11.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget">
                        <h3>Категории</h3>
                        <ul>
                            @foreach($categories as $category)
                                <li>{{ $category->title }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget">
                        <h3>Тэги</h3>
                        <ul>
                            @foreach($tags as $tag)
                                <li>{{ $tag->title }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget random_post_wr">
                        <h3>Случайные посты</h3>
                        <ul>
                            @foreach($randomPosts as $randomPost)
                                <li>
                                    <a href="{{route('fronts.posts.show', $post->id) }}">
                                        <img class="random_post_image" src="{{ url('storage/' . $post->preview_image) }}" alt="">
                                        <span>{{ $randomPost->title }}  </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget random_post_wr">
                        <h3>Популярные посты</h3>
                        <ul>
                            @foreach($likedPosts as $likedPost)
                                <li>
                                    {{ $likedPost->title }}
                                    <span>/
                                        лайков: {{ $likedPost->liked_users_count }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>





                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Post List</h5>
                        <ul class="post-list">
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_1.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </main>



@endsection