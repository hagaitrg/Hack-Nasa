<script>
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
    data = {
        datasets: [{
            data: [10, 20, 30]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Red',
            'Yellow',
            'Blue'
        ]
    };
</script><?php /**PATH F:\Kuliah\EAI\hack-nasa\Hack-Nasa\resources\views/layouts/visual/script_piechart.blade.php ENDPATH**/ ?>