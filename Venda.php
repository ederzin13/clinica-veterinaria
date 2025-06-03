<?php
    require_once "Humano.php";
    require_once "Produto.php";

    class Venda {
        private Humano $comprador;
        private $venda;

        public function getComprador() {
            return $this->comprador;
        }

        public function setComprador($comprador) {
            $this->comprador = $comprador;
        }

        public function getVenda() {
            return $this->venda;
        }

        public function setVenda(Produto $produto, Humano $humano) {
            $this->venda[] = $humano->getNome() . " comprou " . $produto->getNome();
        }

        public function realizaVenda(Produto $produto, Humano $humano) {
            $this->setVenda($produto, $humano);
        }

        public function toStringVenda() {
            $aux = $this->getVenda();
            $mensagem = "Venda:\n";

            for ($i = 0; $i < count($aux); $i++) {
                $mensagem .= $aux[$i] . "\n";
            }

            return $mensagem;
        }
    }