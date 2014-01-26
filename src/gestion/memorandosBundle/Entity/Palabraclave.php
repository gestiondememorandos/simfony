<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Palabraclave
 *
 * @ORM\Table(name="palabraclave")
 * @ORM\Entity
 */
class Palabraclave
{
    /**
     * @var string
     *
     * @ORM\Column(name="idPalabraClave", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpalabraclave;

    /**
     * @var string
     *
     * @ORM\Column(name="palabra", type="string", length=255, nullable=false)
     */
    private $palabra;



    /**
     * Get idpalabraclave
     *
     * @return string 
     */
    public function getIdpalabraclave()
    {
        return $this->idpalabraclave;
    }

    /**
     * Set palabra
     *
     * @param string $palabra
     * @return Palabraclave
     */
    public function setPalabra($palabra)
    {
        $this->palabra = $palabra;
    
        return $this;
    }

    /**
     * Get palabra
     *
     * @return string 
     */
    public function getPalabra()
    {
        return $this->palabra;
    }
}