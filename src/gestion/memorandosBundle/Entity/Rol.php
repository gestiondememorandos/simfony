<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Quien
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Quien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRol", referencedColumnName="idQuien")
     * })
     */
    private $idrol;

    /**
     * @var \Unidadorganizacional
     *
     * @ORM\ManyToOne(targetEntity="Unidadorganizacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidadOrganizacional", referencedColumnName="idUnidadOrganizacional")
     * })
     */
    private $unidadorganizacional;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Rol
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Rol
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idrol
     *
     * @param \gestion\memorandosBundle\Entity\Quien $idrol
     * @return Rol
     */
    public function setIdrol(\gestion\memorandosBundle\Entity\Quien $idrol)
    {
        $this->idrol = $idrol;
    
        return $this;
    }

    /**
     * Get idrol
     *
     * @return \gestion\memorandosBundle\Entity\Quien 
     */
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set unidadorganizacional
     *
     * @param \gestion\memorandosBundle\Entity\Unidadorganizacional $unidadorganizacional
     * @return Rol
     */
    public function setUnidadorganizacional(\gestion\memorandosBundle\Entity\Unidadorganizacional $unidadorganizacional = null)
    {
        $this->unidadorganizacional = $unidadorganizacional;
    
        return $this;
    }

    /**
     * Get unidadorganizacional
     *
     * @return \gestion\memorandosBundle\Entity\Unidadorganizacional 
     */
    public function getUnidadorganizacional()
    {
        return $this->unidadorganizacional;
    }
}