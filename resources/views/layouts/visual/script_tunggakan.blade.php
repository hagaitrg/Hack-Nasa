<script>
    "use strict";
    var ctx = document.getElementById('myChartTunggakan').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                'Alasan' + {
                    {
                        $alasanTunggakan[0] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[1] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[2] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[3] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[4] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[5] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[6] - > alasan_tunggakan
                    }
                },
                'Alasan' + {
                    {
                        $alasanTunggakan[7] - > alasan_tunggakan
                    }
                },
            ],


            datasets: [{
                label: '# Jumlah Mahasiswa',
                data: [{
                        {
                            $alasanTunggakan[0] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[1] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[2] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[3] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[4] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[5] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[6] - > count
                        }
                    },
                    {
                        {
                            $alasanTunggakan[7] - > count
                        }
                    },
                ],
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