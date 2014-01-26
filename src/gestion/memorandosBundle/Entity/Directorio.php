<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directorio
 *
 * @ORM\Table(name="directorio")
 * @ORM\Entity
 */
class Directorio
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Paquete
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Paquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDirectorio", referencedColumnName="idPaquete")
     * })
     */
    private $iddirectorio;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Directorio
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
     * Set iddirectorio
     *
     * @param \gestion\memorandosBundle\Entity\Paquete $iddirectorio
     * @return Directorio
     */
    public function setIddirectorio(\gestion\memorandosBundle\Entity\Paquete $iddirectorio)
    {
        $this->iddirectorio = $iddirectorio;
    
        return $this;
    }

    /**
     * Get iddirectorio
     *
     * @return \gestion\memorandosBundle\Entity\Paquete 
     */
    public function getIddirectorio()
    {
        return $this->iddirectorio;
    }
}