@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"></div>

            <h1>{{ $post->title }}</h1>

            <p>by: <a href="/User/{{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                    href="/Category/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                class="img-fluid mb-3">

            <article class="mb-3 fs-5">
                {!! $post->body !!}

            </article>

            <a href="/blog" class="">
                <button class="btn btn-primary">
                    Back to Blog
                </button>
            </a>

        </div>
    </div>
@endsection
