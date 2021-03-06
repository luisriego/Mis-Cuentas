<?php

namespace Proxies\__CG__\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Asiento extends \AdminBundle\Entity\Asiento implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'id', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'nombre', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'slug', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'fecha', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'vto', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'tipo', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'fPago', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'parcelas', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'importe', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'anotacion', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'vacaciones', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'imagen', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'operacion');
        }

        return array('__isInitialized__', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'id', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'nombre', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'slug', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'fecha', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'vto', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'tipo', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'fPago', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'parcelas', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'importe', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'anotacion', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'vacaciones', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'imagen', '' . "\0" . 'AdminBundle\\Entity\\Asiento' . "\0" . 'operacion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Asiento $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setVto($vto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVto', array($vto));

        return parent::setVto($vto);
    }

    /**
     * {@inheritDoc}
     */
    public function getVto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVto', array());

        return parent::getVto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', array($tipo));

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', array());

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFPago($fPago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFPago', array($fPago));

        return parent::setFPago($fPago);
    }

    /**
     * {@inheritDoc}
     */
    public function getFPago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFPago', array());

        return parent::getFPago();
    }

    /**
     * {@inheritDoc}
     */
    public function setImporte($importe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImporte', array($importe));

        return parent::setImporte($importe);
    }

    /**
     * {@inheritDoc}
     */
    public function getImporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImporte', array());

        return parent::getImporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnotacion($anotacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnotacion', array($anotacion));

        return parent::setAnotacion($anotacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnotacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnotacion', array());

        return parent::getAnotacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVacaciones($vacaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVacaciones', array($vacaciones));

        return parent::setVacaciones($vacaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getVacaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVacaciones', array());

        return parent::getVacaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', array($imagen));

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', array());

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setParcelas($parcelas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParcelas', array($parcelas));

        return parent::setParcelas($parcelas);
    }

    /**
     * {@inheritDoc}
     */
    public function getParcelas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParcelas', array());

        return parent::getParcelas();
    }

    /**
     * {@inheritDoc}
     */
    public function setOperacion($operacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOperacion', array($operacion));

        return parent::setOperacion($operacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getOperacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOperacion', array());

        return parent::getOperacion();
    }

}
