<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unidadorganizacional
 *
 * @ORM\Table(name="unidadorganizacional")
 * @ORM\Entity
 */
class Unidadorganizacional
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
     * @var \Edificio
     *
     * @ORM\ManyToOne(targetEntity="Edificio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edificio", referencedColumnName="idEdificio")
     * })
     */
    private $edificio;

    /**
     * @var \Unidadorganizacional
     *
     * @ORM\ManyToOne(targetEntity="Unidadorganizacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidadorganizacional", referencedColumnName="idUnidadOrganizacional")
     * })
     */
    private $unidadorganizacional;

    /**
     * @var \Quien
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Quien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUnidadOrganizacional", referencedColumnName="idQuien")
     * })
     */
    private $idunidadorganizacional;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Unidadorganizacional
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
     * @return Unidadorganizacional
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
     * Set edificio
     *
     * @param \gestion\memorandosBundle\Entity\Edificio $edificio
     * @return Unidadorganizacional
     */
    public function setEdificio(\gestion\memorandosBundle\Entity\Edificio $edificio = null)
    {
        $this->edificio = $edificio;
    
        return $this;
    }

    /**
     * Get edificio
     *
     * @return \gestion\memorandosBundle\Entity\Edificio 
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * Set unidadorganizacional
     *
     * @param \gestion\memorandosBundle\Entity\Unidadorganizacional $unidadorganizacional
     * @return Unidadorganizacional
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

    /**
     * Set idunidadorganizacional
     *
     * @param \gestion\memorandosBundle\Entity\Quien $idunidadorganizacional
     * @return Unidadorganizacional
     */
    public function setIdunidadorganizacional(\gestion\memorandosBundle\Entity\Quien $idunidadorganizacional)
    {
        $this->idunidadorganizacional = $idunidadorganizacional;
    
        return $this;
    }

    /**
     * Get idunidadorganizacional
     *
     * @return \gestion\memorandosBundle\Entity\Quien 
     */
    public function getIdunidadorganizacional()
    {
        return $this->idunidadorganizacional;
    }
}