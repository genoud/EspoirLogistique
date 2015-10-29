<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel")
 * @ORM\Entity
 */
class Personnel
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
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=254, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNais", type="datetime", nullable=true)
     */
    private $datenais;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNais", type="string", length=254, nullable=true)
     */
    private $lieunais;

    /**
     * @var string
     *
     * @ORM\Column(name="cni", type="string", length=254, nullable=true)
     */
    private $cni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDel", type="datetime", nullable=true)
     */
    private $datedel;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuDel", type="string", length=254, nullable=true)
     */
    private $lieudel;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=254, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=254, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="salaire", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $salaire;



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
     * Set nom
     *
     * @param string $nom
     * @return Personnel
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personnel
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenais
     *
     * @param \DateTime $datenais
     * @return Personnel
     */
    public function setDatenais($datenais)
    {
        $this->datenais = $datenais;

        return $this;
    }

    /**
     * Get datenais
     *
     * @return \DateTime 
     */
    public function getDatenais()
    {
        return $this->datenais;
    }

    /**
     * Set lieunais
     *
     * @param string $lieunais
     * @return Personnel
     */
    public function setLieunais($lieunais)
    {
        $this->lieunais = $lieunais;

        return $this;
    }

    /**
     * Get lieunais
     *
     * @return string 
     */
    public function getLieunais()
    {
        return $this->lieunais;
    }

    /**
     * Set cni
     *
     * @param string $cni
     * @return Personnel
     */
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get cni
     *
     * @return string 
     */
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set datedel
     *
     * @param \DateTime $datedel
     * @return Personnel
     */
    public function setDatedel($datedel)
    {
        $this->datedel = $datedel;

        return $this;
    }

    /**
     * Get datedel
     *
     * @return \DateTime 
     */
    public function getDatedel()
    {
        return $this->datedel;
    }

    /**
     * Set lieudel
     *
     * @param string $lieudel
     * @return Personnel
     */
    public function setLieudel($lieudel)
    {
        $this->lieudel = $lieudel;

        return $this;
    }

    /**
     * Get lieudel
     *
     * @return string 
     */
    public function getLieudel()
    {
        return $this->lieudel;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Personnel
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Personnel
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Personnel
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set salaire
     *
     * @param string $salaire
     * @return Personnel
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return string 
     */
    public function getSalaire()
    {
        return $this->salaire;
    }
}
