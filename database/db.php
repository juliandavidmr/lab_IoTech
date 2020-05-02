<?php

class DBConnect {

    private $connection = null;

    public function __construct(string $host, string $username, string $password, string $database) {
        $con = new mysqli($host, $username, $password, $database);

        if ($con->connect_error) {
			die("Error de conexión (" . $con->connect_errno . ")" . $con->connect_error);
        }

        $this->connection = $con;
    }

    public function query(string $sentencia) {
        return $this->connection->query($sentencia);
    }

    public function select(string $sentencia){
        $list = [];
        $consulta=$this->connection->query($sentencia);

        while($filas = $consulta->fetch_assoc()){
            $list[] = $filas;
        }

        return $list;
    }

    public function real_escape_string(string $v) {
        return $this->connection->real_escape_string($v);
    }

    public function close() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }
}

?>