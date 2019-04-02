<?PHP

include "../core/reclamationC.php";


    $reclamation11C=new ReclamationC();
    $probleme1="Lunette cassée";
    $nprobleme1=$reclamation11C->calculerReclamation($probleme1);
    $probleme2="Probléme lentilles";
    $nprobleme2=$reclamation11C->calculerReclamation($probleme2);
    $probleme3="Les dimensions ne convient pas au visage";
    $nprobleme3=$reclamation11C->calculerReclamation($probleme3);
    $probleme4="N'est pas le modéle souhaité";
    //$nprobleme4=$reclamation11C->calculerReclamation($probleme4);
    $nprobleme4=4;
    $probleme5="Autre";
    $nprobleme5=$reclamation11C->calculerReclamation($probleme5);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Reclamation', ''],
          ['Lunette cassee',     <?php echo $nprobleme1 ?>],
          ['Probleme lentilles',      <?php echo $nprobleme2 ?>],
          ['Les dimensions ne convient pas au visage',<?php echo $nprobleme3 ?>],
          ['N est pas le modéle souhaite',  <?php echo $nprobleme4 ?>],
          ['autre',   <?php echo $nprobleme5 ?>]
        ]);

        var options = {
          title: 'Reclamation'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>