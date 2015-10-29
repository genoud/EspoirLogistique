<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transfert
 *
 * @ORM\Table(name="transfert", indexes={@ORM\Index(name="FK_Emetteur", columns={"Emetteur_id"}), @ORM\Index(name="FK_Recepteur", columns={"Recepteur_id"})})
 * @ORM\Entity
 */
class Transfert
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
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var \Tresorerie
     *
     * @ORM\ManyToOne(targetEntity="Tresorerie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Recepteur_id", referencedColumnName="id")
     * })
     */
    private $recepteur;

    /**
     * @var \Tresorerie
     *
     * @ORM\ManyToOne(targetEntity="Tresorerie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Emetteur_id", referencedColumnName="id")
     * })
     */
    private $emetteur;



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
     * @return Transfert
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
     * @return Transfert
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
     * Set description
     *
     * @param string $description
     * @return Transfert
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
     * Set recepteur
     *
     * @param \AppBundle\Entity\Tresorerie $recepteur
     * @return Transfert
     */
    public function setRecepteur(\AppBundle\Entity\Tresorerie $recepteur = null)
    {
        $this->recepteur = $recepteur;

        return $this;
    }

    /**
     * Get recepteur
     *
     * @return \AppBundle\Entity\Tresorerie 
     */
    public function getRecepteur()
    {
        return $this->recepteur;
    }

    /**
     * Set emetteur
     *
     * @param \AppBundle\Entity\Tresorerie $emetteur
     * @return Transfert
     */
    public function setEmetteur(\AppBundle\Entity\Tresorerie $emetteur = null)
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    /**
     * Get emetteur
     *
     * @return \AppBundle\Entity\Tresorerie 
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }
}
