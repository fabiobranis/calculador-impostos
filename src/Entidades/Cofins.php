<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 10:16
 */

namespace BranisSoft\CalculadorImpostos\Entidades;


/**
 * Class Cofins
 * @package BranisSoft\CalculadorImpostos\Entidades
 */
class Cofins extends Imposto
{

    /**
     * @return Imposto
     */
    public function calcular(): Imposto
    {
        if (substr($this->cst, 0, 2) == "01") {
            $this->baseCalculo = $this->valorMercadoria;
            $this->total = $this->baseCalculo * ($this->aliquota / 100);
        }elseif (substr($this->cst, 0, 2) == "06"){
            $this->baseCalculo = $this->valorMercadoria;
            $this->total = 0;
        }

        return $this;
    }
}