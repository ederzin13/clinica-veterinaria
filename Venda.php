<?php
    require_once "Humano.php";

    class Venda {
        private array $produtos;
        private Humano $comprador;

        public function __construct($produtos, $comprador) {
            $this->produtos = $produtos;
            $this->comprador = $comprador;
        }

        public function getProdutos() {
            return $this->produtos;
        }

        public function getComprador() {
            return $this->comprador;
        }

        // public function pushProdutos($produto) {
        //     $this->produtos[] = $produto;
        // }
    }