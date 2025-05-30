<?php
    require_once "Venda.php";
    require_once "Gato.php";
    require_once "Ornitorrinco.php";

    $bobers = new Humano("Bobers", 20, "rua tal", 1234124);
    $phineas = new Humano("Phineas", 12, "Rua longe daqui", 99881272);

    $novaVenda = new Venda(["Bolinha", "Ração"], $bobers);

    $magnolia = new Gato("Magnolia", "Laranja", 4, "Amarelo escuro", 4.5, 25.0, $bobers);
    $perry = new Ornitorrinco("Perry, o ornitorrinco", "Ornitorrinco 'normal'", 4, "verde", 1.2, 48.5, $phineas);

    var_dump($magnolia);