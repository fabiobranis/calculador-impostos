<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 01/02/19
 * Time: 14:27
 */

namespace BranisSoft\Servicos\Interfaces;


/**
 * A ordem dos fatores alteram o produto final.
 * Execute o director sempre na ordem dos métodos dessa interface, principalmente quando se trata de IcmsSt
 * Interface ImpostoConstrutor
 * @package Servicos\Interfaces
 */
interface ImpostoConstrutor
{

    /**
     * @param array $data
     */
    public function produzirIi(array $data): void;

    /**
     * @param array $data
     */
    public function produzirPis(array $data): void;

    /**
     * @param array $data
     */
    public function produzirCofins(array $data): void;

    /**
     * @param array $data
     */
    public function produzirIpi(array $data): void;

    /**
     * @param array $data
     */
    public function produzirIcms(array $data): void;

    /**
     * @param array $data
     */
    public function produzirIcmsSt(array $data): void;

    /**
     * @param array $data
     */
    public function produzirIcmsSimplesNacional(array $data): void;


}