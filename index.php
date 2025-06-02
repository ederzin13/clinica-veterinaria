<?php

use Dom\CharacterData;
    require_once "Cachorro.php";
    require_once "Gato.php";
    require_once "Funcionario.php";
    require_once "Ornitorrinco.php";
    require_once "Venda.php";

    //funcionários
    $balconista = new Funcionario("Pamela", 28, "Rua muito boa", 123553134, "Balconista", 2000.00);
    $vendedor = new Funcionario("José", 18, "Rua do José 33", 99998888, "Vendedor", 3512.85);
    $veterinaria = new Funcionario("Lorena", 23, "Rua impressionante", 54639834, "Veterinária", 5050.00);

    //produtos à venda
    $bolinha = new Produto("Bolinha", 10.00, 5);
    $guia = new Produto("Guia", 50.00, 1);
    $sache = new Produto("Sachê", 20.00, 0);
    
    //clientes  
    $bobers = new Humano("Bobers", 20, "rua tal", 1234124);
    $phineas = new Humano("Phineas", 12, "Rua longe daqui", 99881272);
    $eder = new Humano("Eder", 20, "Distrito dos endereços", 45654321213);

    //vendas
    $novaVenda = new Venda();

    //animais
    $magnolia = new Gato("Magnolia", "Laranja", 4, "Amarelo escuro", 4.5, 25.0, $bobers);
    $perry = new Ornitorrinco("Perry, o ornitorrinco", "Ornitorrinco 'normal'", 4, "verde", 1.2, 48.5, $phineas);
    $jack = new Cachorro("Jack Dawson", "Galgo Italiano", 4, "cinza", 5.0, 38, $eder);

    echo "Funcionários:\n\n";
    echo $balconista->getNome() . " é a " . $balconista->getCargo() . PHP_EOL;
    echo $vendedor->getNome() . " é o nosso " . $vendedor->getCargo() . PHP_EOL;
    echo $veterinaria->getNome() . " é a " . $veterinaria->getCargo() . PHP_EOL;
    
    echo "\nUm cliente chegou com seu animalzinho\n";
    echo "Seus nomes são " . $bobers->getNome() . " e " . $magnolia->getNome() . ", respectivamente.\n";

    echo "\n'" . $magnolia->falar() . "' diz " . $magnolia->getNome() . " ao ver " . $balconista->getNome() . ". Acho que elas já se conheciam.\n\n";

    echo $magnolia->getNome() . " pede um " . $sache->getNome() . " para " . $magnolia->getDono()->getNome() . ". Mas a " . $balconista->getCargo() . " diz que a quantidade de sachês no estoque é " . $sache->getQuant() . PHP_EOL;

    echo "Dentro do consultório:\n\n";
    echo $veterinaria->getNome() . " atende um " . $jack->getRaca() . " chamado " . $jack->getNome() . PHP_EOL;

    echo $jack->falar() . PHP_EOL;

    echo "\nMesmo com esse caos na clínica, " . $vendedor->getNome() . ", o " . $vendedor->getCargo() . ", fez a maior venda da semana.\n";
    $novaVenda->realizaVenda($bolinha);
    $novaVenda->realizaVenda($guia);
    
    //venda realizada
    print_r($novaVenda->getProdutos());
?>