<?php declare(strict_types=1);
// Version 7
spl_autoload_register(function($database) {
    // require __DIR__ . "/../postgres/db.php";
    include_once $database . '/../postgres/db.php';
});
use PHPUnit\Framework\TestCase;

final class DbTest extends TestCase {
    public function testDbConnection() {
        // require __DIR__ . "/../postgres/db.php";
        $dbhost = "host = 127.0.0.1";
        $dbport = "port = 5432";
        $dbname = "dbname = students";
        $dbuser = "user = postgres";
        $dbpass = "password = vihokdam";
        $db = new database($dbhost, $dbname, $dbport, $dbuser, $dbpass);
        $this->assertNotEmpty($db);
        $result = $db->query("SELECT * FROM persons", 'persons');
        $this->assertNotEmpty($result);
        $res = $db->fetchAll(array());
        $this->assertNotEmpty($res);
        $db->close();        
    }
}
?>