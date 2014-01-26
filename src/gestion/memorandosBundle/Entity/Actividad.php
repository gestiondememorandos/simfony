<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad")
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="idActividad", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactividad;

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
     * @var \Memorando
     *
     * @ORM\ManyToOne(targetEntity="Memorando")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="memorando", referencedColumnName="idMemorando")
     * })
     */
    private $memorando;

    /**
     * @var \Estadoactividad
     *
     * @ORM\ManyToOne(targetEntity="Estadoactividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="idEstadoActividad")
     * })
     */
    private $estado;



    /**
     * Get idactividad
     *
     * @return string 
     */
    public function getIdactividad()
    {
        return $this->idactividad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Actividad
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
     * @return Actividad
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
     * Set memorando
     *
     * @param \gestion\memorandosBundle\Entity\Memorando $memorando
     * @return Actividad
     */
    public function setMemorando(\gestion\memorandosBundle\Entity\Memorando $memorando = null)
    {
        $this->memorando = $memorando;
    
        return $this;
    }

    /**
     * Get memorando
     *
     * @return \gestion\memorandosBundle\Entity\Memorando 
     */
    public function getMemorando()
    {
        return $this->memorando;
    }

    /**
     * Set estado
     *
     * @param \gestion\memorandosBundle\Entity\Estadoactividad $estado
     * @return Actividad
     */
    public function setEstado(\gestion\memorandosBundle\Entity\Estadoactividad $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \gestion\memorandosBundle\Entity\Estadoactividad 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}