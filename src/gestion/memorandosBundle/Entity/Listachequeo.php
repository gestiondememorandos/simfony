<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listachequeo
 *
 * @ORM\Table(name="listachequeo")
 * @ORM\Entity
 */
class Listachequeo
{
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=false)
     */
    private $observacion;

    /**
     * @var \Documento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idListaChequeo", referencedColumnName="idDocumento")
     * })
     */
    private $idlistachequeo;



    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Listachequeo
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set idlistachequeo
     *
     * @param \gestion\memorandosBundle\Entity\Documento $idlistachequeo
     * @return Listachequeo
     */
    public function setIdlistachequeo(\gestion\memorandosBundle\Entity\Documento $idlistachequeo)
    {
        $this->idlistachequeo = $idlistachequeo;
    
        return $this;
    }

    /**
     * Get idlistachequeo
     *
     * @return \gestion\memorandosBundle\Entity\Documento 
     */
    public function getIdlistachequeo()
    {
        return $this->idlistachequeo;
    }
}