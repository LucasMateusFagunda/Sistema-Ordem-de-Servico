<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("../model/Cliente.php");
require_once("../model/clienteDAO.php");


class clienteController {

    private $cliente;
    private $clienteDAO;

    public function __construct() {
        $this->cliente = new Cliente();
        $this->clienteDAO = new ClienteDAO();
    }

    public function getAllCliente() {
        $row = $this->clienteDAO->getAllCliente();
        $listaCliente = array();
        if($row) {
            foreach($row as $value) {
                echo "
                    <tr>
                        <th>
                            ".$value["nome"]."
                        </th>
                        <th>
                            ".$value["sobrenome"]."
                        </th>
                        <th>
                            XX XXXXXXXXX
                        </th>
                        <th>
                            00
                        </th>
                        <th>
                            <button>Selecionar</button>
                        </th>
                    </tr>
                ";
            }
        }
    }

}

?>