<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Bll;
use Doctrine\Bundle\DoctrineBundle\Registry;
/**
 * Description of ChargeDirecteManager
 *
 * @author magloire
 */
class ChargeDirecteManager {
    protected $doctrine;
    
    public function __construct(Registry $doctrine) {
        $this->doctrine=$doctrine;
    }
    
    /**
     * crée une nouvelle charge directe
     * @param type $charge
     */
    public function createChargeDirecte($charge){
        
    }
    
    /**
     * Met à jour une charge existante
     * @param type $charge
     */
    public function updateChargeDirecte($charge){
        
    }
    
    /**
     * Supprime une charge directe existante
     * @param type $id
     */
    public function deleteChargeDirecte($id){
        
    }
    
    /**
     * Retourne la liste des charges directes
     */
    public function getListeChargeDirecte(){
        
    }
    
    /**
     * Retourne la liste des charges d'un véhicule
     * @param type $idVehicule
     */
    public function getListeChargeDirecteByVehicule($idVehicule){
        
    }
    
    /**
     * Retourne la liste des charges non payés
     */
    public function getListeChargeDirecteNonPaye(){
        
    }
}
