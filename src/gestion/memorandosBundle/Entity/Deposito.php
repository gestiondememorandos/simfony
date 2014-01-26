<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deposito
 *
 * @ORM\Table(name="deposito")
 * @ORM\Entity
 */
class Deposito
{
    /**
     * @var string
     *
     * @ORM\Column(name="idDeposito", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddeposito;

    /**
     * @var \Deposito
     *
     * @ORM\ManyToOne(targetEntity="Deposito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deposito", referencedColumnName="idDeposito")
     * })
     */
    private $deposito;

    /**
     * @var \Unidadorganizacional
     *
     * @ORM\ManyToOne(targetEntity="Unidadorganizacional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidadOrganizacional", referencedColumnName="idUnidadOrganizacional")
     * })
     */
    private $unidadorganizacional;



    /**
     * Get iddeposito
     *
     * @return string 
     */
    public function getIddeposito()
    {
        return $this->iddeposito;
    }

    /**
     * Set deposito
     *
     * @param \gestion\memorandosBundle\Entity\Deposito $deposito
     * @return Deposito
     */
    public function setDeposito(\gestion\memorandosBundle\Entity\Deposito $deposito = null)
    {
        $this->deposito = $deposito;
    
        return $this;
    }

    /**
     * Get deposito
     *
     * @return \gestion\memorandosBundle\Entity\Deposito 
     */
    public function getDeposito()
    {
        return $this->deposito;
    }

    /**
     * Set unidadorganizacional
     *
     * @param \gestion\memorandosBundle\Entity\Unidadorganizacional $unidadorganizacional
     * @return Deposito
     */
    public function setUnidadorganizacional(\gestion\memorandosBundle\Entity\Unidadorganizacional $unidadorganizacional = null)
    {
        $this->unidadorganizacional = $unidadorganizacional;
    
        return $this;
    }

    /**
     * Get unidadorganizacional
     *
     * @return \gestion\memorandosBundle\Entity\Unidadorganizacional 
     */
    public function getUnidadorganizacional()
    {
        return $this->unidadorganizacional;
    }
}