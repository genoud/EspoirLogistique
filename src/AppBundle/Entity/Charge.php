<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Charge
 *
 * @ORM\Table(name="charge", indexes={@ORM\Index(name="FK_motif_charge", columns={"Motif_id"})})
 * @ORM\Entity
 */
class Charge
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
     * @ORM\Column(name="dateOpe", type="integer", nullable=true)
     */
    private $dateope;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="description", type="integer", nullable=true)
     */
    private $description;

    /**
     * @var \Motifdepenses
     *
     * @ORM\ManyToOne(targetEntity="Motifdepenses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Motif_id", referencedColumnName="id")
     * })
     */
    private $motif;



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
     * Set dateope
     *
     * @param integer $dateope
     * @return Charge
     */
    public function setDateope($dateope)
    {
        $this->dateope = $dateope;

        return $this;
    }

    /**
     * Get dateope
     *
     * @return integer 
     */
    public function getDateope()
    {
        return $this->dateope;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Charge
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
     * Set description
     *
     * @param integer $description
     * @return Charge
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
     * Set motif
     *
     * @param \AppBundle\Entity\Motifdepenses $motif
     * @return Charge
     */
    public function setMotif(\AppBundle\Entity\Motifdepenses $motif = null)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return \AppBundle\Entity\Motifdepenses 
     */
    public function getMotif()
    {
        return $this->motif;
    }
}
