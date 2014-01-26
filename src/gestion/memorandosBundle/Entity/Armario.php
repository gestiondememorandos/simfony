<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armario
 *
 * @ORM\Table(name="armario")
 * @ORM\Entity
 */
class Armario
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Deposito
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Deposito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idArmario", referencedColumnName="idDeposito")
     * })
     */
    private $idarmario;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Armario
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
     * Set idarmario
     *
     * @param \gestion\memorandosBundle\Entity\Deposito $idarmario
     * @return Armario
     */
    public function setIdarmario(\gestion\memorandosBundle\Entity\Deposito $idarmario)
    {
        $this->idarmario = $idarmario;
    
        return $this;
    }

    /**
     * Get idarmario
     *
     * @return \gestion\memorandosBundle\Entity\Deposito 
     */
    public function getIdarmario()
    {
        return $this->idarmario;
    }
}