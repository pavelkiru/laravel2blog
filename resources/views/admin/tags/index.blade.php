@extends('admin.layouts.main')
@section('content')

    <section class="content pt-4">

        <div class="d-flex justify-content-between align-content-center align-items-center">
            <h1>Tags <span class="rounded p-1 bg-blue br">{{ $tags->count() }}</span></h1>

            <a href="{{ route('admin.tags.create') }}" class="btn btn-primary">Создать</a>
        </div>

        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col" class="d-flex justify-content-end mr-1">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <th scope="row">{{ $tag->id }}</th>
                            <td>{{ $tag->title }}</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-primary mr-1">Show</a>
                                    <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-primary mr-1">Edit</a>


                                    <form action="{{ route('admin.tags.delete', $tag->id)}}" method="post">
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
