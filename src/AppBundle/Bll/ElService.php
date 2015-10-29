<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Bll;

use Doctrine\ORM\EntityManager;
//use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Description of ElService
 *
 * @author magloire
 */
class ElService {

    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function getPrivilegeManager() {
        return new PrivilegeManager($this->em);
    }

    public function getChargeDirecteManager() {
        return new ChargeDirecteManager($this->em);
    }

    public function getChargeVehiculeManager() {
        return new ChargeVehiculeManager($this->doctrine);
    }

    public function getEncaissementManager() {
        return new EncaissementManager($this->doctrine);
    }

    public function getIncidentManager() {
        return new IncidentManager($this->doctrine);
    }

    public function getMotifDepenseManager() {
        return new MotifDepenseManager($this->doctrine);
    }

    public function getPaiementChargeManager() {
        return new PaiementChargeManager($this->doctrine);
    }

    public function getPaiementSalaireManager() {
        return new PaiementSalaireManager($this->doctrine);
    }

    public function getPersonnelManager() {
        return new PersonnelManager($this->doctrine);
    }

    public function getRoleManager() {
        return new RoleManager($this->doctrine);
    }

    public function getSemiRemorqueManager() {
        return new SemiRemorqueManager($this->doctrine);
    }

    public function getSortieFondManager() {
        return new SortieFondManager($this->doctrine);
    }

    public function getTransfertManager() {
        return new TransfertManager($this->doctrine);
    }

    public function getUserManager() {
        return new UserManager($this->doctrine);
    }

    public function getVehiculeManager() {
        return new VehiculeManager($this->doctrine);
    }

    public function getVoyageManager() {
        return new VoyageManager($this->doctrine);
    }

    public function getVoyagePersonnelManager() {
        return new VoyagePersonnelManager($this->doctrine);
    }

}
