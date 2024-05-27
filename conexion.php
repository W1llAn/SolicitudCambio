<?php

class Conexion {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '1805162433';
    private $dbname = 'formulario';
    public $con;

    public function __construct() {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if ($this->con->connect_error) {
            die('Error de conexión (' . $this->con->connect_errno . '): ' . $this->con->connect_error);
        }
    }

    public function testConnection() {
        if ($this->con->ping()) {
            echo 'Se conectó exitosamente';
        } else {
            echo 'Error: ' . $this->con->error;
        }
    }

    public function getConnection() {
        return $this->con;
    }

    public function closeConnection() {
        $this->con->close();
    }
}

$c = new Conexion();
$c->testConnection();
?>
 