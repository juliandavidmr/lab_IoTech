<?php

class DBConnect {

    private $mysqli;

    public function connect(string $host, string $username, string $password, string $database)
    {
        this->$mysqli = new mysqli($host, $username, $password, $database);

        if (this->$mysqli->connect_error) {
			die("Error de conexión (" . this->$mysqli->connect_errno . ")" . this->$mysqli->connect_error);
        }
    }

    public function query(string $sentencia) {
        return this->$mysqli->query($sentencia);
    }
}

?>