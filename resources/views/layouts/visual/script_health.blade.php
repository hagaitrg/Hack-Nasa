<script>
    "use strict";
    var ctx = document.getElementById('statisticsHealth').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
    labels: ['Sehat', 'Sakit', 'Tidak Diketahui'],
    datasets: [{
        label: '# Kesehatan Mahasiswa',
        data: [{{$countSehat}}, {{$countSakit}}, {{$statusUntrackedCount}}],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
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

<script>
    "use strict";
    var ctx = document.getElementById('statisticsHealthSpec').getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
    labels: ['Sehat', 'Sakit'],
    datasets: [{
        label: '# Kesehatan Mahasiswa',
        data: [{{$countSehat}}, {{$countSakit}}],
        backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 206, 86, 0.2)',
        ],
        borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(255, 99, 132, 1)',
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