<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expediente
 *
 * @ORM\Table(name="expediente")
 * @ORM\Entity
 */
class Expediente
{
    /**
     * @var string
     *
     * @ORM\Column(name="idExpediente", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=true)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaCreacion", type="string", length=255, nullable=true)
     */
    private $fechacreacion;

    /**
     * @var \Expediente
     *
     * @ORM\ManyToOne(targetEntity="Expediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente", referencedColumnName="idExpediente")
     * })
     */
    private $expediente;



    /**
     * Get idexpediente
     *
     * @return string 
     */
    public function getIdexpediente()
    {
        return $this->idexpediente;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     * @return Expediente
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    
        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set fechacreacion
     *
     * @param string $fechacreacion
     * @return Expediente
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;
    
        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return string 
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }

    /**
     * Set expediente
     *
     * @param \gestion\memorandosBundle\Entity\Expediente $expediente
     * @return Expediente
     */
    public function setExpediente(\gestion\memorandosBundle\Entity\Expediente $expediente = null)
    {
        $this->expediente = $expediente;
    
        return $this;
    }

    /**
     * Get expediente
     *
     * @return \gestion\memorandosBundle\Entity\Expediente 
     */
    public function getExpediente()
    {
        return $this->expediente;
    }
}