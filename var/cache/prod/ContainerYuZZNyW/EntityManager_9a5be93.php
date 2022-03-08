<?php

namespace ContainerYuZZNyW;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder80295 = null;
    private $initializer69eaa = null;
    private static $publicProperties1dca2 = [
        
    ];
    public function getConnection()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getConnection', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getMetadataFactory', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getExpressionBuilder', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'beginTransaction', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getCache', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getCache();
    }
    public function transactional($func)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'transactional', array('func' => $func), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'wrapInTransaction', array('func' => $func), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'commit', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->commit();
    }
    public function rollback()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'rollback', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getClassMetadata', array('className' => $className), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'createQuery', array('dql' => $dql), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'createNamedQuery', array('name' => $name), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'createQueryBuilder', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'flush', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'clear', array('entityName' => $entityName), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->clear($entityName);
    }
    public function close()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'close', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->close();
    }
    public function persist($entity)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'persist', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'remove', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'refresh', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'detach', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'merge', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getRepository', array('entityName' => $entityName), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'contains', array('entity' => $entity), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getEventManager', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getConfiguration', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'isOpen', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getUnitOfWork', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getProxyFactory', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'initializeObject', array('obj' => $obj), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'getFilters', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'isFiltersStateClean', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'hasFilters', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return $this->valueHolder80295->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer69eaa = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder80295) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder80295 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder80295->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, '__get', ['name' => $name], $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        if (isset(self::$publicProperties1dca2[$name])) {
            return $this->valueHolder80295->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80295;
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
        $targetObject = $this->valueHolder80295;
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
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80295;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder80295;
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
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, '__isset', array('name' => $name), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80295;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder80295;
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
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, '__unset', array('name' => $name), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80295;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder80295;
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
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, '__clone', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        $this->valueHolder80295 = clone $this->valueHolder80295;
    }
    public function __sleep()
    {
        $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, '__sleep', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
        return array('valueHolder80295');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69eaa = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69eaa;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69eaa && ($this->initializer69eaa->__invoke($valueHolder80295, $this, 'initializeProxy', array(), $this->initializer69eaa) || 1) && $this->valueHolder80295 = $valueHolder80295;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder80295;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder80295;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
