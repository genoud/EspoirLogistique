<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Bll;

use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Description of VehiculeManager
 *
 * @author magloire
 */
class VehiculeManager {

    protected $doctrine;

    public function __construct(Registry $doctrine) {
        $this->doctrine = $doctrine;
    }

}
