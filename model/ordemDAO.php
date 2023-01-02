<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once("../database/init.php");

    class OrdemDAO{
        public function __construct() {
            $this->conexao();
        }

        private function conexao() {
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        }
    }
?>