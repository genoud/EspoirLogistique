<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortiefond
 *
 * @ORM\Table(name="sortiefond", indexes={@ORM\Index(name="FK_Caisse", columns={"Tresorerie_id"})})
 * @ORM\Entity
 */
class Sortiefond
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
     * @ORM\Column(name="dateOpe", type="datetime", nullable=true)
     */
    private $dateope;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="desscription", type="string", length=254, nullable=true)
     */
    private $desscription;

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
     * Set dateope
     *
     * @param \DateTime $dateope
     * @return Sortiefond
     */
    public function setDateope($dateope)
    {
        $this->dateope = $dateope;

        return $this;
    }

    /**
     * Get dateope
     *
     * @return \DateTime 
     */
    public function getDateope()
    {
        return $this->dateope;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Sortiefond
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
     * Set desscription
     *
     * @param string $desscription
     * @return Sortiefond
     */
    public function setDesscription($desscription)
    {
        $this->desscription = $desscription;

        return $this;
    }

    /**
     * Get desscription
     *
     * @return string 
     */
    public function getDesscription()
    {
        return $this->desscription;
    }

    /**
     * Set tresorerie
     *
     * @param \AppBundle\Entity\Tresorerie $tresorerie
     * @return Sortiefond
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
