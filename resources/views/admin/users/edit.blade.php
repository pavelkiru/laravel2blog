@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Обновление пользователя</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Пользователи</a></li>
                <li class="breadcrumb-item active">{{ $user->name }}</li>
            </ol>
        </div>
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

            <div class="mb-3">
                <label for="role" class="form-label">Пользователь</label>
                <select name="role" id="role">
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}">{{ $role }}</option>
                    @endforeach
                </select>
            </div>

            @error('role')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>


            <button type="submit" class="btn btn-primary">Обновить</button>

        </form>

        <div class="mt-2">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Все пользователи</a>
        </div>

    </section>

@endsection
