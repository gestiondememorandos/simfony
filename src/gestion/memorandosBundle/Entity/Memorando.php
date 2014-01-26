<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memorando
 *
 * @ORM\Table(name="memorando")
 * @ORM\Entity
 */
class Memorando
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
     *   @ORM\JoinColumn(name="idMemorando", referencedColumnName="idComunicacion")
     * })
     */
    private $idmemorando;



    /**
     * Set numeroradicado
     *
     * @param string $numeroradicado
     * @return Memorando
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
     * Set idmemorando
     *
     * @param \gestion\memorandosBundle\Entity\Comunicacion $idmemorando
     * @return Memorando
     */
    public function setIdmemorando(\gestion\memorandosBundle\Entity\Comunicacion $idmemorando)
    {
        $this->idmemorando = $idmemorando;
    
        return $this;
    }

    /**
     * Get idmemorando
     *
     * @return \gestion\memorandosBundle\Entity\Comunicacion 
     */
    public function getIdmemorando()
    {
        return $this->idmemorando;
    }
}