<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plantilla
 *
 * @ORM\Table(name="plantilla")
 * @ORM\Entity
 */
class Plantilla
{
    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, nullable=false)
     */
    private $formato;

    /**
     * @var \Documento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPlantilla", referencedColumnName="idDocumento")
     * })
     */
    private $idplantilla;



    /**
     * Set formato
     *
     * @param string $formato
     * @return Plantilla
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
     * Set idplantilla
     *
     * @param \gestion\memorandosBundle\Entity\Documento $idplantilla
     * @return Plantilla
     */
    public function setIdplantilla(\gestion\memorandosBundle\Entity\Documento $idplantilla)
    {
        $this->idplantilla = $idplantilla;
    
        return $this;
    }

    /**
     * Get idplantilla
     *
     * @return \gestion\memorandosBundle\Entity\Documento 
     */
    public function getIdplantilla()
    {
        return $this->idplantilla;
    }
}