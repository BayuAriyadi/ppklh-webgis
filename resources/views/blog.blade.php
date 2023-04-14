@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6 mb3">
            <form action="/blog">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}" id="search">
                    <button class="btn btn-primary btn-outline-white bx bx-search" type="button" for="search"></button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-5" style="width: auto;">
            <img src="https://source.unsplash.com/1200x300/?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                </h3>
                <small>
                    <p>by: <a href="/User/{{ $posts[0]->user->name }}"
                            class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a
                            href="/Category/{{ $posts[0]->category->name }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>


                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>



        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7) ">
                                <a href="/Category/{{ $post->category->name }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/600x300/?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <small>
                                    <p>by: <a href="/User/{{ $post->user->name }}"
                                            class="text-decoration-none">{{ $post->user->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">Post not found :(.</p>
    @endif
@endsection
