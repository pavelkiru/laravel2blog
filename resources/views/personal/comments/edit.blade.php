@extends('personal.layouts.main')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Редактировать комментарий</h1>
                </div><!-- /.col -->

                <div class="col-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('personal.comments.index') }}">Комментарии</a></li>
                        <li class="breadcrumb-item active">{{ $comment->id }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>



    <section class="content">


        <form action="{{ route('personal.comments.update', $comment->id ) }}" method="post" class="w-25">

            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <input type="text" class="form-control" id="message" name="message" value="{{ $comment->message }}">
            </div>

            @error('title')
            <div class="alert alert-danger">{{ $comment->message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>

        <div class="mt-2">
            <a href="{{ route('personal.comments.index') }}" class="btn btn-primary">Все комментарии</a>
        </div>

    </section>


@endsection
