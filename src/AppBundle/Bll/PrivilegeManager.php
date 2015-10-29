<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Bll;

//use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Registry;
use AppBundle\Entity\Privilege as Priv;
/**
 * Description of Privilege
 *
 * @author magloire
 */
class PrivilegeManager {

    protected $doctrine;
    
    public function __construct(Registry $doctrine) {
        $this->doctrine=$doctrine;
    }
    
     public function deleteAllPrivileges() {
        $em=$this->doctrine->getManager();
        $query = $em->createQuery("DELETE FROM AppBundle:Privilege as p  WHERE p.parent is not null");
        $query->getResult();
        $query2 = $em->createQuery("DELETE FROM AppBundle:Privilege as p  WHERE p.parent is  null");
        $query2->getResult();
        $em->flush();
    }

    /**
     * Retourne la liste des menus fils d'un menu
     * @param Priv $parent
     */
    public function getFils(Priv $parent){
        
        $em=$this->doctrine->getManager();
        $query=$em->createQuery("SELECT p from AppBundle:Privilege p WHERE p.parent = :parent");
        $query->setParameter("parent", $parent);
        $privList=$query->getResult();
        foreach($privList as $parent){
            $fils=$this->getFils($parent);
            $parent->fils=$fils;
        }
        return $privList;
        
    }
    /**
     * Retourne la liste des menu avec leurs fils
     */
    public function getMenuList(){
        $em=$this->doctrine->getManager();
        $query=$em->createQuery("SELECT p from AppBundle:Privilege p WHERE p.parent is null");
//        $repository=$this->doctrine->getRepository("AppBundle:Privilege");
        $privList=$query->getResult();
        foreach($privList as $parent){
            $fils=$this->getFils($parent);
            $parent->fils=$fils;
        }
        return $privList;
    }
    
    public function createPrivileges() {
        $privList = array();

        $voyageMenu = $this->createNewPrivilege("Voyages", null, true, "Voyages");
        $privList[] = $voyageMenu;

        $vehiculeMenu = $this->createNewPrivilege("Vehicules", null, true, "Véhicules");
        $privList[] = $vehiculeMenu;

        $tracteurMenu = $this->createNewPrivilege("Tracteurs", $vehiculeMenu, true, "Tracteurs");
        $privList[] = $tracteurMenu;

        $semiMenu = $this->createNewPrivilege("Remorques", $vehiculeMenu, true, "Remorques");
        $privList[] = $semiMenu;

        $semiRemorqueMenu = $this->createNewPrivilege("Semi-Remorques", $vehiculeMenu, true, "Semi-Remorques");
        $privList[] = $semiRemorqueMenu;

        $personnelMenu = $this->createNewPrivilege("Personnels", null, true, "Personnel");
        $privList[] = $personnelMenu;

        $depenseMenu = $this->createNewPrivilege("Dépenses", null, true, "Dépenses");
        $privList[] = $depenseMenu;

        $motifDepenseMenu = $this->createNewPrivilege("Motifs dépenses", $depenseMenu, true, "Motifs dépenses");
        $privList[] = $motifDepenseMenu;

        $chargeVehiculesMenu = $this->createNewPrivilege("Charges véhicules", $depenseMenu, true, "Charges véhicules");
        $privList[] = $chargeVehiculesMenu;

        $paiementChargeMenu = $this->createNewPrivilege("Paiement charge", $depenseMenu, true, "Paiement charge");
        $privList[] = $paiementChargeMenu;

        $caisseMenu = $this->createNewPrivilege("Trésorerie", null, true, "Trésorerie");
        $privList[] = $caisseMenu;

        $tresorerieMenu = $this->createNewPrivilege("Trésoreries", null, true, "Trésoreries");
        $privList[] = $tresorerieMenu;

        $sortieFondsMenu = $this->createNewPrivilege("Sortie de fonds", $tresorerieMenu, true, "Sortie de fonds");
        $privList[] = $sortieFondsMenu;

        $transfertFondsMenu = $this->createNewPrivilege("Transfert de fonds", $tresorerieMenu, true, "Transfert de fonds");
        $privList[] = $transfertFondsMenu;

        $paiementSalaireMenu = $this->createNewPrivilege("Paiement salaire", $tresorerieMenu, true, "Paiement salaire");
        $privList[] = $paiementSalaireMenu;

        $em=$this->doctrine->getManager();
        foreach ($privList as $priv) {
            $em->persist($priv);
        }

        $em->flush();
        return $privList;
    }

    public function createNewPrivilege($libelle, $parent, $isMenu, $description) {
        $priv = new Priv();
        $priv->setDescription($libelle);
        $priv->setIsmenu($isMenu);
        $priv->setLibelle($description);
        $priv->setParent($parent);
        return $priv;
    }
}
