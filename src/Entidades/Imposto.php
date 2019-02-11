<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 10:12
 */

namespace BranisSoft\CalculadorImpostos\Entidades;


/**
 * Class ImpostoConcreto
 * @package BranisSoft\CalculadorImpostos\Entidades
 */
abstract class Imposto
{
    /**
     * @var string
     */
    protected $cst;

    /**
     * @var float
     */
    protected $valorMercadoria;

    /**
     * @var float
     */
    protected $aliquota = 0;

    /**
     * @var float
     */
    protected $valor = 0;

    /**
     * @var float
     */
    protected $baseCalculo = 0;

    /**
     * @var float
     */
    protected $total = 0;

    /**
     * ImpostoConcreto constructor.
     * @param float $valorMercadoria
     * @param float $aliquota
     * @param string|null $cst
     */
    public function __construct(float $valorMercadoria, float $aliquota, string $cst = null)
    {
        $this->cst = $cst;
        $this->valorMercadoria = $valorMercadoria;
        $this->aliquota = $aliquota;
    }

    /**
     * @return Imposto
     */
    public abstract function calcular(): Imposto;

    /**
     * @return float
     */
    public function getBaseCalculo(): float
    {
        return $this->baseCalculo;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

}