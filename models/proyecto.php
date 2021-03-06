<?php

class ProyectoModel {
    public string $nombreEmpresa;
    public string $NIT;
    public string $telefono;
    public string $email;
    public string $propuesta;

    private DBConnect $db;

    public function __construct(DBConnect $db) {
        $this->db = $db;
    }

    /**
     * Registrar un proyecto en la base de datos.
     */
    public function registrar() {
        return $this->db->query("
			INSERT INTO proyecto
				(`nombreEmpresa`, `nit`, `telefono`, `email`, `propuesta`)
			VALUES
				('$this->nombreEmpresa', '$this->NIT', '$this->telefono', '$this->email', '$this->propuesta');
		");
    }

    /**
     * Obtener listado de proyectos registrados.
     */
    public function getProyectos() {
        return $this->db->query("SELECT * FROM proyecto;");
    }
}

?>