<?php
    require_once "Animal.php";
    require_once "Humano.php";

    class Gato extends Animal {
        public function falar() {
            echo "Meow Meow\n";
        }
    }