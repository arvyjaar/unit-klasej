<?php
/**
 * Created by PhpStorm.
 * User: arvydas
 * Date: 4/6/17
 * Time: 6:29 PM
 */

namespace Tests\AppBundle\Service;

use AppBundle\Service\Determinator;
use PHPUnit\Framework\TestCase;

class DeterminatorTest extends TestCase
{
    /**
     * @dataProvider xxxProvider
     */
    public function testGet($var, $expected)
    {
        $determinator = new Determinator();

        $result = $determinator->get($var);
        $this->assertEquals($expected, $result);

    }

    public function xxxProvider()
    {
        return [
            'show fizz' => [6, 'fizz'],
            'show buzz' => [10, 'buzz'],
            'show 10'   => [7, 7]
        ];
    }

}