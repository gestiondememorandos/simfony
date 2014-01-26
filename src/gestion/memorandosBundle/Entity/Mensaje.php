<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensaje
 *
 * @ORM\Table(name="mensaje")
 * @ORM\Entity
 */
class Mensaje
{
    /**
     * @var string
     *
     * @ORM\Column(name="respuestaA", type="string", length=50, nullable=true)
     */
    private $respuestaa;

    /**
     * @var \Comunicacion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Comunicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMensaje", referencedColumnName="idComunicacion")
     * })
     */
    private $idmensaje;

    /**
     * @var \Conversacion
     *
     * @ORM\ManyToOne(targetEntity="Conversacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="conversacion", referencedColumnName="idConversacion")
     * })
     */
    private $conversacion;



    /**
     * Set respuestaa
     *
     * @param string $respuestaa
     * @return Mensaje
     */
    public function setRespuestaa($respuestaa)
    {
        $this->respuestaa = $respuestaa;
    
        return $this;
    }

    /**
     * Get respuestaa
     *
     * @return string 
     */
    public function getRespuestaa()
    {
        return $this->respuestaa;
    }

    /**
     * Set idmensaje
     *
     * @param \gestion\memorandosBundle\Entity\Comunicacion $idmensaje
     * @return Mensaje
     */
    public function setIdmensaje(\gestion\memorandosBundle\Entity\Comunicacion $idmensaje)
    {
        $this->idmensaje = $idmensaje;
    
        return $this;
    }

    /**
     * Get idmensaje
     *
     * @return \gestion\memorandosBundle\Entity\Comunicacion 
     */
    public function getIdmensaje()
    {
        return $this->idmensaje;
    }

    /**
     * Set conversacion
     *
     * @param \gestion\memorandosBundle\Entity\Conversacion $conversacion
     * @return Mensaje
     */
    public function setConversacion(\gestion\memorandosBundle\Entity\Conversacion $conversacion = null)
    {
        $this->conversacion = $conversacion;
    
        return $this;
    }

    /**
     * Get conversacion
     *
     * @return \gestion\memorandosBundle\Entity\Conversacion 
     */
    public function getConversacion()
    {
        return $this->conversacion;
    }
}