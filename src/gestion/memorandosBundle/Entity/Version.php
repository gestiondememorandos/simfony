<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table(name="version")
 * @ORM\Entity
 */
class Version
{
    /**
     * @var string
     *
     * @ORM\Column(name="idVersion", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idversion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="cuenta", type="string", length=255, nullable=false)
     */
    private $cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, nullable=false)
     */
    private $formato;

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
     * @var \Version
     *
     * @ORM\ManyToOne(targetEntity="Version")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="version", referencedColumnName="idVersion")
     * })
     */
    private $version;



    /**
     * Get idversion
     *
     * @return string 
     */
    public function getIdversion()
    {
        return $this->idversion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Version
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     * @return Version
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;
    
        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set formato
     *
     * @param string $formato
     * @return Version
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;
    
        return $this;
    }

    /**
     * Get formato
     *
     * @return string 
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set documento
     *
     * @param \gestion\memorandosBundle\Entity\Documento $documento
     * @return Version
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

    /**
     * Set version
     *
     * @param \gestion\memorandosBundle\Entity\Version $version
     * @return Version
     */
    public function setVersion(\gestion\memorandosBundle\Entity\Version $version = null)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return \gestion\memorandosBundle\Entity\Version 
     */
    public function getVersion()
    {
        return $this->version;
    }
}