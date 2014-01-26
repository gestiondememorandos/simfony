<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadocomunicacion
 *
 * @ORM\Table(name="estadocomunicacion")
 * @ORM\Entity
 */
class Estadocomunicacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="idEstadoComunicacion", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestadocomunicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;



    /**
     * Get idestadocomunicacion
     *
     * @return string 
     */
    public function getIdestadocomunicacion()
    {
        return $this->idestadocomunicacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Estadocomunicacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Estadocomunicacion
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
}