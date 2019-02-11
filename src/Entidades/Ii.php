<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 14:23
 */

namespace BranisSoft\CalculadorImpostos\Entidades;


/**
 * Class Ii
 * @package BranisSoft\CalculadorImpostos\Entidades,
 */
class Ii extends Imposto
{

    /**
     * @return Imposto
     */
    public function calcular(): Imposto
    {
        if ($this->aliquota > 0){
            $this->baseCalculo = $this->valorMercadoria;
            $this->total = $this->baseCalculo * ($this->aliquota / 100);
        }
        return $this;
    }
}