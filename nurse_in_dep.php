<?php
// Перечень палат, в которых дежурит медсестра *
include 'conn.php';
if(isset($_GET['department'])) {
    echo "Медсестры отделения " .$_GET['department'].":"."<br>";

    $cursor = $coll->distinct("nurse", array('department' => $_GET['department']));

    $key = $_GET['department'];

    include "output.php";

}
