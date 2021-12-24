<?php
    // echo phpinfo();
    // exit;
    require_once __DIR__ . '/Person.php';
    $person = new Person('Wanich', 33);
    echo 'Person name is: ' . $person->getName();
?>