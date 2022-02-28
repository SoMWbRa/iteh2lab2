<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src=locStorage.js> </script>
</head>
<body onload="onLoad()">
<?php

echo '<table id="table" style="text-align:center; border-spacing: 20px;">';
echo '<tr>';

foreach ($cursor as $row){
    echo '<td>';
    echo $row;
    echo '</td>';
}
echo '</tr>';
echo '</table>';

echo '<input type="hidden" id="key" value="'.$key.'">';

?>
</body>
</html>
