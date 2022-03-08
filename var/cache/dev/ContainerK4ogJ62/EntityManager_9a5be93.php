<?php

namespace ContainerK4ogJ62;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc29cc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6a079 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4a3d8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getConnection', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getMetadataFactory', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getExpressionBuilder', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'beginTransaction', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getCache', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'transactional', array('func' => $func), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'commit', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->commit();
    }

    public function rollback()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'rollback', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getClassMetadata', array('className' => $className), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'createQuery', array('dql' => $dql), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'createNamedQuery', array('name' => $name), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'createQueryBuilder', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'flush', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'clear', array('entityName' => $entityName), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->clear($entityName);
    }

    public function close()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'close', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->close();
    }

    public function persist($entity)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'persist', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'remove', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'refresh', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'detach', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'merge', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'contains', array('entity' => $entity), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getEventManager', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getConfiguration', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'isOpen', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getUnitOfWork', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getProxyFactory', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'initializeObject', array('obj' => $obj), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'getFilters', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'isFiltersStateClean', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'hasFilters', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return $this->valueHolderc29cc->hasFilters();
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

        $instance->initializer6a079 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc29cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc29cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc29cc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, '__get', ['name' => $name], $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        if (isset(self::$publicProperties4a3d8[$name])) {
            return $this->valueHolderc29cc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc29cc;

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

        $targetObject = $this->valueHolderc29cc;
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
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc29cc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc29cc;
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
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, '__isset', array('name' => $name), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc29cc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc29cc;
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
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, '__unset', array('name' => $name), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc29cc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc29cc;
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
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, '__clone', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        $this->valueHolderc29cc = clone $this->valueHolderc29cc;
    }

    public function __sleep()
    {
        $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, '__sleep', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;

        return array('valueHolderc29cc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6a079 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6a079;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6a079 && ($this->initializer6a079->__invoke($valueHolderc29cc, $this, 'initializeProxy', array(), $this->initializer6a079) || 1) && $this->valueHolderc29cc = $valueHolderc29cc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc29cc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc29cc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
