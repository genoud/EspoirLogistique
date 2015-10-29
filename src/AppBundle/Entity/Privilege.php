<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privilege
 *
 * @ORM\Table(name="privilege", indexes={@ORM\Index(name="FK_avoir_Parent", columns={"Parent_id"})})
 * @ORM\Entity
 */
class Privilege
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
     * @ORM\Column(name="libelle", type="string", length=254, nullable=true)
     */
    public $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isMenu", type="boolean", nullable=true)
     */
    private $ismenu;

    /**
     * @var \Privilege
     *
     * @ORM\ManyToOne(targetEntity="Privilege")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Role", mappedBy="privilege")
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set libelle
     *
     * @param string $libelle
     * @return Privilege
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Privilege
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
     * Set ismenu
     *
     * @param boolean $ismenu
     * @return Privilege
     */
    public function setIsmenu($ismenu)
    {
        $this->ismenu = $ismenu;

        return $this;
    }

    /**
     * Get ismenu
     *
     * @return boolean 
     */
    public function getIsmenu()
    {
        return $this->ismenu;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\Privilege $parent
     * @return Privilege
     */
    public function setParent(\AppBundle\Entity\Privilege $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Privilege 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add role
     *
     * @param \AppBundle\Entity\Role $role
     * @return Privilege
     */
    public function addRole(\AppBundle\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \AppBundle\Entity\Role $role
     */
    public function removeRole(\AppBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }
}
