<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactoquien
 *
 * @ORM\Table(name="contactoquien")
 * @ORM\Entity
 */
class Contactoquien
{
    /**
     * @var string
     *
     * @ORM\Column(name="idContactoQuien", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontactoquien;

    /**
     * @var \Contacto
     *
     * @ORM\ManyToOne(targetEntity="Contacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contacto", referencedColumnName="idContacto")
     * })
     */
    private $contacto;

    /**
     * @var \Quien
     *
     * @ORM\ManyToOne(targetEntity="Quien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quien", referencedColumnName="idQuien")
     * })
     */
    private $quien;



    /**
     * Get idcontactoquien
     *
     * @return string 
     */
    public function getIdcontactoquien()
    {
        return $this->idcontactoquien;
    }

    /**
     * Set contacto
     *
     * @param \gestion\memorandosBundle\Entity\Contacto $contacto
     * @return Contactoquien
     */
    public function setContacto(\gestion\memorandosBundle\Entity\Contacto $contacto = null)
    {
        $this->contacto = $contacto;
    
        return $this;
    }

    /**
     * Get contacto
     *
     * @return \gestion\memorandosBundle\Entity\Contacto 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set quien
     *
     * @param \gestion\memorandosBundle\Entity\Quien $quien
     * @return Contactoquien
     */
    public function setQuien(\gestion\memorandosBundle\Entity\Quien $quien = null)
    {
        $this->quien = $quien;
    
        return $this;
    }

    /**
     * Get quien
     *
     * @return \gestion\memorandosBundle\Entity\Quien 
     */
    public function getQuien()
    {
        return $this->quien;
    }
}