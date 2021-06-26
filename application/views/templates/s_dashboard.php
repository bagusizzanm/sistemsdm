<?php
function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
?>

<script type="text/javascript">
var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = {
      labels  : ["<?php echo date('d-m-Y');?>"],
      datasets: [
        <?php foreach($grafik_pegawai_per_lokasi as $gppl):?>
        {
          label               : '<?php echo $gppl['lokasi'];?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $gppl['total'];?>]
        },
        <?php endforeach;?>
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutData        = {
  labels: [
    <?php foreach($grafik_pegawai_per_profesi as $gppp):?>
      '<?php echo $gppp['profesi'];?>',
    <?php endforeach;?>
  ],
  datasets: [
    {
      data: [
      <?php foreach($grafik_pegawai_per_profesi as $gppp):?>
      <?php echo $gppp['total'];?>,
      <?php endforeach;?>],
      backgroundColor : ['#f56954',],
    }
  ]
}
var donutOptions     = {
  maintainAspectRatio : false,
  responsive : true,
}
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
new Chart(donutChartCanvas, {
  type: 'doughnut',
  data: donutData,
  options: donutOptions
})


</script>