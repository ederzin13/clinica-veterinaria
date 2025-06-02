<?php 

    class Humano {
        private string $nome;
        private int $idade;
        private string $endereco;
        private int $contato;

        public function __construct($nome, $idade, $endereco, $contato) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function getContato() {
            return $this->contato;
        }

        public function setContato($contato) {
            $this->contato = $contato;
        }
    }