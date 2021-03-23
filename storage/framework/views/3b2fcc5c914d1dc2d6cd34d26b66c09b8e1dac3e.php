<script>
    "use strict";
    var ctx = document.getElementById('myChartTelatLulus').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Semester' + <?php echo e($dataTelatLulus[0]->semester); ?>,
                'Semester' + <?php echo e($dataTelatLulus[1]->semester); ?>,
                'Semester' + <?php echo e($dataTelatLulus[2]->semester); ?>,
                'Semester' + <?php echo e($dataTelatLulus[3]->semester); ?>,
                'Semester' + <?php echo e($dataTelatLulus[4]->semester); ?>],
            datasets: [{
                label: '# Jumlah Mahasiswa',
                data: [
                    <?php echo e($dataTelatLulus[0]->count); ?>,
                    <?php echo e($dataTelatLulus[1]->count); ?>,
                    <?php echo e($dataTelatLulus[2]->count); ?>,
                    <?php echo e($dataTelatLulus[3]->count); ?>,
                    <?php echo e($dataTelatLulus[4]->count); ?>],
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
<?php /**PATH D:\ProjectWeb\eai2\resources\views/layouts/visual/script_telat_lulus.blade.php ENDPATH**/ ?>