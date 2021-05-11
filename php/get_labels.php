<?php

include 'utils.php';

$query = $db->query("SELECT * FROM metriche");
$data = array();

if ($query->num_rows) {
    while ($row = $query->fetch_assoc()) {
        if ($row['metrica_attiva'] == '1') {
            $data[] = $row['metrica_codice'];
        }
    }
}

echo json_encode($data);

?>
