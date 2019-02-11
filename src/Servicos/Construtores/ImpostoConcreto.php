<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 14:41
 */

namespace BranisSoft\Servicos\Construtores;


use BranisSoft\CalculadorImpostos\Entidades\Cofins;
use BranisSoft\CalculadorImpostos\Entidades\Icms;
use BranisSoft\CalculadorImpostos\Entidades\IcmsSt;
use BranisSoft\CalculadorImpostos\Entidades\Ii;
use BranisSoft\CalculadorImpostos\Entidades\Ipi;
use BranisSoft\CalculadorImpostos\Entidades\Pis;
use BranisSoft\Servicos\Interfaces\ImpostoConstrutor;
use BranisSoft\Servicos\Modelos\Imposto;

/**
 * Class ImpostoConcreto
 * @package Servicos\Construtores
 */
class ImpostoConcreto implements ImpostoConstrutor
{

    /**
     * @var Imposto
     */
    private $imposto;

    /**
     * ImpostoConcreto constructor.
     */
    public function __construct()
    {
        $this->resetar();
    }

    /**
     * Sim, temos estrangeirismos no código
     */
    public function resetar(): void
    {
        $this->imposto = new Imposto();
    }

    /**
     * @return Imposto
     */
    public function getImposto(): Imposto
    {
        return $this->imposto;
    }

    /**
     * @param array $data
     */
    public function produzirIi(array $data): void
    {
        $this->imposto->setIi(new Ii($data['valor_mercadoria'], $data['aliquota']));
        $this->imposto->getIi()->calcular();
    }

    /**
     * @param array $data
     */
    public function produzirPis(array $data): void
    {
        $this->imposto->setPis(new Pis($data['valor_mercadoria'], $data['aliquota'], $data['cst']));
        $this->imposto->getPis()->calcular();
    }

    /**
     * @param array $data
     */
    public function produzirCofins(array $data): void
    {
        $this->imposto->setCofins(new Cofins($data['valor_mercadoria'], $data['aliquota'], $data['cst']));
        $this->imposto->getCofins()->calcular();
    }

    /**
     * @param array $data
     */
    public function produzirIpi(array $data): void
    {
        $this->imposto->setIpi(new Ipi($data['valor_mercadoria'], $data['aliquota'], $data['cst']));
        $this->imposto->getIpi()->calcular();
    }

    /**
     * @param array $data
     */
    public function produzirIcms(array $data): void
    {
        $this->imposto->setIcms(new Icms($data['valor_mercadoria'],
                $data['aliquota'],
                $data['mod_bc'],
                $data['origem'],
                $data['cst'],
                $data['valor_frete'])
        );
        $this->imposto->getIcms()->calcular();
    }

    /**
     * @param array $data
     */
    public function produzirIcmsSt(array $data): void
    {
        $this->imposto->setIcmsSt(new IcmsSt(
                $data['valor_mercadoria'],
                $data['aliquota'],
                $data['cst'],
                $data['mod_bc_st'],
                $data['mv_aliquota'],
                $data['base_calculo_icms'],
                $data['valor_icms'],
                $data['valor_frete'],
                $data['valor_ipi'])
        );
        $this->imposto->getIcmsSt()->calcular();
    }

    /**
     * @param array $data
     */
    public function produzirIcmsSimplesNacional(array $data): void
    {
        // TODO: Implement produzirIcmsSimplesNacional() method.
    }

}