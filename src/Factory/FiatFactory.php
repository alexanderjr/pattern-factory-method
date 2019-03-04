<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:44
 */

namespace App\Factory;

use App\Factory\Contract\CarFactory;

use App\Product\Contract\CarProduct;
use App\Product\FiatPalio;
use App\Product\FiatUno;

class FiatFactory implements CarFactory
{
    public function makeCar(string $carModel): CarProduct
    {
        if($carModel === "uno"){
            return new FiatUno();
        }

        if($carModel === "palio"){
            return new FiatPalio();
        }

        throw new \Exception("Esse modelo de carro ${carModel} não foi encontrado");
    }

}