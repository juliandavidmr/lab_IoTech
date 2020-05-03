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

    /**
     * Ejecutar una sentencia SQL y retornar el resultado.
     */
    public function query(string $sentencia) {
        return $this->connection->query($sentencia);
    }

    /**
     * Ejecutar una sentencia SQL y retornar el resultado en forma de una lista de objetos.
     */
    public function select(string $sentencia){
        $list = [];
        $consulta=$this->connection->query($sentencia);

        while($filas = $consulta->fetch_assoc()){
            $list[] = $filas;
        }

        return $list;
    }

    /**
     * Escapar cadena de texto para corregir problemas de seguridad en inyeccion SQL.
     */
    public function real_escape_string(string $v) {
        return $this->connection->real_escape_string($v);
    }

    /**
     * Cerrar conexion con la base de datos.
     */
    public function close() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }
}

?>