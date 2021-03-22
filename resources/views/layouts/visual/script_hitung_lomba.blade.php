<script>
    "use strict";
    var ctx = document.getElementById('myChartLomba').getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2018', '2019', '2020'],
    datasets: [{
        label: '# Jumlah Peserta Lomba',
        data: [{{$lomba18}}, {{$lomba19}}, {{$lomba20}}],
        backgroundColor: [
            // 'rgba(255, 99, 132, 0.2)',
            // 'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
        ],
        borderWidth: 1
    }]
},
options: {
    
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});
</script>