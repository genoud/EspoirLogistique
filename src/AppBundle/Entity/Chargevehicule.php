<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chargevehicule
 *
 * @ORM\Table(name="chargevehicule", indexes={@ORM\Index(name="FK_chargeVehicule", columns={"Vehicule_id"})})
 * @ORM\Entity
 */
class Chargevehicule
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpiration", type="datetime", nullable=true)
     */
    private $dateexpiration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expire", type="boolean", nullable=true)
     */
    private $expire;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Vehicule_id", referencedColumnName="id")
     * })
     */
    private $vehicule;

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
     * Set dateexpiration
     *
     * @param \DateTime $dateexpiration
     * @return Chargevehicule
     */
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    /**
     * Get dateexpiration
     *
     * @return \DateTime 
     */
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * Set expire
     *
     * @param boolean $expire
     * @return Chargevehicule
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get expire
     *
     * @return boolean 
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set vehicule
     *
     * @param \AppBundle\Entity\Vehicule $vehicule
     * @return Chargevehicule
     */
    public function setVehicule(\AppBundle\Entity\Vehicule $vehicule = null)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \AppBundle\Entity\Vehicule 
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * Set charge
     *
     * @param \AppBundle\Entity\Charge $charge
     * @return Chargevehicule
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
