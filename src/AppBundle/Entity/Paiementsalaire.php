<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiementsalaire
 *
 * @ORM\Table(name="paiementsalaire", indexes={@ORM\Index(name="FK_PaiementSalaireTresorerie", columns={"Tresorerie_id"}), @ORM\Index(name="FK_Salaire_Personnel", columns={"Personnel_id"})})
 * @ORM\Entity
 */
class Paiementsalaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="datetime", nullable=true)
     */
    private $datepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Personnel_id", referencedColumnName="id")
     * })
     */
    private $personnel;

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
     * @param \DateTime $datepaiement
     * @return Paiementsalaire
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    /**
     * Get datepaiement
     *
     * @return \DateTime 
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Paiementsalaire
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Paiementsalaire
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set personnel
     *
     * @param \AppBundle\Entity\Personnel $personnel
     * @return Paiementsalaire
     */
    public function setPersonnel(\AppBundle\Entity\Personnel $personnel = null)
    {
        $this->personnel = $personnel;

        return $this;
    }

    /**
     * Get personnel
     *
     * @return \AppBundle\Entity\Personnel 
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }

    /**
     * Set tresorerie
     *
     * @param \AppBundle\Entity\Tresorerie $tresorerie
     * @return Paiementsalaire
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
