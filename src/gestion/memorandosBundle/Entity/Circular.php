<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Circular
 *
 * @ORM\Table(name="circular")
 * @ORM\Entity
 */
class Circular
{
    /**
     * @var string
     *
     * @ORM\Column(name="numeroRadicado", type="string", length=50, nullable=true)
     */
    private $numeroradicado;

    /**
     * @var \Comunicacion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Comunicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCircular", referencedColumnName="idComunicacion")
     * })
     */
    private $idcircular;



    /**
     * Set numeroradicado
     *
     * @param string $numeroradicado
     * @return Circular
     */
    public function setNumeroradicado($numeroradicado)
    {
        $this->numeroradicado = $numeroradicado;
    
        return $this;
    }

    /**
     * Get numeroradicado
     *
     * @return string 
     */
    public function getNumeroradicado()
    {
        return $this->numeroradicado;
    }

    /**
     * Set idcircular
     *
     * @param \gestion\memorandosBundle\Entity\Comunicacion $idcircular
     * @return Circular
     */
    public function setIdcircular(\gestion\memorandosBundle\Entity\Comunicacion $idcircular)
    {
        $this->idcircular = $idcircular;
    
        return $this;
    }

    /**
     * Get idcircular
     *
     * @return \gestion\memorandosBundle\Entity\Comunicacion 
     */
    public function getIdcircular()
    {
        return $this->idcircular;
    }
}