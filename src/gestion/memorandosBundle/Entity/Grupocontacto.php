<?php

namespace gestion\memorandosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupocontacto
 *
 * @ORM\Table(name="grupocontacto")
 * @ORM\Entity
 */
class Grupocontacto
{
    /**
     * @var string
     *
     * @ORM\Column(name="idGrupoContacto", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgrupocontacto;

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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo", referencedColumnName="idGrupo")
     * })
     */
    private $grupo;



    /**
     * Get idgrupocontacto
     *
     * @return string 
     */
    public function getIdgrupocontacto()
    {
        return $this->idgrupocontacto;
    }

    /**
     * Set contacto
     *
     * @param \gestion\memorandosBundle\Entity\Contacto $contacto
     * @return Grupocontacto
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
     * Set grupo
     *
     * @param \gestion\memorandosBundle\Entity\Grupo $grupo
     * @return Grupocontacto
     */
    public function setGrupo(\gestion\memorandosBundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;
    
        return $this;
    }

    /**
     * Get grupo
     *
     * @return \gestion\memorandosBundle\Entity\Grupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}