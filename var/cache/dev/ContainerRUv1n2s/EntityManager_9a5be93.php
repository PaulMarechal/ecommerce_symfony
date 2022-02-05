<?php

namespace ContainerRUv1n2s;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder669b5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere7093 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese9dc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getConnection', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getMetadataFactory', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getExpressionBuilder', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'beginTransaction', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getCache', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getCache();
    }

    public function transactional($func)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'transactional', array('func' => $func), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'wrapInTransaction', array('func' => $func), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'commit', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->commit();
    }

    public function rollback()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'rollback', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getClassMetadata', array('className' => $className), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'createQuery', array('dql' => $dql), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'createNamedQuery', array('name' => $name), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'createQueryBuilder', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'flush', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'clear', array('entityName' => $entityName), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->clear($entityName);
    }

    public function close()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'close', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->close();
    }

    public function persist($entity)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'persist', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'remove', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'refresh', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'detach', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'merge', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getRepository', array('entityName' => $entityName), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'contains', array('entity' => $entity), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getEventManager', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getConfiguration', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'isOpen', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getUnitOfWork', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getProxyFactory', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'initializeObject', array('obj' => $obj), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'getFilters', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'isFiltersStateClean', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'hasFilters', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return $this->valueHolder669b5->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere7093 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder669b5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder669b5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder669b5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, '__get', ['name' => $name], $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        if (isset(self::$publicPropertiese9dc7[$name])) {
            return $this->valueHolder669b5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder669b5;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder669b5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder669b5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder669b5;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, '__isset', array('name' => $name), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder669b5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder669b5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, '__unset', array('name' => $name), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder669b5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder669b5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, '__clone', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        $this->valueHolder669b5 = clone $this->valueHolder669b5;
    }

    public function __sleep()
    {
        $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, '__sleep', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;

        return array('valueHolder669b5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere7093 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere7093;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere7093 && ($this->initializere7093->__invoke($valueHolder669b5, $this, 'initializeProxy', array(), $this->initializere7093) || 1) && $this->valueHolder669b5 = $valueHolder669b5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder669b5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder669b5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
