@extends('layouts.main')

@section('container')
    <table class="table table-stripped table-hover">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Lokasi</th>
            <th>file</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name }}</td>
                    <td>
                        @foreach ($categories as $category)
                            {{$category->name}} ,
                            
                        @endforeach
                    </td>
                    <td>undefined</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endSection
