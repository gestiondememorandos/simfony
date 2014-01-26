<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Copia
 *
 * @ORM\Table(name="copia")
 * @ORM\Entity
 */
class Copia
{
    /**
     * @var string
     *
     * @ORM\Column(name="idCopia", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcopia;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, nullable=false)
     */
    private $formato;

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
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto", referencedColumnName="idProducto")
     * })
     */
    private $producto;



    /**
     * Get idcopia
     *
     * @return string 
     */
    public function getIdcopia()
    {
        return $this->idcopia;
    }

    /**
     * Set formato
     *
     * @param string $formato
     * @return Copia
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
     * Set deposito
     *
     * @param \gestion\memorandosBundle\Entity\Deposito $deposito
     * @return Copia
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
     * Set producto
     *
     * @param \gestion\memorandosBundle\Entity\Producto $producto
     * @return Copia
     */
    public function setProducto(\gestion\memorandosBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return \gestion\memorandosBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}