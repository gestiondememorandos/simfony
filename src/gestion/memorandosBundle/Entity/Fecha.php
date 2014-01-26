<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fecha
 *
 * @ORM\Table(name="fecha")
 * @ORM\Entity
 */
class Fecha
{
    /**
     * @var string
     *
     * @ORM\Column(name="idFecha", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfecha;

    /**
     * @var string
     *
     * @ORM\Column(name="dia", type="string", length=4, nullable=false)
     */
    private $dia;

    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=20, nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=false)
     */
    private $anio;



    /**
     * Get idfecha
     *
     * @return string 
     */
    public function getIdfecha()
    {
        return $this->idfecha;
    }

    /**
     * Set dia
     *
     * @param string $dia
     * @return Fecha
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
    
        return $this;
    }

    /**
     * Get dia
     *
     * @return string 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set mes
     *
     * @param string $mes
     * @return Fecha
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    
        return $this;
    }

    /**
     * Get mes
     *
     * @return string 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return Fecha
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return string 
     */
    public function getAnio()
    {
        return $this->anio;
    }
}