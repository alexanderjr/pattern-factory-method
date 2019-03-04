<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:42
 */

namespace App\Factory;

use App\Factory\Contract\CarFactory;
use App\Product\Contract\CarProduct;
use App\Product\HondaCivic;
use App\Product\HondaFit;

class HondaFactory implements CarFactory
{
    public function makeCar(string $carModel): CarProduct
    {
        if($carModel === "civic"){
            return new HondaCivic();
        }

        if($carModel === "fit"){
            return new HondaFit();
        }

        throw new \Exception("Esse modelo de carro ${carModel} não foi encontrado");
    }

}