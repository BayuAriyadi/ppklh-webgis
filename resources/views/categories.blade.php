@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    
    <ul class="list-group">
        @foreach ($categories as $category)
            <li class="list-group-item">
                <a href="/Category/{{ $category->name }}" class="text-">
                    <h2>{{ $category->name }}</h2>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
