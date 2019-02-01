<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 10:16
 */

namespace BranisSoft\CalculadorImpostos\Entidades;


/**
 * Class IcmsSt
 * @package BranisSoft\CalculadorImpostos\Entidades
 */
class IcmsSt extends Imposto
{

    /**
     * @var string
     */
    private $modBcSt;

    /**
     * @var float
     */
    private $mvaAliquota;

    /**
     * @var float
     */
    private $baseCalculoIcms;

    /**
     * @var float
     */
    private $valorIcms;

    /**
     * @var float
     */
    private $valorFrete;

    /**
     * @var float
     */
    private $valorIpi;

    /**
     * IcmsSt constructor.
     * @param float $valorMercadoria
     * @param float $aliquota
     * @param string $cst
     * @param string $modBcSt
     * @param float $mvaAliquota
     * @param float $baseCalculoIcms
     * @param float $valorIcms
     * @param float $valorFrete
     * @param float $valorIpi
     */
    public function __construct(float $valorMercadoria, float $aliquota, string $cst, string $modBcSt,
                                float $mvaAliquota, float $baseCalculoIcms, float $valorIcms, float $valorFrete = 0,
                                float $valorIpi = 0)
    {
        parent::__construct($valorMercadoria, $aliquota, $cst);
        $this->modBcSt = $modBcSt;
        $this->mvaAliquota = $mvaAliquota;
        $this->baseCalculoIcms = $baseCalculoIcms;
        $this->valorIcms = $valorIcms;
        $this->valorFrete = $valorFrete;
        $this->valorIpi = $valorIpi;
    }


    /**
     * @return Imposto
     */
    public function calcular(): Imposto
    {
        if (substr($this->cst, 0, 2) == "10" || substr($this->cst, 0, 2) == "00") {

            // verifica a modalidade de base de calculo do st
            switch ($this->modBcSt) {

                // % MVA
                case '4':
                    $this->baseCalculo = ($this->baseCalculoIcms + $this->valorFrete + $this->valorIpi) * ((100 + $this->mvaAliquota) / 100);
                    $this->total = ($this->baseCalculo * ($this->aliquota / 100)) - $this->valorIcms;
                    break;
            }

        }
        return $this;
    }

    /**
     * @return string
     */
    public function getCst(): string
    {
        return $this->cst;
    }

    /**
     * @return string
     */
    public function getModBcSt(): string
    {
        return $this->modBcSt;
    }

    /**
     * @return float
     */
    public function getMvaAliquota(): float
    {
        return $this->mvaAliquota;
    }

    /**
     * @return float
     */
    public function getBaseCalculoIcms(): float
    {
        return $this->baseCalculoIcms;
    }

    /**
     * @return float
     */
    public function getValorFrete(): float
    {
        return $this->valorFrete;
    }

    /**
     * @return float
     */
    public function getValorIpi(): float
    {
        return $this->valorIpi;
    }

}