<?php
    require_once "Humano.php";

    class Funcionario extends Humano {
        private string $cargo;
        private float $salario;

        public function __construct($nome, $idade, $endereco, $contato, $cargo, $salario) {
            parent::__construct($nome, $idade, $endereco, $contato);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }

        public function getCargo() {
            return $this->cargo;
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($salario) {
            $this->salario = $salario;
        }
    }