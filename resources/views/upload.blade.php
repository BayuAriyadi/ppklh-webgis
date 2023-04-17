@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-6 mb-3">
            <div class="form-floating ">
                <input type="email" class="form-control" id="floatingInput" name="lokasi" placeholder="Lokasi">
                <label for="floatingInput">Lokasi</label>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-3">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="latitude" placeholder="Latitude">
                <label for="floatingInput">Latitude</label>
            </div>
        </div>
        <div class="col-3">
            <div class="form-floating ">
                <input type="email" class="form-control" id="floatingInput" name="longitude" placeholder="Longitude">
                <label for="floatingInput">Longitude</label>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload file kml</label>
                <input class="form-control" type="file" id="formFile" name="file">
            </div>
            <input class="btn btn-primary" type="submit" value="upload">
        </div>
        
    </div>
    
@endSection
