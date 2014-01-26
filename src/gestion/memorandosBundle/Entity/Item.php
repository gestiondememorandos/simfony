<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="idItem", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditem;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="hlnt", type="string", length=255, nullable=false)
     */
    private $hlnt;

    /**
     * @var \Contenido
     *
     * @ORM\ManyToOne(targetEntity="Contenido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contenido", referencedColumnName="idContenido")
     * })
     */
    private $contenido;

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
     * Get iditem
     *
     * @return string 
     */
    public function getIditem()
    {
        return $this->iditem;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Item
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    
        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set hlnt
     *
     * @param string $hlnt
     * @return Item
     */
    public function setHlnt($hlnt)
    {
        $this->hlnt = $hlnt;
    
        return $this;
    }

    /**
     * Get hlnt
     *
     * @return string 
     */
    public function getHlnt()
    {
        return $this->hlnt;
    }

    /**
     * Set contenido
     *
     * @param \gestion\memorandosBundle\Entity\Contenido $contenido
     * @return Item
     */
    public function setContenido(\gestion\memorandosBundle\Entity\Contenido $contenido = null)
    {
        $this->contenido = $contenido;
    
        return $this;
    }

    /**
     * Get contenido
     *
     * @return \gestion\memorandosBundle\Entity\Contenido 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set documento
     *
     * @param \gestion\memorandosBundle\Entity\Documento $documento
     * @return Item
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