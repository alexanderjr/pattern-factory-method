<?php

require("vendor/autoload.php");

try {
    $fiatFactory = new App\Factory\FiatFactory();
    $uno = $fiatFactory->makeCar("uno");

    echo "========= FIAT UNO ==========\n\n";
    echo $uno->run();
    echo $uno->changeGear();
    echo $uno->stop();

    echo "========= HONDA CIVIC ==========\n\n";
    $hondaFactory = new \App\Factory\HondaFactory();
    $civic = $hondaFactory->makeCar("civic");
    echo $civic->run();
    echo $civic->changeGear();
    echo $civic->stop();
} catch (Exception $e){
    echo $e->getMessage();
}