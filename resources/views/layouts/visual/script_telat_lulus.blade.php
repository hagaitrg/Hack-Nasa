<script>
    "use strict";
    var ctx = document.getElementById('myChartTelatLulus').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Semester' + {{$dataTelatLulus[0]->semester}},
                'Semester' + {{$dataTelatLulus[1]->semester}},
                'Semester' + {{$dataTelatLulus[2]->semester}},
                'Semester' + {{$dataTelatLulus[3]->semester}},
                'Semester' + {{$dataTelatLulus[4]->semester}}],
            datasets: [{
                label: '# Jumlah Mahasiswa',
                data: [
                    {{ $dataTelatLulus[0]->count }},
                    {{ $dataTelatLulus[1]->count }},
                    {{ $dataTelatLulus[2]->count }},
                    {{ $dataTelatLulus[3]->count }},
                    {{ $dataTelatLulus[4]->count }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 106, 186, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
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
