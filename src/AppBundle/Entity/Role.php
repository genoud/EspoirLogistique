<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role {

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
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=254, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Privilege", inversedBy="role")
     * @ORM\JoinTable(name="avoir_privilege",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Role_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Privilege_id", referencedColumnName="id")
     *   }
     * )
     */
    private $privilege;

    /**
     * Constructor
     */
    public function __construct() {
        $this->privilege = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Role
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Role
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Add privilege
     *
     * @param \AppBundle\Entity\Privilege $privilege
     * @return Role
     */
    public function addPrivilege(\AppBundle\Entity\Privilege $privilege) {
        $this->privilege[] = $privilege;

        return $this;
    }

    /**
     * Remove privilege
     *
     * @param \AppBundle\Entity\Privilege $privilege
     */
    public function removePrivilege(\AppBundle\Entity\Privilege $privilege) {
        $this->privilege->removeElement($privilege);
    }

    /**
     * Get privilege
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrivilege() {
        return $this->privilege;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }
    
    public function __toString() {
        return $this->code." ".$this->libelle;
    }

}
