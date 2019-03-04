<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:37
 */

namespace App\Product;


use App\Product\Contract\CarProduct;

class HondaCivic implements CarProduct
{
    public function run()
    {
        print("Running with Honda Civic\n");
    }

    public function stop()
    {
        print("Stopping Honda Civic\n");
    }

    public function changeGear()
    {
        print("Changing gear of Honda Civic\n");
    }

}