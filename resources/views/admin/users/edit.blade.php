@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Обновление пользователя</h1>

        <form action="{{ route('admin.users.update', $user->id ) }}" method="post" class="w-25">

            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>

        <div class="mt-2">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Все пользователи</a>
        </div>

    </section>

@endsection