<html>
<?php	

// parametri di collegamento e lettura del DB
session_start();
echo '<head>';
echo '<body>';
@include("dati_db_ro.php");
if (!$link = new mysqli($locadb,$userdb,$passdb,$nomedb,$portdb))
if ($link->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $link->connect_errno . ') ' . $link->connect_error;
}

// variabili temporanee
$tempo=array();
$temp=array();
$press==array();
$tutto_js='';
$ii=1;

// parametro da leggere (verrà gestito dalla selezione delle 17 metriche disponibili
$param="CO2";

// legge la descrizione della metrica dal DB
$sql= 'select metrica_descrizione from metriche where metriche.metrica_codice="'.$param.'"';
// echo $sql;
if (!($result= $link->query($sql))) { echo 'Errore nel comando sql ('.$sql.'): (' . $link->errno . ') ' . $link->error; exit; }
$prompt_js = '   data.addColumn(\'number\',\''.$row['metrica_descrizione'].'\');';

// cerca i dati da DB 
// echo $prompt_js;
$sql= 'select dati.metrica, acquisito, valore from dati left join metriche on metriche.metrica_codice=dati.metrica where dati.metrica="'.$param.'" order by acquisito';
// echo $sql;
$tutto_js= '';
if (!($result= $link->query($sql))) { echo 'Errore nel comando sql ('.$sql.'): (' . $link->errno . ') ' . $link->error; exit; }
$data_lettura='';
while($row = $result->fetch_assoc())
{ if ($data_lettura != $row['acquisito'])
  { $press=$row['valore'];
    if ($tutto_js > '') $tutto_js .='],';
    $tutto_js .= '[\''.$row['acquisito'].'\'';
	$data_lettura= $row['acquisito'];
  }	
  $tutto_js .=','.$row['valore'];
  $ii++;
}  
$tutto_js .=']';

// imposta l'area di plottaggio
// echo $tutto_js;
echo '<div id="chart_div" style="border: 1px solid #ccc; width: 900px; height: 500px; margin:auto; "></div>';
echo '</body>';
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

// codice di produzione del grafico a partire dalle google chart il cui funzionamento andrebbe approfondita per plottare più dati e aggiungere eventi ed altro
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Periodo');
	  <?php echo $prompt_js; ?>
	  

      data.addRows([<?php echo $tutto_js; ?>]);

      var options = {
        hAxis: {
          title: 'Periodo lettura',
		  slantedText: true
        },
        vAxis: {
          title: 'Valori lettura'
        },
		animation: {
			duration: 1000,
			startup: true
		}
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    } 
</script>

</html>
