<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once("../database/init.php");

    class ClienteDAO{
        public function __construct() {
            $this->conexao();
        }

        private function conexao() {
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        }

        public function getAllCliente() {
            $array = array();
            $result = $this->mysqli->query("SELECT * FROM cliente");
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $array[] = $row;
            }
            
            if($array) {
                return $array;
            } else {
                return;
            }
        }

    }
?>