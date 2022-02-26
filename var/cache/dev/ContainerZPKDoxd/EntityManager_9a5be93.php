<?php

namespace ContainerZPKDoxd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5834d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1fb62 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6cc3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getConnection', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getMetadataFactory', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getExpressionBuilder', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'beginTransaction', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getCache', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'transactional', array('func' => $func), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'commit', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->commit();
    }

    public function rollback()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'rollback', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getClassMetadata', array('className' => $className), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'createQuery', array('dql' => $dql), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'createNamedQuery', array('name' => $name), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'createQueryBuilder', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'flush', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'clear', array('entityName' => $entityName), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->clear($entityName);
    }

    public function close()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'close', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->close();
    }

    public function persist($entity)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'persist', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'remove', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'refresh', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'detach', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'merge', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'contains', array('entity' => $entity), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getEventManager', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getConfiguration', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'isOpen', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getUnitOfWork', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getProxyFactory', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'initializeObject', array('obj' => $obj), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'getFilters', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'isFiltersStateClean', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'hasFilters', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return $this->valueHolder5834d->hasFilters();
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

        $instance->initializer1fb62 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5834d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5834d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5834d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, '__get', ['name' => $name], $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        if (isset(self::$publicPropertiesd6cc3[$name])) {
            return $this->valueHolder5834d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5834d;

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

        $targetObject = $this->valueHolder5834d;
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
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5834d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5834d;
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
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, '__isset', array('name' => $name), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5834d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5834d;
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
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, '__unset', array('name' => $name), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5834d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5834d;
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
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, '__clone', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        $this->valueHolder5834d = clone $this->valueHolder5834d;
    }

    public function __sleep()
    {
        $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, '__sleep', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;

        return array('valueHolder5834d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1fb62 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1fb62;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1fb62 && ($this->initializer1fb62->__invoke($valueHolder5834d, $this, 'initializeProxy', array(), $this->initializer1fb62) || 1) && $this->valueHolder5834d = $valueHolder5834d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5834d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5834d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
