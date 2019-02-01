<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 11:20
 */

namespace Test\Unit\Entidades;


use BranisSoft\CalculadorImpostos\Entidades\Icms;
use BranisSoft\CalculadorImpostos\Entidades\IcmsSt;
use PHPUnit\Framework\TestCase;

/**
 * Class IcmsStTest
 * @package Test\Unit\Entidades
 */
class IcmsStTest extends TestCase
{

    /**
     *
     */
    public function testModBcSt4Cst00SemIpi(): void
    {
        $valorMercadoria = 100;
        $aliquotaOperacao = 12;
        $aliquotaDestino = 17;
        $mvaAjustado = 50;

        $icms = new Icms($valorMercadoria, $aliquotaOperacao, '3', '0', '10');
        $icms = $icms->calcular();
        $baseIcms = $icms->getBaseCalculo();
        $valorIcms = $icms->getTotal();

        $this->assertEquals(100, $baseIcms);
        $this->assertEquals(12, $valorIcms);

        $icmsSt = new IcmsSt($valorMercadoria, $aliquotaDestino, '10', '4', $mvaAjustado, $baseIcms, $valorIcms);
        $icmsSt = $icmsSt->calcular();
        $this->assertEquals(150, $icmsSt->getBaseCalculo());
        $this->assertEquals(13.50, $icmsSt->getTotal());
    }
}