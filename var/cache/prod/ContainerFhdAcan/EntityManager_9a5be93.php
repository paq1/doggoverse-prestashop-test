<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere6952 = null;
    private $initializer4c2f2 = null;
    private static $publicPropertiesb8273 = [
        
    ];
    public function getConnection()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getConnection', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getMetadataFactory', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getExpressionBuilder', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'beginTransaction', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getCache', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'transactional', array('func' => $func), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'commit', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->commit();
    }
    public function rollback()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'rollback', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'createQuery', array('dql' => $dql), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'createQueryBuilder', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'flush', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'clear', array('entityName' => $entityName), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->clear($entityName);
    }
    public function close()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'close', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->close();
    }
    public function persist($entity)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'persist', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'remove', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'refresh', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'detach', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'merge', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'contains', array('entity' => $entity), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getEventManager', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getConfiguration', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'isOpen', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getUnitOfWork', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getProxyFactory', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'getFilters', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'isFiltersStateClean', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'hasFilters', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return $this->valueHoldere6952->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4c2f2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere6952) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere6952 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere6952->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, '__get', ['name' => $name], $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        if (isset(self::$publicPropertiesb8273[$name])) {
            return $this->valueHoldere6952->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6952;
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
        $targetObject = $this->valueHoldere6952;
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
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6952;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere6952;
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
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, '__isset', array('name' => $name), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6952;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere6952;
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
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, '__unset', array('name' => $name), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6952;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere6952;
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
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, '__clone', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        $this->valueHoldere6952 = clone $this->valueHoldere6952;
    }
    public function __sleep()
    {
        $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, '__sleep', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
        return array('valueHoldere6952');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c2f2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c2f2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4c2f2 && ($this->initializer4c2f2->__invoke($valueHoldere6952, $this, 'initializeProxy', array(), $this->initializer4c2f2) || 1) && $this->valueHoldere6952 = $valueHoldere6952;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere6952;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere6952;
    }
}
