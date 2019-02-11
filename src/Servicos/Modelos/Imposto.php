<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 15:06
 */

namespace BranisSoft\Servicos\Modelos;


use BranisSoft\CalculadorImpostos\Entidades\Cofins;
use BranisSoft\CalculadorImpostos\Entidades\Icms;
use BranisSoft\CalculadorImpostos\Entidades\IcmsSimplesNacional;
use BranisSoft\CalculadorImpostos\Entidades\IcmsSt;
use BranisSoft\CalculadorImpostos\Entidades\Ii;
use BranisSoft\CalculadorImpostos\Entidades\Ipi;
use BranisSoft\CalculadorImpostos\Entidades\Pis;

/**
 * Class Imposto
 * @package Servicos\Modelos
 */
class Imposto
{
    /**
     * @var Ii
     */
    private $ii;

    /**
     * @var Pis
     */
    private $pis;

    /**
     * @var Cofins
     */
    private $cofins;

    /**
     * @var Ipi
     */
    private $ipi;

    /**
     * @var Icms
     */
    private $icms;

    /**
     * @var IcmsSt
     */
    private $icmsSt;

    /**
     * @var IcmsSimplesNacional
     */
    private $icmsSimplesNacional;

    /**
     * @return Ii
     */
    public function getIi(): Ii
    {
        return $this->ii;
    }

    /**
     * @param Ii $ii
     */
    public function setIi(Ii $ii): void
    {
        $this->ii = $ii;
    }

    /**
     * @return Pis
     */
    public function getPis(): Pis
    {
        return $this->pis;
    }

    /**
     * @param Pis $pis
     */
    public function setPis(Pis $pis): void
    {
        $this->pis = $pis;
    }

    /**
     * @return Cofins
     */
    public function getCofins(): Cofins
    {
        return $this->cofins;
    }

    /**
     * @param Cofins $cofins
     */
    public function setCofins(Cofins $cofins): void
    {
        $this->cofins = $cofins;
    }

    /**
     * @return Ipi
     */
    public function getIpi(): Ipi
    {
        return $this->ipi;
    }

    /**
     * @param Ipi $ipi
     */
    public function setIpi(Ipi $ipi): void
    {
        $this->ipi = $ipi;
    }

    /**
     * @return Icms
     */
    public function getIcms(): Icms
    {
        return $this->icms;
    }

    /**
     * @param Icms $icms
     */
    public function setIcms(Icms $icms): void
    {
        $this->icms = $icms;
    }

    /**
     * @return IcmsSt
     */
    public function getIcmsSt(): IcmsSt
    {
        return $this->icmsSt;
    }

    /**
     * @param IcmsSt $icmsSt
     */
    public function setIcmsSt(IcmsSt $icmsSt): void
    {
        $this->icmsSt = $icmsSt;
    }

    /**
     * @return IcmsSimplesNacional
     */
    public function getIcmsSimplesNacional(): IcmsSimplesNacional
    {
        return $this->icmsSimplesNacional;
    }

    /**
     * @param IcmsSimplesNacional $icmsSimplesNacional
     */
    public function setIcmsSimplesNacional(IcmsSimplesNacional $icmsSimplesNacional): void
    {
        $this->icmsSimplesNacional = $icmsSimplesNacional;
    }

}