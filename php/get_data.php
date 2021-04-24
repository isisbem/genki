<?php

include 'utils.php';

$fields = $_GET['fields'];
$start = DateTime::createFromFormat("d/m/Y H:i", $_GET['start']);
$end = DateTime::createFromFormat("d/m/Y H:i", $_GET['end']);

$query = $db->query("SELECT * FROM dati WHERE dati.metrica IN (" . $fields . ") AND (dati.acquisito >= \"" . $start->format('Y-m-d H:i') . "\" AND dati.acquisito <= \"" . $end->format('Y-m-d H:i') . "\")");
$data = array();

if ($query->num_rows) {
    while ($row = $query->fetch_assoc()) {
        $data['values'][$row['metrica']][] = floatval(number_format($row['valore'], 2));

        $date = DateTime::createFromFormat("Y-m-d H:i:s.u", $row['acquisito']);
        $data['dates'][] = $date->format('d/m/Y H:i');
    }

    $data['dates'] = array_unique($data['dates']);
}

echo json_encode($data);

?>
