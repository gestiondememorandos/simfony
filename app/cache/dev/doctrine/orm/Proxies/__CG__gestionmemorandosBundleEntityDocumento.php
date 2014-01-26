<?php

namespace Proxies\__CG__\gestion\memorandosBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Documento extends \gestion\memorandosBundle\Entity\Documento implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIddocumento()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["iddocumento"];
        }
        $this->__load();
        return parent::getIddocumento();
    }

    public function setTitulo($titulo)
    {
        $this->__load();
        return parent::setTitulo($titulo);
    }

    public function getTitulo()
    {
        $this->__load();
        return parent::getTitulo();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setEdicion($edicion)
    {
        $this->__load();
        return parent::setEdicion($edicion);
    }

    public function getEdicion()
    {
        $this->__load();
        return parent::getEdicion();
    }

    public function setVigencia($vigencia)
    {
        $this->__load();
        return parent::setVigencia($vigencia);
    }

    public function getVigencia()
    {
        $this->__load();
        return parent::getVigencia();
    }

    public function setEstado($estado)
    {
        $this->__load();
        return parent::setEstado($estado);
    }

    public function getEstado()
    {
        $this->__load();
        return parent::getEstado();
    }

    public function setFechacreacion($fechacreacion)
    {
        $this->__load();
        return parent::setFechacreacion($fechacreacion);
    }

    public function getFechacreacion()
    {
        $this->__load();
        return parent::getFechacreacion();
    }

    public function setAnexo($anexo)
    {
        $this->__load();
        return parent::setAnexo($anexo);
    }

    public function getAnexo()
    {
        $this->__load();
        return parent::getAnexo();
    }

    public function setTipo($tipo)
    {
        $this->__load();
        return parent::setTipo($tipo);
    }

    public function getTipo()
    {
        $this->__load();
        return parent::getTipo();
    }

    public function setComentarios($comentarios)
    {
        $this->__load();
        return parent::setComentarios($comentarios);
    }

    public function getComentarios()
    {
        $this->__load();
        return parent::getComentarios();
    }

    public function setDocumentobase(\gestion\memorandosBundle\Entity\Documento $documentobase = NULL)
    {
        $this->__load();
        return parent::setDocumentobase($documentobase);
    }

    public function getDocumentobase()
    {
        $this->__load();
        return parent::getDocumentobase();
    }

    public function setOrientacion(\gestion\memorandosBundle\Entity\Orientacion $orientacion = NULL)
    {
        $this->__load();
        return parent::setOrientacion($orientacion);
    }

    public function getOrientacion()
    {
        $this->__load();
        return parent::getOrientacion();
    }

    public function setTabladeretenciondocumental(\gestion\memorandosBundle\Entity\Tablaretenciondocumental $tabladeretenciondocumental = NULL)
    {
        $this->__load();
        return parent::setTabladeretenciondocumental($tabladeretenciondocumental);
    }

    public function getTabladeretenciondocumental()
    {
        $this->__load();
        return parent::getTabladeretenciondocumental();
    }

    public function setTipodocumento(\gestion\memorandosBundle\Entity\Tipodocumento $tipodocumento = NULL)
    {
        $this->__load();
        return parent::setTipodocumento($tipodocumento);
    }

    public function getTipodocumento()
    {
        $this->__load();
        return parent::getTipodocumento();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'iddocumento', 'titulo', 'descripcion', 'edicion', 'vigencia', 'estado', 'fechacreacion', 'anexo', 'tipo', 'comentarios', 'documentobase', 'orientacion', 'tabladeretenciondocumental', 'tipodocumento');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}