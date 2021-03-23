<script>
    "use strict";
    var dailySalesChart = document.getElementById('statisticsBeasiswa').getContext('2d');
    var myDailySalesChart = new Chart(dailySalesChart, {
        type: 'horizontalBar',
        data: {
            labels: ["Jumlah Penerima Beasiswa"],
            datasets: [{
                    label: "BCA",
                    backgroundColor: "#68D4CD",
                    data: [Math.random() * 100],
                }, {
                    label: "Bidikmisi",
                    backgroundColor: "#CFF67B",
                    data: [Math.random() * 100],
                }, {
                    label: "BRI",
                    backgroundColor: "#94DAFB",
                    data: [Math.random() * 100],
                }, {
                    label: "Djarum",
                    backgroundColor: "#FD8080",
                    data: [Math.random() * 100],
                },
                {
                    label: "Kemendikbud",
                    backgroundColor: "#6D848E",
                    data: [Math.random() * 100],
                },
                {
                    label: "Kominfo",
                    backgroundColor: "#26A0FC",
                    data: [Math.random() * 100],
                },
                {
                    label: "Kompas",
                    backgroundColor: "#26E7A6",
                    data: [Math.random() * 100],
                },
                {
                    label: "Prestasi",
                    backgroundColor: "#FAB1B2",
                    data: [Math.random() * 100],
                },
                {
                    label: "Yayasan Pendidikan Telkom",
                    backgroundColor: "#8B75D7",
                    data: [Math.random() * 100],
                },
            ]
        },
        options: {
            maintainAspectRatio: !1,
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: "#000080",
                }
            },
            animation: {
                easing: "easeInOutBack"
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: Math.round,
                    font: {
                        weight: 'bold'
                    }
                }
            },
            scales: {
                yAxes: [{
                    display: !1,
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                        beginAtZero: !0,
                        maxTicksLimit: 10,
                        padding: 0
                    },
                    gridLines: {
                        drawTicks: !1,
                        display: !1
                    }
                }],
                xAxes: [{
                    display: !1,
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: -20,
                        fontColor: "rgba(255,255,255,0.2)",
                        fontStyle: "bold"
                    }
                }]
            }
        }
    });

</script>


<script>
    "use strict";
    var ctx = document.getElementById('statisticsHealth').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sehat', 'Sakit', 'Tidak Diketahui'],
            datasets: [{
                label: '# Kesehatan Mahasiswa',
                data: [<?php echo e($countSehat); ?>, <?php echo e($countSakit); ?>, <?php echo e($statusUntrackedCount); ?>],
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
<?php /**PATH F:\Kuliah\EAI\hack-nasa\Hack-Nasa\resources\views/layouts/visual/script_beasiswa.blade.php ENDPATH**/ ?>