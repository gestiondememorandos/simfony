<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversacion
 *
 * @ORM\Table(name="conversacion")
 * @ORM\Entity
 */
class Conversacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="idConversacion", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconversacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreContacto", type="string", length=255, nullable=true)
     */
    private $nombrecontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=true)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaConversacion", type="string", length=255, nullable=true)
     */
    private $fechaconversacion;

    /**
     * @var \Comunicacion
     *
     * @ORM\ManyToOne(targetEntity="Comunicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comunicacion", referencedColumnName="idComunicacion")
     * })
     */
    private $comunicacion;



    /**
     * Get idconversacion
     *
     * @return string 
     */
    public function getIdconversacion()
    {
        return $this->idconversacion;
    }

    /**
     * Set nombrecontacto
     *
     * @param string $nombrecontacto
     * @return Conversacion
     */
    public function setNombrecontacto($nombrecontacto)
    {
        $this->nombrecontacto = $nombrecontacto;
    
        return $this;
    }

    /**
     * Get nombrecontacto
     *
     * @return string 
     */
    public function getNombrecontacto()
    {
        return $this->nombrecontacto;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     * @return Conversacion
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
     * Set fechaconversacion
     *
     * @param string $fechaconversacion
     * @return Conversacion
     */
    public function setFechaconversacion($fechaconversacion)
    {
        $this->fechaconversacion = $fechaconversacion;
    
        return $this;
    }

    /**
     * Get fechaconversacion
     *
     * @return string 
     */
    public function getFechaconversacion()
    {
        return $this->fechaconversacion;
    }

    /**
     * Set comunicacion
     *
     * @param \gestion\memorandosBundle\Entity\Comunicacion $comunicacion
     * @return Conversacion
     */
    public function setComunicacion(\gestion\memorandosBundle\Entity\Comunicacion $comunicacion = null)
    {
        $this->comunicacion = $comunicacion;
    
        return $this;
    }

    /**
     * Get comunicacion
     *
     * @return \gestion\memorandosBundle\Entity\Comunicacion 
     */
    public function getComunicacion()
    {
        return $this->comunicacion;
    }
}