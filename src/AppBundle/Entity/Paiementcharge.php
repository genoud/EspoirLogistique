<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiementcharge
 *
 * @ORM\Table(name="paiementcharge", indexes={@ORM\Index(name="FK_PaiementTresorerie", columns={"Tresorerie_id"}), @ORM\Index(name="FK_paiement_Charge", columns={"Charge_id"})})
 * @ORM\Entity
 */
class Paiementcharge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="datePaiement", type="integer", nullable=true)
     */
    private $datepaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="description", type="integer", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var \Charge
     *
     * @ORM\ManyToOne(targetEntity="Charge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Charge_id", referencedColumnName="id")
     * })
     */
    private $charge;

    /**
     * @var \Tresorerie
     *
     * @ORM\ManyToOne(targetEntity="Tresorerie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tresorerie_id", referencedColumnName="id")
     * })
     */
    private $tresorerie;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datepaiement
     *
     * @param integer $datepaiement
     * @return Paiementcharge
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    /**
     * Get datepaiement
     *
     * @return integer 
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }

    /**
     * Set description
     *
     * @param integer $description
     * @return Paiementcharge
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return integer 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Paiementcharge
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set charge
     *
     * @param \AppBundle\Entity\Charge $charge
     * @return Paiementcharge
     */
    public function setCharge(\AppBundle\Entity\Charge $charge = null)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return \AppBundle\Entity\Charge 
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set tresorerie
     *
     * @param \AppBundle\Entity\Tresorerie $tresorerie
     * @return Paiementcharge
     */
    public function setTresorerie(\AppBundle\Entity\Tresorerie $tresorerie = null)
    {
        $this->tresorerie = $tresorerie;

        return $this;
    }

    /**
     * Get tresorerie
     *
     * @return \AppBundle\Entity\Tresorerie 
     */
    public function getTresorerie()
    {
        return $this->tresorerie;
    }
}
