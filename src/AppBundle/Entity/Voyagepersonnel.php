<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyagepersonnel
 *
 * @ORM\Table(name="voyagepersonnel", indexes={@ORM\Index(name="FK_Voyage_Personnel_1", columns={"Voyage_id"}), @ORM\Index(name="FK_Voyage_Personnel_2", columns={"Personnel_id"})})
 * @ORM\Entity
 */
class Voyagepersonnel
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
     * @ORM\Column(name="fraisDeRoute", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $fraisderoute;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=254, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=254, nullable=true)
     */
    private $observation;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Personnel_id", referencedColumnName="id")
     * })
     */
    private $personnel;

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
     * Set fraisderoute
     *
     * @param string $fraisderoute
     * @return Voyagepersonnel
     */
    public function setFraisderoute($fraisderoute)
    {
        $this->fraisderoute = $fraisderoute;

        return $this;
    }

    /**
     * Get fraisderoute
     *
     * @return string 
     */
    public function getFraisderoute()
    {
        return $this->fraisderoute;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Voyagepersonnel
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
     * Set note
     *
     * @param string $note
     * @return Voyagepersonnel
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Voyagepersonnel
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set personnel
     *
     * @param \AppBundle\Entity\Personnel $personnel
     * @return Voyagepersonnel
     */
    public function setPersonnel(\AppBundle\Entity\Personnel $personnel = null)
    {
        $this->personnel = $personnel;

        return $this;
    }

    /**
     * Get personnel
     *
     * @return \AppBundle\Entity\Personnel 
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }

    /**
     * Set voyage
     *
     * @param \AppBundle\Entity\Voyage $voyage
     * @return Voyagepersonnel
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
