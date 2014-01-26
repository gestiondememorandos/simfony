<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Palabradocumento
 *
 * @ORM\Table(name="palabradocumento")
 * @ORM\Entity
 */
class Palabradocumento
{
    /**
     * @var string
     *
     * @ORM\Column(name="idPalabraClaveDocumento", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpalabraclavedocumento;

    /**
     * @var \Palabraclave
     *
     * @ORM\ManyToOne(targetEntity="Palabraclave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="palabraClave", referencedColumnName="idPalabraClave")
     * })
     */
    private $palabraclave;

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
     * Get idpalabraclavedocumento
     *
     * @return string 
     */
    public function getIdpalabraclavedocumento()
    {
        return $this->idpalabraclavedocumento;
    }

    /**
     * Set palabraclave
     *
     * @param \gestion\memorandosBundle\Entity\Palabraclave $palabraclave
     * @return Palabradocumento
     */
    public function setPalabraclave(\gestion\memorandosBundle\Entity\Palabraclave $palabraclave = null)
    {
        $this->palabraclave = $palabraclave;
    
        return $this;
    }

    /**
     * Get palabraclave
     *
     * @return \gestion\memorandosBundle\Entity\Palabraclave 
     */
    public function getPalabraclave()
    {
        return $this->palabraclave;
    }

    /**
     * Set documento
     *
     * @param \gestion\memorandosBundle\Entity\Documento $documento
     * @return Palabradocumento
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