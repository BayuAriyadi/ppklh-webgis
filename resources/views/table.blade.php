@extends('layouts.main')

@section('container')
    <table class="table table-stripped table-hover">
        <thead>
            <th>No</th>
            <th>Lokasi</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>File kml</th>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->lokasi }}</td>
                    <td>{{$data->latitude}}</td>
                    <td>{{$data->Longitude}}</td>
                    <td>{{$data->file}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endSection
