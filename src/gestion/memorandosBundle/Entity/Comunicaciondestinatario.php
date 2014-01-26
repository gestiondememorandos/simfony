<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunicaciondestinatario
 *
 * @ORM\Table(name="comunicaciondestinatario")
 * @ORM\Entity
 */
class Comunicaciondestinatario
{
    /**
     * @var string
     *
     * @ORM\Column(name="idComunicacionDestinatario", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomunicaciondestinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="cc", type="string", length=255, nullable=true)
     */
    private $cc;

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
     * @var \Contacto
     *
     * @ORM\ManyToOne(targetEntity="Contacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="destinatario", referencedColumnName="idContacto")
     * })
     */
    private $destinatario;



    /**
     * Get idcomunicaciondestinatario
     *
     * @return string 
     */
    public function getIdcomunicaciondestinatario()
    {
        return $this->idcomunicaciondestinatario;
    }

    /**
     * Set cc
     *
     * @param string $cc
     * @return Comunicaciondestinatario
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    
        return $this;
    }

    /**
     * Get cc
     *
     * @return string 
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set comunicacion
     *
     * @param \gestion\memorandosBundle\Entity\Comunicacion $comunicacion
     * @return Comunicaciondestinatario
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

    /**
     * Set destinatario
     *
     * @param \gestion\memorandosBundle\Entity\Contacto $destinatario
     * @return Comunicaciondestinatario
     */
    public function setDestinatario(\gestion\memorandosBundle\Entity\Contacto $destinatario = null)
    {
        $this->destinatario = $destinatario;
    
        return $this;
    }

    /**
     * Get destinatario
     *
     * @return \gestion\memorandosBundle\Entity\Contacto 
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}