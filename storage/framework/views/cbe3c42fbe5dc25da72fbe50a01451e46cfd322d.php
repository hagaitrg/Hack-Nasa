<script>
    "use strict";
    var ctx = document.getElementById('myChartTelatLulus').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ['TAK 0-30', 'TAK 30-59', 'TAK 60-100', 'TAK >100'],
            datasets: [{
                label: '# Sebaran Jumlah Mahasiswa Berdasarkan TAK',
                data: [{
                    {
                        $tak1Count
                    }
                }, {
                    {
                        $tak2Count
                    }
                }, {
                    {
                        $tak3Count
                    }
                }, {
                    {
                        $tak4Count
                    }
                }],
                backgroundColor: [
                    'rgba(255, 0, 0, 0.5)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(0, 255, 0, 0.2)',
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
</script><?php /**PATH F:\Kuliah\EAI\hack-nasa\Hack-Nasa\resources\views/layouts/visual/script_telat_lulus.blade.php ENDPATH**/ ?>