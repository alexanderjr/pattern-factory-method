<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:39
 */

namespace App\Product;


use App\Product\Contract\CarProduct;

class FiatUno implements CarProduct
{
    public function run()
    {
        print("Running with Fiat Uno\n");
    }

    public function stop()
    {
        print("Stopping Fiat Uno\n");
    }

    public function changeGear()
    {
        print("Changing gear of Fiat Uno\n");
    }
}