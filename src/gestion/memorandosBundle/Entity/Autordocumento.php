<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autordocumento
 *
 * @ORM\Table(name="autordocumento")
 * @ORM\Entity
 */
class Autordocumento
{
    /**
     * @var string
     *
     * @ORM\Column(name="idAutorDoc", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idautordoc;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionModificacion", type="string", length=255, nullable=false)
     */
    private $descripcionmodificacion;

    /**
     * @var \Actor
     *
     * @ORM\ManyToOne(targetEntity="Actor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actor", referencedColumnName="idActor")
     * })
     */
    private $actor;

    /**
     * @var \Documento
     *
     * @ORM\ManyToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="documento", referencedColumnName="idDocumento")
     * })
     */
    private $documento;



    /**
     * Get idautordoc
     *
     * @return string 
     */
    public function getIdautordoc()
    {
        return $this->idautordoc;
    }

    /**
     * Set descripcionmodificacion
     *
     * @param string $descripcionmodificacion
     * @return Autordocumento
     */
    public function setDescripcionmodificacion($descripcionmodificacion)
    {
        $this->descripcionmodificacion = $descripcionmodificacion;
    
        return $this;
    }

    /**
     * Get descripcionmodificacion
     *
     * @return string 
     */
    public function getDescripcionmodificacion()
    {
        return $this->descripcionmodificacion;
    }

    /**
     * Set actor
     *
     * @param \gestion\memorandosBundle\Entity\Actor $actor
     * @return Autordocumento
     */
    public function setActor(\gestion\memorandosBundle\Entity\Actor $actor = null)
    {
        $this->actor = $actor;
    
        return $this;
    }

    /**
     * Get actor
     *
     * @return \gestion\memorandosBundle\Entity\Actor 
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Set documento
     *
     * @param \gestion\memorandosBundle\Entity\Documento $documento
     * @return Autordocumento
     */
    public function setDocumento(\gestion\memorandosBundle\Entity\Documento $documento = null)
    {
        $this->documento = $documento;
    
        return $this;
    }

    /**
     * Get documento
     *
     * @return \gestion\memorandosBundle\Entity\Documento 
     */
    public function getDocumento()
    {
        return $this->documento;
    }
}