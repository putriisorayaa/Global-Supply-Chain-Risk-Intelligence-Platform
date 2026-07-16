<div class="modal" id="economicModal">

    <div class="modal-content">

        <div class="modal-header">

            <h2>📈 Economic Information</h2>

            <button class="close-btn" onclick="closeModal('economicModal')">
                ✕
            </button>

        </div>

        @if($economic)

            <div class="info-item">
                <span>GDP</span>
                <strong>${{ number_format($economic['gdp'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>Inflation</span>
                <strong>{{ $economic['inflation'] }}%</strong>
            </div>

            <div class="info-item">
                <span>Population</span>
                <strong>{{ number_format($economic['population']) }}</strong>
            </div>

            <div class="info-item">
                <span>Exports</span>
                <strong>${{ number_format($economic['exports'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>Imports</span>
                <strong>${{ number_format($economic['imports'],2) }}</strong>
            </div>

        @else

            <p>No economic data available.</p>

        @endif

    </div>

</div>