<div class="modal" id="currencyModal">

    <div class="modal-content">

        <div class="modal-header">

            <h2>💱 Currency Information</h2>

            <button class="close-btn" onclick="closeModal('currencyModal')">
                ✕

            </button>

        </div>

        @if($currency)

            <div class="info-item">
                <span>Country Currency</span>
                <strong>{{ $country['currency'] }}</strong>
            </div>

            <div class="info-item">
                <span>Base Currency</span>
                <strong>{{ $currency['base_currency'] }}</strong>
            </div>

            <div class="info-item">
                <span>Exchange Rate</span>
                <strong>1 {{ $currency['base_currency'] }} = {{ number_format($currency['exchange_rate'],4) }} {{ $currency['target_currency'] }}</strong>
            </div>

        @else

            <p>No currency data available.</p>

        @endif

    </div>

</div>