@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Добавление пользователя</h1>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Пользователи</a></li>
                <li class="breadcrumb-item active">Создать пользователя</li>
            </ol>
        </div>
        <form action="{{ route('admin.users.store') }}" method="post" class="w-25">


            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Пользователь</label>
                <select name="role" id="role">
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}"
                            @if($id == 1)
                                selected
                            @endif
                        >{{ $role }}</option>
                    @endforeach
                </select>
            </div>

            @error('role')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="pt-4">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Все пользователи</a>
        </div>
    </section>

@endsection
