<script>
    "use strict";
    var ctx = document.getElementById('myChartLomba').getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
    labels: ['2018', '2019', '2020'],
    datasets: [{
        label: '# Jumlah Peserta Lomba',
        data: [<?php echo e($lomba18); ?>, <?php echo e($lomba19); ?>, <?php echo e($lomba20); ?>],
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
</script><?php /**PATH D:\ProjectWeb\eai2\resources\views/layouts/visual/script_hitung_lomba.blade.php ENDPATH**/ ?>