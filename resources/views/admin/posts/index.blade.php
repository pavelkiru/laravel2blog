@extends('admin.layouts.main')
@section('content')

    <section class="content pt-4 show_all_posts">

        <div class="d-flex justify-content-between align-content-center align-items-center">
            <h1>Posts <span class="rounded p-1 bg-blue br">{{ $posts->count() }}</span></h1>

            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Создать</a>
        </div>

        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category</th>
                    <th scope="col">Preview</th>
                    <th scope="col" class="d-flex justify-content-end mr-1">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{!! $post->content !!}</td>
                            <td><img src="{{ url('storage/' . $post->preview_image) }}" alt=""></td>
                            <td>
                                @foreach($categories as $category)
                                    @if( $category->id == $post->category_id )
                                        {{ $category->title }}
                                    @endif

                                @endforeach
                            </td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary mr-1">Show</a>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary mr-1">Edit</a>


                                    <form action="{{ route('admin.posts.delete', $post->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
