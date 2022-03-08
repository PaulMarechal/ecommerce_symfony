<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Adress extends \App\Entity\Adress implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'idUser', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'zip', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'adress2', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'products'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'idUser', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'zip', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'adress2', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Adress' . "\0" . 'products'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Adress $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUser(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser(string $idUser): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$idUser]);

        return parent::setIdUser($idUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getState(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState(string $state): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getZip(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', []);

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setZip(int $zip): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', [$zip]);

        return parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress(string $adress): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$adress]);

        return parent::setAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress2', []);

        return parent::getAdress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress2(?string $adress2): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress2', [$adress2]);

        return parent::setAdress2($adress2);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTime $date): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', []);

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducts(string $products): \App\Entity\Adress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducts', [$products]);

        return parent::setProducts($products);
    }

}