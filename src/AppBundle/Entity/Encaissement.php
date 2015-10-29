<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encaissement
 *
 * @ORM\Table(name="encaissement", indexes={@ORM\Index(name="FK_EncaissementTresorerie", columns={"Tresorerie_id"}), @ORM\Index(name="FK_Encaissement_Voyage", columns={"Voyage_id"})})
 * @ORM\Entity
 */
class Encaissement
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEncaissement", type="datetime", nullable=true)
     */
    private $dateencaissement;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Voyage
     *
     * @ORM\ManyToOne(targetEntity="Voyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Voyage_id", referencedColumnName="id")
     * })
     */
    private $voyage;

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
     * Set description
     *
     * @param string $description
     * @return Encaissement
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
     * Set dateencaissement
     *
     * @param \DateTime $dateencaissement
     * @return Encaissement
     */
    public function setDateencaissement($dateencaissement)
    {
        $this->dateencaissement = $dateencaissement;

        return $this;
    }

    /**
     * Get dateencaissement
     *
     * @return \DateTime 
     */
    public function getDateencaissement()
    {
        return $this->dateencaissement;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Encaissement
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
     * Set voyage
     *
     * @param \AppBundle\Entity\Voyage $voyage
     * @return Encaissement
     */
    public function setVoyage(\AppBundle\Entity\Voyage $voyage = null)
    {
        $this->voyage = $voyage;

        return $this;
    }

    /**
     * Get voyage
     *
     * @return \AppBundle\Entity\Voyage 
     */
    public function getVoyage()
    {
        return $this->voyage;
    }

    /**
     * Set tresorerie
     *
     * @param \AppBundle\Entity\Tresorerie $tresorerie
     * @return Encaissement
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
