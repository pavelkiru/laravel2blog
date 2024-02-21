@extends('personal.layouts.main')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Комментарии</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Комментарии</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>

                    <th scope="col">Content</th>

                    <th scope="col" class="d-flex justify-content-end mr-1">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->id }}</th>

                        <td>{{ $comment->message }}</td>

                        <td>

                            <div class="d-flex justify-content-end">

                                <a href="{{ route('personal.comments.edit', $comment->id) }}" class="btn btn-primary mr-1">Edit</a>


                                <form action="{{ route('personal.comments.delete', $comment->id)}}" method="post">
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

        </div><!-- /.container-fluid -->
    </section>


@endsection
