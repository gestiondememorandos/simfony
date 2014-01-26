<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunicacion
 *
 * @ORM\Table(name="comunicacion")
 * @ORM\Entity
 */
class Comunicacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=true)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="contenidoCom", type="text", nullable=true)
     */
    private $contenidocom;

    /**
     * @var string
     *
     * @ORM\Column(name="leido", type="string", length=2, nullable=false)
     */
    private $leido;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="unidadOrganizacional", type="string", length=255, nullable=true)
     */
    private $unidadorganizacional;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatariosCom", type="string", length=500, nullable=true)
     */
    private $destinatarioscom;

    /**
     * @var \Contacto
     *
     * @ORM\ManyToOne(targetEntity="Contacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="remitente", referencedColumnName="idContacto")
     * })
     */
    private $remitente;

    /**
     * @var \Documento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idComunicacion", referencedColumnName="idDocumento")
     * })
     */
    private $idcomunicacion;

    /**
     * @var \Estadocomunicacion
     *
     * @ORM\ManyToOne(targetEntity="Estadocomunicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="idEstadoComunicacion")
     * })
     */
    private $estado;

    /**
     * @var \Fecha
     *
     * @ORM\ManyToOne(targetEntity="Fecha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fecha", referencedColumnName="idFecha")
     * })
     */
    private $fecha;



    /**
     * Set asunto
     *
     * @param string $asunto
     * @return Comunicacion
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    
        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set contenidocom
     *
     * @param string $contenidocom
     * @return Comunicacion
     */
    public function setContenidocom($contenidocom)
    {
        $this->contenidocom = $contenidocom;
    
        return $this;
    }

    /**
     * Get contenidocom
     *
     * @return string 
     */
    public function getContenidocom()
    {
        return $this->contenidocom;
    }

    /**
     * Set leido
     *
     * @param string $leido
     * @return Comunicacion
     */
    public function setLeido($leido)
    {
        $this->leido = $leido;
    
        return $this;
    }

    /**
     * Get leido
     *
     * @return string 
     */
    public function getLeido()
    {
        return $this->leido;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Comunicacion
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
     * Set unidadorganizacional
     *
     * @param string $unidadorganizacional
     * @return Comunicacion
     */
    public function setUnidadorganizacional($unidadorganizacional)
    {
        $this->unidadorganizacional = $unidadorganizacional;
    
        return $this;
    }

    /**
     * Get unidadorganizacional
     *
     * @return string 
     */
    public function getUnidadorganizacional()
    {
        return $this->unidadorganizacional;
    }

    /**
     * Set destinatarioscom
     *
     * @param string $destinatarioscom
     * @return Comunicacion
     */
    public function setDestinatarioscom($destinatarioscom)
    {
        $this->destinatarioscom = $destinatarioscom;
    
        return $this;
    }

    /**
     * Get destinatarioscom
     *
     * @return string 
     */
    public function getDestinatarioscom()
    {
        return $this->destinatarioscom;
    }

    /**
     * Set remitente
     *
     * @param \gestion\memorandosBundle\Entity\Contacto $remitente
     * @return Comunicacion
     */
    public function setRemitente(\gestion\memorandosBundle\Entity\Contacto $remitente = null)
    {
        $this->remitente = $remitente;
    
        return $this;
    }

    /**
     * Get remitente
     *
     * @return \gestion\memorandosBundle\Entity\Contacto 
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set idcomunicacion
     *
     * @param \gestion\memorandosBundle\Entity\Documento $idcomunicacion
     * @return Comunicacion
     */
    public function setIdcomunicacion(\gestion\memorandosBundle\Entity\Documento $idcomunicacion)
    {
        $this->idcomunicacion = $idcomunicacion;
    
        return $this;
    }

    /**
     * Get idcomunicacion
     *
     * @return \gestion\memorandosBundle\Entity\Documento 
     */
    public function getIdcomunicacion()
    {
        return $this->idcomunicacion;
    }

    /**
     * Set estado
     *
     * @param \gestion\memorandosBundle\Entity\Estadocomunicacion $estado
     * @return Comunicacion
     */
    public function setEstado(\gestion\memorandosBundle\Entity\Estadocomunicacion $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \gestion\memorandosBundle\Entity\Estadocomunicacion 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fecha
     *
     * @param \gestion\memorandosBundle\Entity\Fecha $fecha
     * @return Comunicacion
     */
    public function setFecha(\gestion\memorandosBundle\Entity\Fecha $fecha = null)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \gestion\memorandosBundle\Entity\Fecha 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}