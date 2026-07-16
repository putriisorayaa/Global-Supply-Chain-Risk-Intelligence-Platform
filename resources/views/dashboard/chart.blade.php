@if($risk)

<hr>

<h3>📊 Risk Composition</h3>

<canvas id="riskChart" height="120"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('riskChart');

new Chart(ctx,{

    type:'bar',

    data:{

        labels:[
            'Weather',
            'Inflation',
            'Currency',
            'News'
        ],

        datasets:[{

            label:'Risk Score',

            data:[
                {{ $risk['weather'] }},
                {{ $risk['inflation'] }},
                {{ $risk['currency'] }},
                {{ $risk['news'] }}
            ]

        }]

    },

    options:{

        responsive:true,

        scales:{
            y:{
                beginAtZero:true,
                max:100
            }
        }

    }

});

</script>

@endif