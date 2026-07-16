<hr>

<h3>🌍 Country Location</h3>

<div id="map" style="height:500px;width:100%;border:1px solid #ccc;"></div>

@if($country)

<script>

window.addEventListener('load', function () {

    var map = L.map('map').setView(
        [
            {{ $country['latitude'] }},
            {{ $country['longitude'] }}
        ],
        5
    );

    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            attribution: '&copy; OpenStreetMap contributors'
        }
    ).addTo(map);

    L.marker([
        {{ $country['latitude'] }},
        {{ $country['longitude'] }}
    ])
    .addTo(map);

    @foreach($ports as $port)

    L.marker([
        {{ $port->latitude }},
        {{ $port->longitude }}
    ])
    .addTo(map)
    .bindPopup("⚓ {{ $port->port_name }}");

    @endforeach

});

</script>

@endif