@extends('layouts.main')

@section('container')
    <h1>User : {{ $users }}</h1>

    @foreach ($posts as $post)
        <article>
            <a href="/blog/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
