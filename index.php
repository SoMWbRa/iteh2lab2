<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3> Запросы </h3>
<form action="fid_ward.php" method="get">
    <p> Перечень палат, в которых дежурит медсестра
        <select name="nurse_name">
            <?php
            include "conn.php";
            $res = $coll->distinct("nurse");
            foreach ($res as $row)
                echo "<option>$row</option>"
            ?>
        </select>
        <input type="submit">
    </p>
</form>

<form action="nurse_in_dep.php">
    <p> Медсестры отделения
        <select name="department">
            <?php
            include "conn.php";
            $res = $coll->distinct("department");
            foreach ($res as $row)
                echo "<option>$row</option>"
            ?>
        </select>
        <input type="submit">
    </p>
</form>

<form action="name_shift.php">
    <p> Дежурства (в любых палатах) в смену:
        <select name="shift">
            <?php
            include "conn.php";
            $res = $coll->distinct("shift");
            foreach ($res as $row)
                echo "<option>$row</option>"
            ?>
        </select> в отделение
        <select name="department">
            <?php
            include "conn.php";
            $res = $coll->distinct("department");
            foreach ($res as $row)
                echo "<option>$row</option>"
            ?>
        </select>
        <input type="submit">
    </p>
</form>

</body>
</html>