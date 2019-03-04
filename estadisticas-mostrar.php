<?php
  include 'conexion.php';
  $incidente103 = 0;
  $incidente105 = 0;
  $fechaori = $_POST['fechaor'];
  $fechaori = date("YYYY/MM/DD", strtotime($fechaori));
  $fechaterm = $_POST['fechater'];
  $fechaterm = date("YYYY/MM/DD", strtotime($fechaterm));

  $sql = "SELECT * FROM visita WHERE fecha BETWEEN ".$fechaori." AND ".$fechaterm;
  foreach ($pdo->query($sql) as $row) {
  if ($row['observacion'] != NULL) {
    if ($row['num_lab'] == 103) {
      $incidente103++;
    }
    if ($row['num_lab'] == 105) {
      $incidente105++;
    }
    
    }
  }
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
    if ($incidente105>0 || $incidente103>0) {        
    echo "<script type='text/javascript'>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['laboratorio', 'cantidad'],
          ['lab 103',     ".$incidente103."],
          ['lab 105',     ".$incidente105."]
        ]);

        var options = {
          title: 'grafico de uso periodo ".$fechaori." / ".$fechaterm."'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
   "; }
    else{
      echo "no hay registros entre las fechas";
    }
   ?>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
