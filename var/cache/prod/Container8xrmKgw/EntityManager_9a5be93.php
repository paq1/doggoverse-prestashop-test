<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderefd92 = null;
    private $initializercd394 = null;
    private static $publicPropertiesff89b = [
        
    ];
    public function getConnection()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getConnection', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getMetadataFactory', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getExpressionBuilder', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'beginTransaction', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getCache', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getCache();
    }
    public function transactional($func)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'transactional', array('func' => $func), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'wrapInTransaction', array('func' => $func), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'commit', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->commit();
    }
    public function rollback()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'rollback', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getClassMetadata', array('className' => $className), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'createQuery', array('dql' => $dql), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'createNamedQuery', array('name' => $name), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'createQueryBuilder', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'flush', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'clear', array('entityName' => $entityName), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->clear($entityName);
    }
    public function close()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'close', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->close();
    }
    public function persist($entity)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'persist', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'remove', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'refresh', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'detach', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'merge', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'contains', array('entity' => $entity), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getEventManager', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getConfiguration', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'isOpen', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getUnitOfWork', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getProxyFactory', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'initializeObject', array('obj' => $obj), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getFilters', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'isFiltersStateClean', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'hasFilters', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercd394 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderefd92) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderefd92 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderefd92->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__get', ['name' => $name], $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        if (isset(self::$publicPropertiesff89b[$name])) {
            return $this->valueHolderefd92->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefd92;
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
        $targetObject = $this->valueHolderefd92;
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
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefd92;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderefd92;
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
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__isset', array('name' => $name), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefd92;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderefd92;
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
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__unset', array('name' => $name), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderefd92;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderefd92;
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
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__clone', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        $this->valueHolderefd92 = clone $this->valueHolderefd92;
    }
    public function __sleep()
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__sleep', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return array('valueHolderefd92');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd394 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd394;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'initializeProxy', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderefd92;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderefd92;
    }
}
