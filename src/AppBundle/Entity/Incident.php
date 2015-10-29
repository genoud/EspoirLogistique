<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incident
 *
 * @ORM\Table(name="incident", indexes={@ORM\Index(name="FK_Incidentvoyage", columns={"Voyage_id"})})
 * @ORM\Entity
 */
class Incident
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
     * @ORM\Column(name="dateSurvenance", type="datetime", nullable=true)
     */
    private $datesurvenance;

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
     * @return Incident
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
     * Set datesurvenance
     *
     * @param \DateTime $datesurvenance
     * @return Incident
     */
    public function setDatesurvenance($datesurvenance)
    {
        $this->datesurvenance = $datesurvenance;

        return $this;
    }

    /**
     * Get datesurvenance
     *
     * @return \DateTime 
     */
    public function getDatesurvenance()
    {
        return $this->datesurvenance;
    }

    /**
     * Set voyage
     *
     * @param \AppBundle\Entity\Voyage $voyage
     * @return Incident
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
}
