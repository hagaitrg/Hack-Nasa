<script>
    "use strict";
    var ctx = document.getElementById('myChartTunggakan').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: [
                'Alasan' + '<?php echo e($alasanTunggakan[0]->alasan_tunggakan); ?>',
                'Alasan' + '<?php echo e($alasanTunggakan[1]->alasan_tunggakan); ?>',
                'Alasan' + '<?php echo e($alasanTunggakan[2]->alasan_tunggakan); ?>',
                'Alasan' + '<?php echo e($alasanTunggakan[3]->alasan_tunggakan); ?>',
            ],
            datasets: [{
                label: '# Jumlah Mahasiswa',
                data: [
                    <?php echo e($alasanTunggakan[0]->count); ?>,
                    <?php echo e($alasanTunggakan[1]->count); ?>,
                    <?php echo e($alasanTunggakan[2]->count); ?>,
                    <?php echo e($alasanTunggakan[3]->count); ?>,
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(117, 207, 184, 1)',
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

         
        }
    });
</script><?php /**PATH D:\ProjectWeb\eai2\resources\views/layouts/visual/script_tunggakan.blade.php ENDPATH**/ ?>