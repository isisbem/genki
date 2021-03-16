<?php

include 'utils.php';

$query = $db->query("SELECT * FROM metriche");
$data = array();

while ($row = $query->fetch_assoc()) {
    if ($row['metrica_attiva'] == '1') {
        $data[] = $row['metrica_codice'];
    }
}

echo json_encode($data);

?>
