<div class="dashboard-cards">

    <!-- GDP -->
    <div class="card clickable" onclick="openModal('economicModal')">

        <div class="card-icon">📈</div>

        <div class="card-title">
            GDP
        </div>

        <div class="card-value">

            @if($economic)

                ${{ number_format($economic['gdp']/1000000000,1) }}B

            @else

                -

            @endif

        </div>

    </div>

    <!-- Weather -->
    <div class="card clickable" onclick="openModal('weatherModal')">

        <div class="card-icon">🌦</div>

        <div class="card-title">
            Weather
        </div>

        <div class="card-value">

            @if($weather)

                {{ $weather['temperature'] }}°C

            @else

                -

            @endif

        </div>

    </div>

    <!-- Currency -->
    <div class="card clickable" onclick="openModal('currencyModal')">

        <div class="card-icon">💱</div>

        <div class="card-title">
            Currency
        </div>

        <div class="card-value">

            @if($country)

                {{ $country['currency'] }}

            @else

                -

            @endif

        </div>

    </div>

    <!-- Risk -->
    <div class="card clickable" onclick="openModal('riskModal')">

        <div class="card-icon">⚠</div>

        <div class="card-title">
            Risk
        </div>

        <div class="card-value">

            @if($risk)

                {{ $risk['level'] }}

            @else

                -

            @endif

        </div>

    </div>

</div>