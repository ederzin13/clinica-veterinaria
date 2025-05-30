<?php
    require_once "Animal.php";

    class Cachorro extends Animal {

        // public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho, $dono) {
        //     parent::__construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho);
        //     $this->dono = $dono;
        // }

        public function falar() {
            echo "Sou um cachorro e meu nome é {$this->getNome()}. Digo... au Au\n";
        }
    }