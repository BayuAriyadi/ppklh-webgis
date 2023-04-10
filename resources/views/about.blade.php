@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h1>{{ $name }}</h1>
    <h2>{{ $email }}</h2>
    <img src={{ $image }} alt="{{ $name }}" width=100 px>
@endsection
