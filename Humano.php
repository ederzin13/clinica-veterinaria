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
    }