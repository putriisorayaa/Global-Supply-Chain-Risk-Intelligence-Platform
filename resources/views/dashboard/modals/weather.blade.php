<div class="modal" id="weatherModal">

    <div class="modal-content">

        <div class="modal-header">

            <h2>🌦 Weather Information</h2>

            <button class="close-btn" onclick="closeModal('weatherModal')">
                ✕
            </button>

        </div>

        @if($weather)

            <div class="info-item">

                <span>Temperature</span>

                <strong>{{ $weather['temperature'] }} °C</strong>

            </div>

            <div class="info-item">

                <span>Wind Speed</span>

                <strong>{{ $weather['wind_speed'] }} km/h</strong>

            </div>

            <div class="info-item">

                <span>Rainfall</span>

                <strong>{{ $weather['rainfall'] }} mm</strong>

            </div>

            <div class="info-item">

                <span>Weather Code</span>

                <strong>{{ $weather['weather_code'] }}</strong>

            </div>

        @else

            <p>No weather data available.</p>

        @endif

    </div>

</div>