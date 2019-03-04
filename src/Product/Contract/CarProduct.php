<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 17:35
 */

namespace App\Product\Contract;


interface CarProduct
{
    public function run();

    public function stop();

    public function changeGear();
}