<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:38
 */

namespace App\Product;


use App\Product\Contract\CarProduct;

class HondaFit implements CarProduct
{
    public function run()
    {
        print("Running with Honda Fit\n");
    }

    public function stop()
    {
        print("Stopping Honda Fit\n");
    }

    public function changeGear()
    {
        print("Changing gear of Honda Fit\n");
    }
}