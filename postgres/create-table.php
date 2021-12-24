<?php
    require_once "config.php";
    $sql = <<<EOF
        CREATE TABLE COMPANY (
            ID INT PRIMARY KEY  NOT NULL,
            NAME TEXT  NOT NULL,
            AGE INT NOT NULL,
            ADDRESS CHAR(50),
            SALARY REAL
        );
    EOF;
    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db) . "<br>";
    }else {
        echo "Table created successfully <br>";
    }
?>