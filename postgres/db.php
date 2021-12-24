<?php
class database {
    protected $connection;    
    protected $stmtname;
    public function __construct(public $dbhost, public $dbname, public $dbport, public $dbuser, public $dbpass) {
        // try {
            $this->connection = pg_connect("$dbhost $dbname $dbport $dbuser $dbpass");
        // } catch (exception $e) {
        //     return pg_last_error($this->connection);
        // }
    }
    public function query($sql, $stmtname='') {
        $this->stmtname = $stmtname;
        return (pg_prepare($this->connection, $this->stmtname, $sql));
    }
    public function fetchAll($params) {
        $result = pg_execute($this->connection, $this->stmtname, $params);
        return (pg_fetch_all($result));
    }
    public function close() {
        return pg_close($this->connection);
    }
    public function select($table_name, array $args) {
        return (pg_select($this->connection, $table_name, $args, PGSQL_DML_ESCAPE));
    }
    public function insert($table_name, array $args) {
        return (pg_insert($this->connection, $table_name, $args, PGSQL_DML_ESCAPE));
    }
    public function update($table_name, array $data, array $condition) {
        // $condition = array('field1'=>'AA', 'field2'=>'BB');
        return (pg_update($this->connection, $table_name, $data, $condition, PGSQL_DML_ESCAPE));
    }
    public function delete($table_name, $args) {
        return (pg_delete($this->connection, $table_name, $args, PGSQL_DML_ESCAPE));
    }
}
?>