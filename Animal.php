<?php
    require_once "Humano.php";

    abstract class Animal {
        private string $nome;
        private string $raca;
        private int $quantPatas;
        private string $cor;
        private float $peso;
        private float $tamanho;
        private Humano $dono;

        public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho, $dono) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->quantPatas = $quantPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
            $this->dono = $dono;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function getRaca() {
            return $this->raca;
        }

        public function setRaca(string $raca) {
            $this->raca = $raca;
        }

        public function getQuantPatas() {
            return $this->quantPatas;
        }

        public function setQuantPatas(int $quantPatas) {
            $this->quantPatas = $quantPatas;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setCor(string $cor) {
            $this->cor = $cor;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso(float $peso) {
            $this->peso = $peso;
        }

        public function getTamanho() {
            return $this->tamanho;
        }

        public function setTamanho(float $tamanho) {
            $this->tamanho = $tamanho;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public abstract function falar();
    }