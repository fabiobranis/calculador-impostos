<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 09:23
 */

namespace BranisSoft\CalculadorImpostos\Entidades;

/**
 * Class Icms
 * @package BranisSoft\CalculadorImpostos\Entidades
 */
class Icms extends Imposto
{

    /**
     * @var string
     */
    private $modBc;

    /**
     * @var string
     */
    private $origem;

    /**
     * @var float
     */
    private $valorFrete;

    /**
     * Icms constructor.
     * @param float $valorMercadoria
     * @param float $aliquota
     * @param string $modBc
     * @param string $origem
     * @param string $cst
     * @param float $valorFrete
     */
    public function __construct(float $valorMercadoria, float $aliquota, string $modBc, string $origem, string $cst, float $valorFrete = 0)
    {
        parent::__construct($valorMercadoria, $aliquota, $cst);
        $this->modBc = $modBc;
        $this->origem = $origem;
        $this->valorFrete = $valorFrete;
    }


    /**
     * @return Imposto
     */
    public function calcular(): Imposto
    {
        // tributado integralmente ou com substituição tributária
        if (substr($this->cst, 0, 2) == "00"
            || substr($this->cst, 0, 2) == "10"
            || substr($this->cst, 0, 2) == "90") {

            // verifica a modalidade de base de calculo
            switch ($this->modBc) {
                // valor da operação
                case '3':
                    $this->baseCalculo = $this->valorMercadoria + $this->valorFrete;
                    $this->total = $this->baseCalculo * ($this->aliquota / 100);
                    break;
            }

        }

        return $this;
    }

    /**
     * @return string
     */
    public function getModBc(): string
    {
        return $this->modBc;
    }

    /**
     * @return string
     */
    public function getOrigem(): string
    {
        return $this->origem;
    }

    /**
     * @return float
     */
    public function getValorFrete(): float
    {
        return $this->valorFrete;
    }


}