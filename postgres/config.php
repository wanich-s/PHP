<?php
    $host = "host = 127.0.0.1";
    $port = "port = 5432";
    $dbname = "dbname = mydb";
    $credentials = "user = postgres password = vihokdam";

    $db = pg_connect("$host $port $dbname $credentials");    
    if(!$db) {
        echo "Error: Unable to open database <br>";
    }else {
        echo "Opened database successfully <br>";
    }
?>