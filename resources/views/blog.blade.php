@extends('layouts.main')

@section('container')

    <h1 class="mb-5">{{$title}}</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <h1>{{ $post->title }}</h1>
            </a>
            <p>by: <a href="/User/{{$post->user->name}}" class="text-decoration-none">{{$post->user->name}}</a> in <a href="/Category/{{ $post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></p>
            <p>{{ $post->excerpt }}</p>
            <p><a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More...</p>
        </article>
    @endforeach
    
@endsection
