<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 10:16
 */

namespace BranisSoft\CalculadorImpostos\Entidades;


/**
 * Class Ipi
 * @package BranisSoft\CalculadorImpostos\Entidades
 */
class Ipi extends Imposto
{

    /**
     * @return Imposto
     */
    public function calcular(): Imposto
    {
        if (substr($this->cst, 0, 2) == "50") {
            $this->baseCalculo = $this->valorMercadoria;
            $this->total = $this->baseCalculo * ($this->aliquota / 100);
        }
        return $this;
    }

}