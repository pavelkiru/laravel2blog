@extends('admin.layouts.main')
@section('content')

    <section class="content">
        <h1>Добавление пользователя</h1>

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
                        <option value="{{ $id }}">{{ $role }}</option>
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
