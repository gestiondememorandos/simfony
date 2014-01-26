<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Edificio
 *
 * @ORM\Table(name="edificio")
 * @ORM\Entity
 */
class Edificio
{
    /**
     * @var string
     *
     * @ORM\Column(name="idEdificio", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idedificio;

    /**
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="direccion", referencedColumnName="id_direccion")
     * })
     */
    private $direccion;



    /**
     * Get idedificio
     *
     * @return string 
     */
    public function getIdedificio()
    {
        return $this->idedificio;
    }

    /**
     * Set direccion
     *
     * @param \gestion\memorandosBundle\Entity\Direccion $direccion
     * @return Edificio
     */
    public function setDireccion(\gestion\memorandosBundle\Entity\Direccion $direccion = null)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return \gestion\memorandosBundle\Entity\Direccion 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}