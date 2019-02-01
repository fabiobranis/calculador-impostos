<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 10:16
 */

namespace BranisSoft\CalculadorImpostos\Entidades;


/**
 * Class IcmsSimplesNacional
 * @package BranisSoft\CalculadorImpostos\Entidades
 */
class IcmsSimplesNacional extends Imposto
{

    /**
     * @var string
     */
    private $csosn;

    /**
     * @var string
     */
    private $modBc;

    /**
     * @var string
     */
    private $origem;

    /**
     * IcmsSimplesNacional constructor.
     * @param float $valorMercadoria
     * @param float $aliquota
     * @param string $csosn
     * @param string $modBc
     * @param string $origem
     */
    public function __construct(float $valorMercadoria, float $aliquota, string $csosn, string $modBc, string $origem)
    {
        parent::__construct($valorMercadoria, $aliquota);
        $this->csosn = $csosn;
        $this->modBc = $modBc;
        $this->origem = $origem;
    }


    /**
     * @return Imposto
     */
    public function calcular(): Imposto
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getCsosn(): string
    {
        return $this->csosn;
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



}