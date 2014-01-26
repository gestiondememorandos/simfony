<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quien
 *
 * @ORM\Table(name="quien")
 * @ORM\Entity
 */
class Quien
{
    /**
     * @var string
     *
     * @ORM\Column(name="idQuien", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquien;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=true)
     */
    private $tipo;



    /**
     * Get idquien
     *
     * @return string 
     */
    public function getIdquien()
    {
        return $this->idquien;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Quien
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
}