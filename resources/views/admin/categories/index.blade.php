@extends('admin.layouts.main')
@section('content')

    <section class="content pt-4">

        <div class="d-flex justify-content-between align-content-center align-items-center">
            <h1>Categories <span class="rounded p-1 bg-blue br">{{ $categories->count() }}</span></h1>

            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Создать</a>
        </div>
        <div class="col-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                <li class="breadcrumb-item active">Категории</li>
            </ol>
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
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->title }}</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.category.show', $category->id) }}" class="btn btn-primary mr-1">Show</a>
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary mr-1">Edit</a>


                                    <form action="{{ route('admin.category.delete', $category->id)}}" method="post">
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
