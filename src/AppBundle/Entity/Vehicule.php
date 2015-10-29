<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
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
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=254, nullable=true)
     */
    private $immatriculation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="datetime", nullable=true)
     */
    private $dateachat;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $valeur;



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
     * @return Vehicule
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
     * Set immatriculation
     *
     * @param string $immatriculation
     * @return Vehicule
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string 
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set dateachat
     *
     * @param \DateTime $dateachat
     * @return Vehicule
     */
    public function setDateachat($dateachat)
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    /**
     * Get dateachat
     *
     * @return \DateTime 
     */
    public function getDateachat()
    {
        return $this->dateachat;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return Vehicule
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
