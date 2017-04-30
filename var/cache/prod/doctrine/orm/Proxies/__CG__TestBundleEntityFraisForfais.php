<?php

namespace Proxies\__CG__\TestBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FraisForfais extends \TestBundle\Entity\FraisForfais implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'TestBundle\\Entity\\FraisForfais' . "\0" . 'id', '' . "\0" . 'TestBundle\\Entity\\FraisForfais' . "\0" . 'montant', '' . "\0" . 'TestBundle\\Entity\\FraisForfais' . "\0" . 'LigneFForFais'];
        }

        return ['__isInitialized__', '' . "\0" . 'TestBundle\\Entity\\FraisForfais' . "\0" . 'id', '' . "\0" . 'TestBundle\\Entity\\FraisForfais' . "\0" . 'montant', '' . "\0" . 'TestBundle\\Entity\\FraisForfais' . "\0" . 'LigneFForFais'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FraisForfais $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', [$montant]);

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', []);

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function addLigneForFai(\TestBundle\Entity\LigneForfais $ligneForFai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLigneForFai', [$ligneForFai]);

        return parent::addLigneForFai($ligneForFai);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLigneForFai(\TestBundle\Entity\LigneForfais $ligneForFai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLigneForFai', [$ligneForFai]);

        return parent::removeLigneForFai($ligneForFai);
    }

    /**
     * {@inheritDoc}
     */
    public function getLigneForFais()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLigneForFais', []);

        return parent::getLigneForFais();
    }

    /**
     * {@inheritDoc}
     */
    public function addLigneFForFai(\TestBundle\Entity\LigneForfais $ligneFForFai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLigneFForFai', [$ligneFForFai]);

        return parent::addLigneFForFai($ligneFForFai);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLigneFForFai(\TestBundle\Entity\LigneForfais $ligneFForFai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLigneFForFai', [$ligneFForFai]);

        return parent::removeLigneFForFai($ligneFForFai);
    }

    /**
     * {@inheritDoc}
     */
    public function getLigneFForFais()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLigneFForFais', []);

        return parent::getLigneFForFais();
    }

}