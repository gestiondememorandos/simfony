<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunciacioninterna
 *
 * @ORM\Table(name="comunciacioninterna")
 * @ORM\Entity
 */
class Comunciacioninterna
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Comunicacion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Comunicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idComunicacionI", referencedColumnName="idComunicacion")
     * })
     */
    private $idcomunicacioni;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Comunciacioninterna
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
     * Set idcomunicacioni
     *
     * @param \gestion\memorandosBundle\Entity\Comunicacion $idcomunicacioni
     * @return Comunciacioninterna
     */
    public function setIdcomunicacioni(\gestion\memorandosBundle\Entity\Comunicacion $idcomunicacioni)
    {
        $this->idcomunicacioni = $idcomunicacioni;
    
        return $this;
    }

    /**
     * Get idcomunicacioni
     *
     * @return \gestion\memorandosBundle\Entity\Comunicacion 
     */
    public function getIdcomunicacioni()
    {
        return $this->idcomunicacioni;
    }
}