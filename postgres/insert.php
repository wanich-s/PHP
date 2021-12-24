<?php
    require_once "config.php";
    $sql = <<<EOF
        INSERT INTO COMPANY (ID, NAME, AGE, ADDRESS, SALARY)
        VALUES (1, 'Paul', 32, 'California', 20000.00);
        
        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
    EOF;

    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
    }else {
        echo "Records created successfully <br>";
    }
?>