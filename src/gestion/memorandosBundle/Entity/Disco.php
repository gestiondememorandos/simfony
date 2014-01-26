<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disco
 *
 * @ORM\Table(name="disco")
 * @ORM\Entity
 */
class Disco
{
    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=255, nullable=false)
     */
    private $referencia;

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
     *   @ORM\JoinColumn(name="idDisco", referencedColumnName="idDeposito")
     * })
     */
    private $iddisco;



    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Disco
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Disco
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
     * Set iddisco
     *
     * @param \gestion\memorandosBundle\Entity\Deposito $iddisco
     * @return Disco
     */
    public function setIddisco(\gestion\memorandosBundle\Entity\Deposito $iddisco)
    {
        $this->iddisco = $iddisco;
    
        return $this;
    }

    /**
     * Get iddisco
     *
     * @return \gestion\memorandosBundle\Entity\Deposito 
     */
    public function getIddisco()
    {
        return $this->iddisco;
    }
}