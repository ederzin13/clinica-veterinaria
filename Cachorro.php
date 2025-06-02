<?php
    require_once "Animal.php";

    class Cachorro extends Animal {

        public function falar() {
            return "Sou um cachorro e meu nome é {$this->getNome()}. Digo... au Au";
        }
    }