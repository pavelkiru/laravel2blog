@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Пользователь</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Пользователи</a></li>
                <li class="breadcrumb-item active">{{ $user->name }}</li>
            </ol>
        </div>
        <div>
            <p>ID: {{ $user->id }}</p>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>

        <div class="d-flex">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary mr-1">Все пользователи</a>

            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary mr-1">Edit</a>


            <form action="{{ route('admin.users.delete', $user->id)}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </section>

@endsection
