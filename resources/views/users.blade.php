@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">People</h1>
    
    <div class="row justify-content-center">

        @foreach ($users as $user)
            <div class="col-4 mb-5">
                <div class="card" style="width: 20rem;">
                    <img src="https://source.unsplash.com/random/300x300/?profile" class="card-img-top"  alt="{{ $user->name }}">

                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="/User/{{ $user->name }}" class="btn btn-primary">Go Somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
