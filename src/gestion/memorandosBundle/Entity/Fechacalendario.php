<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fechacalendario
 *
 * @ORM\Table(name="fechacalendario")
 * @ORM\Entity
 */
class Fechacalendario
{
    /**
     * @var string
     *
     * @ORM\Column(name="idFechaCalendario", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfechacalendario;

    /**
     * @var \Fecha
     *
     * @ORM\ManyToOne(targetEntity="Fecha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fecha", referencedColumnName="idFecha")
     * })
     */
    private $fecha;

    /**
     * @var \Calendario
     *
     * @ORM\ManyToOne(targetEntity="Calendario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendario", referencedColumnName="idCalendario")
     * })
     */
    private $calendario;



    /**
     * Get idfechacalendario
     *
     * @return string 
     */
    public function getIdfechacalendario()
    {
        return $this->idfechacalendario;
    }

    /**
     * Set fecha
     *
     * @param \gestion\memorandosBundle\Entity\Fecha $fecha
     * @return Fechacalendario
     */
    public function setFecha(\gestion\memorandosBundle\Entity\Fecha $fecha = null)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \gestion\memorandosBundle\Entity\Fecha 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set calendario
     *
     * @param \gestion\memorandosBundle\Entity\Calendario $calendario
     * @return Fechacalendario
     */
    public function setCalendario(\gestion\memorandosBundle\Entity\Calendario $calendario = null)
    {
        $this->calendario = $calendario;
    
        return $this;
    }

    /**
     * Get calendario
     *
     * @return \gestion\memorandosBundle\Entity\Calendario 
     */
    public function getCalendario()
    {
        return $this->calendario;
    }
}