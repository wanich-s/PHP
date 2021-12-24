<?php
    require_once "config.php";
    $sql = <<<EOF
        UPDATE COMPANY set SALARY = 25000.00 WHERE ID = 1;
    EOF;

    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        exit;
    }else {
        echo "Record updated successfully <br>";
    }
?>