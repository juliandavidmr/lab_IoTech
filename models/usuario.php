<?php
    class Usuario {
        private string $username;
        private string $password;
        private DBConnect $db;

        public function __construct(DBConnect $db, $username, $password) {
            $this->db = $db;
            $this->username = $username;
            $this->password = $password;
        }

        public function autenticar() {
            $sql = "
				SELECT *
				FROM usuario
				WHERE password = PASSWORD('$this->password') AND username = '$this->username'";
            $data = $this->db->query($sql);

            if (isset($data)) {         
                $count = $data->num_rows;
                /* Cerrar el resultset */
                $data->close();

                if ($count > 0) {
                    return True;
                }
            }
            return False;
        }
    }
?>