@extends('layouts.main')

@section('container')
    <article class="mb-5 border-bottom">
        <h1>{{ $post->title }}</h1>

        <p>by: <a href="/User/{{$post->user->name}}" class="text-decoration-none">{{$post->user->name}}</a> in <a href="/Category/{{ $post->category->name}}" class="text-decoration-none">{{ $post->category->name}}</a></p>

        {!! $post->body !!}

    </article>
    
        <a href="/blog" class="">
            <button class="btn btn-primary">
               Back to Blog
            </button>
        </a>
    
@endsection
