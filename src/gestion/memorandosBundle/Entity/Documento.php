<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 *
 * @ORM\Table(name="documento")
 * @ORM\Entity
 */
class Documento
{
    /**
     * @var string
     *
     * @ORM\Column(name="idDocumento", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="edicion", type="string", length=255, nullable=true)
     */
    private $edicion;

    /**
     * @var string
     *
     * @ORM\Column(name="vigencia", type="string", length=255, nullable=true)
     */
    private $vigencia;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaCreacion", type="string", length=255, nullable=true)
     */
    private $fechacreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="anexo", type="string", length=255, nullable=true)
     */
    private $anexo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text", nullable=true)
     */
    private $comentarios;

    /**
     * @var \Documento
     *
     * @ORM\ManyToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="documentobase", referencedColumnName="idDocumento")
     * })
     */
    private $documentobase;

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
     * @var \Tablaretenciondocumental
     *
     * @ORM\ManyToOne(targetEntity="Tablaretenciondocumental")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tabladeretenciondocumental", referencedColumnName="idTabla")
     * })
     */
    private $tabladeretenciondocumental;

    /**
     * @var \Tipodocumento
     *
     * @ORM\ManyToOne(targetEntity="Tipodocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoDocumento", referencedColumnName="idTipoDoc")
     * })
     */
    private $tipodocumento;



    /**
     * Get iddocumento
     *
     * @return string 
     */
    public function getIddocumento()
    {
        return $this->iddocumento;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Documento
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Documento
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
     * Set edicion
     *
     * @param string $edicion
     * @return Documento
     */
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;
    
        return $this;
    }

    /**
     * Get edicion
     *
     * @return string 
     */
    public function getEdicion()
    {
        return $this->edicion;
    }

    /**
     * Set vigencia
     *
     * @param string $vigencia
     * @return Documento
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;
    
        return $this;
    }

    /**
     * Get vigencia
     *
     * @return string 
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Documento
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechacreacion
     *
     * @param string $fechacreacion
     * @return Documento
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;
    
        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return string 
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }

    /**
     * Set anexo
     *
     * @param string $anexo
     * @return Documento
     */
    public function setAnexo($anexo)
    {
        $this->anexo = $anexo;
    
        return $this;
    }

    /**
     * Get anexo
     *
     * @return string 
     */
    public function getAnexo()
    {
        return $this->anexo;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Documento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Documento
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    
        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set documentobase
     *
     * @param \gestion\memorandosBundle\Entity\Documento $documentobase
     * @return Documento
     */
    public function setDocumentobase(\gestion\memorandosBundle\Entity\Documento $documentobase = null)
    {
        $this->documentobase = $documentobase;
    
        return $this;
    }

    /**
     * Get documentobase
     *
     * @return \gestion\memorandosBundle\Entity\Documento 
     */
    public function getDocumentobase()
    {
        return $this->documentobase;
    }

    /**
     * Set orientacion
     *
     * @param \gestion\memorandosBundle\Entity\Orientacion $orientacion
     * @return Documento
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
     * Set tabladeretenciondocumental
     *
     * @param \gestion\memorandosBundle\Entity\Tablaretenciondocumental $tabladeretenciondocumental
     * @return Documento
     */
    public function setTabladeretenciondocumental(\gestion\memorandosBundle\Entity\Tablaretenciondocumental $tabladeretenciondocumental = null)
    {
        $this->tabladeretenciondocumental = $tabladeretenciondocumental;
    
        return $this;
    }

    /**
     * Get tabladeretenciondocumental
     *
     * @return \gestion\memorandosBundle\Entity\Tablaretenciondocumental 
     */
    public function getTabladeretenciondocumental()
    {
        return $this->tabladeretenciondocumental;
    }

    /**
     * Set tipodocumento
     *
     * @param \gestion\memorandosBundle\Entity\Tipodocumento $tipodocumento
     * @return Documento
     */
    public function setTipodocumento(\gestion\memorandosBundle\Entity\Tipodocumento $tipodocumento = null)
    {
        $this->tipodocumento = $tipodocumento;
    
        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return \gestion\memorandosBundle\Entity\Tipodocumento 
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }
}