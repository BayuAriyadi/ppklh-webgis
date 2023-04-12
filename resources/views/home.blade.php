@extends('layouts.main')

@section('container')
    <h1>DINAS LINGKUNGAN HIDUP PROVINSI KALIMANTAN SELATAN</h1>

    <div id="map" class="rounded-3 shadow p-3 mb-5 bg-white rounded"></div>

    <script type="text/javascript">
        
        var L = window.L;
        const map = new L.Map('map');
        const osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

        map.addLayer(osm);

        // Load kml file
        fetch('assets/tes3.kml')
            .then(res => res.text())
            .then(kmltext => {
                // Create new kml overlay
                const parser = new DOMParser();
                const kml = parser.parseFromString(kmltext, 'text/xml');
                const track = new L.KML(kml);
                map.addLayer(track);

                // Adjust map to show the kml
                const bounds = track.getBounds();
                map.fitBounds(bounds);
            });

    </script>
@endsection
