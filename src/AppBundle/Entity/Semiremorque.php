<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semiremorque
 *
 * @ORM\Table(name="semiremorque", indexes={@ORM\Index(name="FK_Remorque", columns={"Tracteur_id"}), @ORM\Index(name="FK_Tacteur", columns={"Remorque_id"})})
 * @ORM\Entity
 */
class Semiremorque
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
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=254, nullable=true)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDissociation", type="datetime", nullable=true)
     */
    private $datedissociation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Remorque_id", referencedColumnName="id")
     * })
     */
    private $remorque;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tracteur_id", referencedColumnName="id")
     * })
     */
    private $tracteur;



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
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Semiremorque
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Semiremorque
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set datedissociation
     *
     * @param \DateTime $datedissociation
     * @return Semiremorque
     */
    public function setDatedissociation($datedissociation)
    {
        $this->datedissociation = $datedissociation;

        return $this;
    }

    /**
     * Get datedissociation
     *
     * @return \DateTime 
     */
    public function getDatedissociation()
    {
        return $this->datedissociation;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Semiremorque
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
     * Set remorque
     *
     * @param \AppBundle\Entity\Vehicule $remorque
     * @return Semiremorque
     */
    public function setRemorque(\AppBundle\Entity\Vehicule $remorque = null)
    {
        $this->remorque = $remorque;

        return $this;
    }

    /**
     * Get remorque
     *
     * @return \AppBundle\Entity\Vehicule 
     */
    public function getRemorque()
    {
        return $this->remorque;
    }

    /**
     * Set tracteur
     *
     * @param \AppBundle\Entity\Vehicule $tracteur
     * @return Semiremorque
     */
    public function setTracteur(\AppBundle\Entity\Vehicule $tracteur = null)
    {
        $this->tracteur = $tracteur;

        return $this;
    }

    /**
     * Get tracteur
     *
     * @return \AppBundle\Entity\Vehicule 
     */
    public function getTracteur()
    {
        return $this->tracteur;
    }
}
