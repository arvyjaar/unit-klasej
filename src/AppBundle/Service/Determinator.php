<?php
/**
 * Created by PhpStorm.
 * User: arvydas
 * Date: 4/6/17
 * Time: 6:30 PM
 */

namespace AppBundle\Service;


class Determinator
{
    public function get($var)
    {
        if($var % 3 == 0) {
            return 'fizz';
        } elseif($var % 5 == 0) {
            return 'buzz';
        } else return $var;
    }
}