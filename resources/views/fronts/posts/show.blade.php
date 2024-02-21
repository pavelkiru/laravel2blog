@extends('layouts.main')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-6">
            <h1>{{ $post->title }}</h1>
            <p>ID: {{$post->id}}</p>
        </div>

        <div class="col-6  d-flex justify-content-end">
            <div>
                <a href="{{ route('fronts.index') }}" class="btn btn-primary">Все посты</a>
            </div>
        </div>
    </div>
    <img src="{{ url('storage/' . $post->main_image) }}" alt="">
    <p>{!! $post->content !!}</p>
</div>




@endsection
