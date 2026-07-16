<div class="modal" id="riskModal">

    <div class="modal-content">

        <div class="modal-header">

            <h2>⚠ Risk Assessment</h2>

            <button class="close-btn" onclick="closeModal('riskModal')">

                ✕

            </button>

        </div>

        @if($risk)

            <div class="info-item">
                <span>Weather Score</span>
                <strong>{{ number_format($risk['weather'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>Inflation Score</span>
                <strong>{{ number_format($risk['inflation'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>Currency Score</span>
                <strong>{{ number_format($risk['currency'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>News Score</span>
                <strong>{{ number_format($risk['news'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>Total Score</span>
                <strong>{{ number_format($risk['total'],2) }}</strong>
            </div>

            <div class="info-item">
                <span>Risk Level</span>
                <strong>{{ $risk['level'] }}</strong>
            </div>

        @else

            <p>No risk analysis available.</p>

        @endif

    </div>

</div>