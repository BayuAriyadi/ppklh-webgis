@extends('layouts.main')

@section('container')
    <form method="POST" action="{{ route('kml.upload') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Select KML files:</label>
            <input type="file" id="file" name="file[]" multiple>
        </div>
        <div>
            <button type="submit">Upload</button>
        </div>
    </form>
@endsection
