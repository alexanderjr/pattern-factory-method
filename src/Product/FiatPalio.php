<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:39
 */

namespace App\Product;


use App\Product\Contract\CarProduct;

class FiatPalio implements CarProduct
{
    public function run()
    {
        print("Running with Palio\n");
    }

    public function stop()
    {
        print("Stopping Palio\n");
    }

    public function changeGear()
    {
        print("Changing gear of Palio\n");
    }
}