<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendario
 *
 * @ORM\Table(name="calendario")
 * @ORM\Entity
 */
class Calendario
{
    /**
     * @var string
     *
     * @ORM\Column(name="idCalendario", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcalendario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var \Agenda
     *
     * @ORM\ManyToOne(targetEntity="Agenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agenda", referencedColumnName="idAgenda")
     * })
     */
    private $agenda;

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
     * Get idcalendario
     *
     * @return string 
     */
    public function getIdcalendario()
    {
        return $this->idcalendario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Calendario
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
     * Set agenda
     *
     * @param \gestion\memorandosBundle\Entity\Agenda $agenda
     * @return Calendario
     */
    public function setAgenda(\gestion\memorandosBundle\Entity\Agenda $agenda = null)
    {
        $this->agenda = $agenda;
    
        return $this;
    }

    /**
     * Get agenda
     *
     * @return \gestion\memorandosBundle\Entity\Agenda 
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set calendario
     *
     * @param \gestion\memorandosBundle\Entity\Calendario $calendario
     * @return Calendario
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