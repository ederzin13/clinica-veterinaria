<?php
    class Produto {
        private string $nome;
        private float $valor;
        private int $quantEstoque;

        public function __construct($nome, $valor, $quantEstoque) {
            $this->nome = $nome;
            $this->valor = $valor;
            $this->quantEstoque = $quantEstoque;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setValor($valor) {
            $this->valor = $valor;
        }

        public function getQuant() {
            return $this->quantEstoque;
        }

        public function setQuant($quantEstoque) {
            $this->quantEstoque = $quantEstoque;
        }
    }
?>