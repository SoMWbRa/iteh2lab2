<?php
// Перечень палат, в которых дежурит медсестра *
include 'conn.php';
if(isset($_GET['nurse_name'])) {
    echo "Перечень палат, в которых дежурит медсестра " .$_GET['nurse_name'].":"."<br>";

    $cursor = $coll->distinct("wards", array('nurse' => $_GET['nurse_name']));

    $values = Array();
    foreach ($cursor as $row) {
        array_push($values, $row);
        echo $row."<br>";
    }

}
