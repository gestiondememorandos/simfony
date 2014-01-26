<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actorrol
 *
 * @ORM\Table(name="actorrol")
 * @ORM\Entity
 */
class Actorrol
{
    /**
     * @var string
     *
     * @ORM\Column(name="idRolActor", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrolactor;

    /**
     * @var \Actor
     *
     * @ORM\ManyToOne(targetEntity="Actor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actor", referencedColumnName="idActor")
     * })
     */
    private $actor;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol", referencedColumnName="idRol")
     * })
     */
    private $rol;



    /**
     * Get idrolactor
     *
     * @return string 
     */
    public function getIdrolactor()
    {
        return $this->idrolactor;
    }

    /**
     * Set actor
     *
     * @param \gestion\memorandosBundle\Entity\Actor $actor
     * @return Actorrol
     */
    public function setActor(\gestion\memorandosBundle\Entity\Actor $actor = null)
    {
        $this->actor = $actor;
    
        return $this;
    }

    /**
     * Get actor
     *
     * @return \gestion\memorandosBundle\Entity\Actor 
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Set rol
     *
     * @param \gestion\memorandosBundle\Entity\Rol $rol
     * @return Actorrol
     */
    public function setRol(\gestion\memorandosBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return \gestion\memorandosBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }
}