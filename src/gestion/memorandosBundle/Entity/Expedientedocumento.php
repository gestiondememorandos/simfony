<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expedientedocumento
 *
 * @ORM\Table(name="expedientedocumento")
 * @ORM\Entity
 */
class Expedientedocumento
{
    /**
     * @var string
     *
     * @ORM\Column(name="idExpDoc", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexpdoc;

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
     * @var \Documento
     *
     * @ORM\ManyToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="documento", referencedColumnName="idDocumento")
     * })
     */
    private $documento;



    /**
     * Get idexpdoc
     *
     * @return string 
     */
    public function getIdexpdoc()
    {
        return $this->idexpdoc;
    }

    /**
     * Set expediente
     *
     * @param \gestion\memorandosBundle\Entity\Expediente $expediente
     * @return Expedientedocumento
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

    /**
     * Set documento
     *
     * @param \gestion\memorandosBundle\Entity\Documento $documento
     * @return Expedientedocumento
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