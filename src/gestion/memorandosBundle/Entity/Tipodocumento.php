<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipodocumento
 *
 * @ORM\Table(name="tipodocumento")
 * @ORM\Entity
 */
class Tipodocumento
{
    /**
     * @var string
     *
     * @ORM\Column(name="idTipoDoc", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipodoc;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Orientacion
     *
     * @ORM\ManyToOne(targetEntity="Orientacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orientacion", referencedColumnName="idOrientacion")
     * })
     */
    private $orientacion;

    /**
     * @var \Plantilla
     *
     * @ORM\ManyToOne(targetEntity="Plantilla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plantilla", referencedColumnName="idPlantilla")
     * })
     */
    private $plantilla;

    /**
     * @var \Guia
     *
     * @ORM\ManyToOne(targetEntity="Guia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="guia", referencedColumnName="idGuia")
     * })
     */
    private $guia;

    /**
     * @var \Listachequeo
     *
     * @ORM\ManyToOne(targetEntity="Listachequeo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="listachequeo", referencedColumnName="idListaChequeo")
     * })
     */
    private $listachequeo;



    /**
     * Get idtipodoc
     *
     * @return string 
     */
    public function getIdtipodoc()
    {
        return $this->idtipodoc;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tipodocumento
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tipodocumento
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
     * Set orientacion
     *
     * @param \gestion\memorandosBundle\Entity\Orientacion $orientacion
     * @return Tipodocumento
     */
    public function setOrientacion(\gestion\memorandosBundle\Entity\Orientacion $orientacion = null)
    {
        $this->orientacion = $orientacion;
    
        return $this;
    }

    /**
     * Get orientacion
     *
     * @return \gestion\memorandosBundle\Entity\Orientacion 
     */
    public function getOrientacion()
    {
        return $this->orientacion;
    }

    /**
     * Set plantilla
     *
     * @param \gestion\memorandosBundle\Entity\Plantilla $plantilla
     * @return Tipodocumento
     */
    public function setPlantilla(\gestion\memorandosBundle\Entity\Plantilla $plantilla = null)
    {
        $this->plantilla = $plantilla;
    
        return $this;
    }

    /**
     * Get plantilla
     *
     * @return \gestion\memorandosBundle\Entity\Plantilla 
     */
    public function getPlantilla()
    {
        return $this->plantilla;
    }

    /**
     * Set guia
     *
     * @param \gestion\memorandosBundle\Entity\Guia $guia
     * @return Tipodocumento
     */
    public function setGuia(\gestion\memorandosBundle\Entity\Guia $guia = null)
    {
        $this->guia = $guia;
    
        return $this;
    }

    /**
     * Get guia
     *
     * @return \gestion\memorandosBundle\Entity\Guia 
     */
    public function getGuia()
    {
        return $this->guia;
    }

    /**
     * Set listachequeo
     *
     * @param \gestion\memorandosBundle\Entity\Listachequeo $listachequeo
     * @return Tipodocumento
     */
    public function setListachequeo(\gestion\memorandosBundle\Entity\Listachequeo $listachequeo = null)
    {
        $this->listachequeo = $listachequeo;
    
        return $this;
    }

    /**
     * Get listachequeo
     *
     * @return \gestion\memorandosBundle\Entity\Listachequeo 
     */
    public function getListachequeo()
    {
        return $this->listachequeo;
    }
}