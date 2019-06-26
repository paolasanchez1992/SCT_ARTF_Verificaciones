<?php
include '../extend/header.php';
include '../funciones/piv.php';
$centro = $con->real_escape_string(htmlentities($_GET['id_sct']));

$sel_m = $con->query("SELECT mes_ver, COUNT(numero_ver) as total FROM verificaciones_pro WHERE estatus_ini = 'F' AND id_centro = '$centro' GROUP BY mes_ver");
 $row = mysqli_num_rows($sel_m);







?>

<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Verificaciones');
      data.addRows([
        <?php   while ($f = $sel_m->fetch_assoc()) {
           $mes = $f['mes_ver'];
           $mes_nom = mes($mes);
           $total = $f['total'];

        ?>
        ['<?php echo $mes_nom; ?>', <?php echo $total; ?>],

        <?php } ?>


      ]);

      // Set chart options
      var options = {'title':'PIV (Programa Integral de Verificación)', is3D:true};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>


  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-content">
            <span class="card-title"><center><h4>Gráfica de Verificaciones 2019</h4></center></span>
            <div id="chart_wrap">
              <div id="piechart" style="width: 1200px; height: 400px;"></div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <?php include '../extend/scripts.php'; ?>
</body>
</html>
