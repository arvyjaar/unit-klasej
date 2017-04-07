<?php
/**
 * Created by PhpStorm.
 * User: arvydas
 * Date: 4/6/17
 * Time: 5:55 PM
 */

namespace AppBundle\Service;


class HappyNumberGenerator
{
    public function generate()
    {
        return rand(1, 99);
    }
}