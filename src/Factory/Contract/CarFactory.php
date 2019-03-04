<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:41
 */

namespace App\Factory\Contract;
use App\Product\Contract\CarProduct;

interface CarFactory
{
    public function makeCar(string $carModel): CarProduct;
}