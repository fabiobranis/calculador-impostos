<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 09:24
 */

namespace Test\Unit\Entidades;

use BranisSoft\CalculadorImpostos\Entidades\Icms;
use PHPUnit\Framework\TestCase;

/**
 * Class IcmsTest
 * @package Test\Unit\Entidades
 */
class IcmsTest extends TestCase
{

    /**
     *
     */
    public function testModBC3Oridem0Cts00(): void
    {
        $icms = new Icms(100,18,'3','0', '00');
        $this->assertEquals(18,$icms->calcular()->getTotal());
    }

}