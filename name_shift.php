<?php
// Дежурства (в любых палатах) в смену * :
include 'conn.php';
if(isset($_GET['shift'], $_GET['department'])) {
    echo "Дежурства (в любых палатах) в " .$_GET['shift']." смену с  ".$_GET['department']." отделения:"."<br>";

    $cursor = $coll->distinct("nurse", array('shift' => $_GET['shift'], 'department' => $_GET['department']));

    $key = $_GET['shift'].$_GET['department'];

    echo $key;
    include "output.php";


}
