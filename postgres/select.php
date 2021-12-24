<?php
    require_once "config.php";
    $sql = <<<EOF
        SELECT * FROM COMPANY;
    EOF;

    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        exit;
    }

    while($row = pg_fetch_row($ret)) {
        echo "ID = " . $row[0] . "<br>";
        echo "NAME = " . $row[1] . "<br>";
        echo "AGE = " . $row[2] . "<br>";
        echo "ADDRESS = " . $row[3] . "<br>";
        echo "SALARY = " . $row[4] . "<br>";
    }
    pg_close($db);
?>