<?php
    require_once "Humano.php";
    require_once "Produto.php";

    class Venda {
        private array $produtos;
        private Humano $comprador;

        // public function __construct($produtos, $comprador) {
        //     $this->produtos[] = $produtos;
        //     $this->comprador = $comprador;
        // }

        public function getProdutos() {
            return $this->produtos;
        }

        public function setProdutos(Produto $produto) {
            $this->produtos[] = $produto;
        }

        public function getComprador() {
            return $this->comprador;
        }

        public function realizaVenda(Produto $produto) {
            if ($produto->getQuant() == 0) {
                echo "Produto esgotado\n";
                return;
            }

            $this->adicionaProduto($produto);
        }

        public function adicionaProduto(Produto $produto) {
            $this->setProdutos($produto);
        }
    }