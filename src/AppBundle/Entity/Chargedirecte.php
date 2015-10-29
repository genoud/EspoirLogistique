<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chargedirecte
 *
 * @ORM\Table(name="chargedirecte", indexes={@ORM\Index(name="FK_chargesVoyage", columns={"Voyage_id"})})
 * @ORM\Entity
 */
class Chargedirecte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="libelle", type="integer", nullable=true)
     */
    private $libelle;

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
     * @var \Charge
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Charge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Charge_id", referencedColumnName="id")
     * })
     */
    private $charge;



    /**
     * Set libelle
     *
     * @param integer $libelle
     * @return Chargedirecte
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return integer 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set voyage
     *
     * @param \AppBundle\Entity\Voyage $voyage
     * @return Chargedirecte
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
     * Set charge
     *
     * @param \AppBundle\Entity\Charge $charge
     * @return Chargedirecte
     */
    public function setCharge(\AppBundle\Entity\Charge $charge)
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
}
