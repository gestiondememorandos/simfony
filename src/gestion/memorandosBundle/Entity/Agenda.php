<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity
 */
class Agenda
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Paquete
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Paquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgenda", referencedColumnName="idPaquete")
     * })
     */
    private $idagenda;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Agenda
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
     * Set idagenda
     *
     * @param \gestion\memorandosBundle\Entity\Paquete $idagenda
     * @return Agenda
     */
    public function setIdagenda(\gestion\memorandosBundle\Entity\Paquete $idagenda)
    {
        $this->idagenda = $idagenda;
    
        return $this;
    }

    /**
     * Get idagenda
     *
     * @return \gestion\memorandosBundle\Entity\Paquete 
     */
    public function getIdagenda()
    {
        return $this->idagenda;
    }
}