<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seriedocumental
 *
 * @ORM\Table(name="seriedocumental")
 * @ORM\Entity
 */
class Seriedocumental
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="retencionAnios", type="string", length=20, nullable=false)
     */
    private $retencionanios;

    /**
     * @var string
     *
     * @ORM\Column(name="disposicionFinal", type="string", length=20, nullable=false)
     */
    private $disposicionfinal;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimiento", type="string", length=255, nullable=false)
     */
    private $procedimiento;

    /**
     * @var \Tablaretenciondocumental
     *
     * @ORM\ManyToOne(targetEntity="Tablaretenciondocumental")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tabladeretencion", referencedColumnName="idTabla")
     * })
     */
    private $tabladeretencion;

    /**
     * @var \Seriedocumental
     *
     * @ORM\ManyToOne(targetEntity="Seriedocumental")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subserie", referencedColumnName="codigo")
     * })
     */
    private $subserie;



    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Seriedocumental
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set retencionanios
     *
     * @param string $retencionanios
     * @return Seriedocumental
     */
    public function setRetencionanios($retencionanios)
    {
        $this->retencionanios = $retencionanios;
    
        return $this;
    }

    /**
     * Get retencionanios
     *
     * @return string 
     */
    public function getRetencionanios()
    {
        return $this->retencionanios;
    }

    /**
     * Set disposicionfinal
     *
     * @param string $disposicionfinal
     * @return Seriedocumental
     */
    public function setDisposicionfinal($disposicionfinal)
    {
        $this->disposicionfinal = $disposicionfinal;
    
        return $this;
    }

    /**
     * Get disposicionfinal
     *
     * @return string 
     */
    public function getDisposicionfinal()
    {
        return $this->disposicionfinal;
    }

    /**
     * Set procedimiento
     *
     * @param string $procedimiento
     * @return Seriedocumental
     */
    public function setProcedimiento($procedimiento)
    {
        $this->procedimiento = $procedimiento;
    
        return $this;
    }

    /**
     * Get procedimiento
     *
     * @return string 
     */
    public function getProcedimiento()
    {
        return $this->procedimiento;
    }

    /**
     * Set tabladeretencion
     *
     * @param \gestion\memorandosBundle\Entity\Tablaretenciondocumental $tabladeretencion
     * @return Seriedocumental
     */
    public function setTabladeretencion(\gestion\memorandosBundle\Entity\Tablaretenciondocumental $tabladeretencion = null)
    {
        $this->tabladeretencion = $tabladeretencion;
    
        return $this;
    }

    /**
     * Get tabladeretencion
     *
     * @return \gestion\memorandosBundle\Entity\Tablaretenciondocumental 
     */
    public function getTabladeretencion()
    {
        return $this->tabladeretencion;
    }

    /**
     * Set subserie
     *
     * @param \gestion\memorandosBundle\Entity\Seriedocumental $subserie
     * @return Seriedocumental
     */
    public function setSubserie(\gestion\memorandosBundle\Entity\Seriedocumental $subserie = null)
    {
        $this->subserie = $subserie;
    
        return $this;
    }

    /**
     * Get subserie
     *
     * @return \gestion\memorandosBundle\Entity\Seriedocumental 
     */
    public function getSubserie()
    {
        return $this->subserie;
    }
}