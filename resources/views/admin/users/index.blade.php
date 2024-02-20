@extends('admin.layouts.main')
@section('content')

    <section class="content pt-4">

        <div class="d-flex justify-content-between align-content-center align-items-center">
            <h1>Пользователи <span class="rounded p-1 bg-blue br">{{ $users->count() }}</span></h1>

            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Создать</a>
        </div>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item active">Пользователи</li>
            </ol>
        </div>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" class="d-flex justify-content-end mr-1">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $roles[$user->role] }}</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary mr-1">Show</a>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary mr-1">Edit</a>


                                    <form action="{{ route('admin.users.delete', $user->id)}}" method="post">
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
