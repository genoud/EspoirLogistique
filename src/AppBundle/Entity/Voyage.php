<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 *
 * @ORM\Table(name="voyage", indexes={@ORM\Index(name="FK_VoyageSemiremorque", columns={"SemiRemorque_id"})})
 * @ORM\Entity
 */
class Voyage
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
     * @ORM\Column(name="dateDepart", type="datetime", nullable=true)
     */
    private $datedepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrive", type="datetime", nullable=true)
     */
    private $datearrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetour", type="datetime", nullable=true)
     */
    private $dateretour;

    /**
     * @var string
     *
     * @ORM\Column(name="villeArrive", type="string", length=254, nullable=true)
     */
    private $villearrive;

    /**
     * @var string
     *
     * @ORM\Column(name="marchandises", type="string", length=254, nullable=true)
     */
    private $marchandises;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=254, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=254, nullable=true)
     */
    private $observations;

    /**
     * @var \Semiremorque
     *
     * @ORM\ManyToOne(targetEntity="Semiremorque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SemiRemorque_id", referencedColumnName="id")
     * })
     */
    private $semiremorque;



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
     * Set datedepart
     *
     * @param \DateTime $datedepart
     * @return Voyage
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    /**
     * Get datedepart
     *
     * @return \DateTime 
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * Set datearrive
     *
     * @param \DateTime $datearrive
     * @return Voyage
     */
    public function setDatearrive($datearrive)
    {
        $this->datearrive = $datearrive;

        return $this;
    }

    /**
     * Get datearrive
     *
     * @return \DateTime 
     */
    public function getDatearrive()
    {
        return $this->datearrive;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return Voyage
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime 
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }

    /**
     * Set villearrive
     *
     * @param string $villearrive
     * @return Voyage
     */
    public function setVillearrive($villearrive)
    {
        $this->villearrive = $villearrive;

        return $this;
    }

    /**
     * Get villearrive
     *
     * @return string 
     */
    public function getVillearrive()
    {
        return $this->villearrive;
    }

    /**
     * Set marchandises
     *
     * @param string $marchandises
     * @return Voyage
     */
    public function setMarchandises($marchandises)
    {
        $this->marchandises = $marchandises;

        return $this;
    }

    /**
     * Get marchandises
     *
     * @return string 
     */
    public function getMarchandises()
    {
        return $this->marchandises;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Voyage
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
     * Set etat
     *
     * @param string $etat
     * @return Voyage
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
     * Set observations
     *
     * @param string $observations
     * @return Voyage
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string 
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set semiremorque
     *
     * @param \AppBundle\Entity\Semiremorque $semiremorque
     * @return Voyage
     */
    public function setSemiremorque(\AppBundle\Entity\Semiremorque $semiremorque = null)
    {
        $this->semiremorque = $semiremorque;

        return $this;
    }

    /**
     * Get semiremorque
     *
     * @return \AppBundle\Entity\Semiremorque 
     */
    public function getSemiremorque()
    {
        return $this->semiremorque;
    }
}
