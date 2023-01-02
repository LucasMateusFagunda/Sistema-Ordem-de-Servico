<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Cliente {
    private $idCliente;
    private $nome;
    private $sobrenome;
    private $cpf;

    public function setIdCliente ($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome ($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function setCpf ($cpf) {
        $this->cpf = $cpf;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getCpf() {
        return $this->cpf;
    }

}

?>