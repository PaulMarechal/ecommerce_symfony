<?php

namespace ContainerDN0LPhn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8d2bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81d0a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9421c = [
        
    ];

    public function getConnection()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getConnection', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getMetadataFactory', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getExpressionBuilder', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'beginTransaction', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getCache', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'transactional', array('func' => $func), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'commit', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->commit();
    }

    public function rollback()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'rollback', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getClassMetadata', array('className' => $className), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'createQuery', array('dql' => $dql), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'createNamedQuery', array('name' => $name), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'createQueryBuilder', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'flush', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'clear', array('entityName' => $entityName), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->clear($entityName);
    }

    public function close()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'close', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->close();
    }

    public function persist($entity)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'persist', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'remove', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'refresh', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'detach', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'merge', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'contains', array('entity' => $entity), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getEventManager', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getConfiguration', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'isOpen', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getUnitOfWork', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getProxyFactory', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'initializeObject', array('obj' => $obj), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'getFilters', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'isFiltersStateClean', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'hasFilters', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return $this->valueHolder8d2bc->hasFilters();
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

        $instance->initializer81d0a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8d2bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8d2bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8d2bc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, '__get', ['name' => $name], $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        if (isset(self::$publicProperties9421c[$name])) {
            return $this->valueHolder8d2bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d2bc;

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

        $targetObject = $this->valueHolder8d2bc;
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
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d2bc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8d2bc;
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
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, '__isset', array('name' => $name), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d2bc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8d2bc;
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
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, '__unset', array('name' => $name), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d2bc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8d2bc;
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
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, '__clone', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        $this->valueHolder8d2bc = clone $this->valueHolder8d2bc;
    }

    public function __sleep()
    {
        $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, '__sleep', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;

        return array('valueHolder8d2bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81d0a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81d0a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81d0a && ($this->initializer81d0a->__invoke($valueHolder8d2bc, $this, 'initializeProxy', array(), $this->initializer81d0a) || 1) && $this->valueHolder8d2bc = $valueHolder8d2bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d2bc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d2bc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
