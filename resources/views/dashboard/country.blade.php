@if($country)

<hr>

<h3>🌍 Country Information</h3>

<img src="{{ $country['flag'] }}" width="120">

<h3>{{ $country['name'] }}</h3>

<p><b>Code :</b> {{ $country['code'] }}</p>

<p><b>Capital :</b> {{ $country['capital'] }}</p>

<p><b>Region :</b> {{ $country['region'] }}</p>

<p><b>Currency :</b> {{ $country['currency'] }}</p>

<p><b>Population :</b> {{ number_format($country['population']) }}</p>

<p><b>Latitude :</b> {{ $country['latitude'] }}</p>

<p><b>Longitude :</b> {{ $country['longitude'] }}</p>

@endif