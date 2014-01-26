<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guia
 *
 * @ORM\Table(name="guia")
 * @ORM\Entity
 */
class Guia
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Documento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGuia", referencedColumnName="idDocumento")
     * })
     */
    private $idguia;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Guia
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
     * Set idguia
     *
     * @param \gestion\memorandosBundle\Entity\Documento $idguia
     * @return Guia
     */
    public function setIdguia(\gestion\memorandosBundle\Entity\Documento $idguia)
    {
        $this->idguia = $idguia;
    
        return $this;
    }

    /**
     * Get idguia
     *
     * @return \gestion\memorandosBundle\Entity\Documento 
     */
    public function getIdguia()
    {
        return $this->idguia;
    }
}