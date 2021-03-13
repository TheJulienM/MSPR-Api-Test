<?php

namespace ContainerHRYn3I3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder60bbe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer90afa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6079a = [
        
    ];

    public function getConnection()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getConnection', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getMetadataFactory', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getExpressionBuilder', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'beginTransaction', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getCache', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'transactional', array('func' => $func), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->transactional($func);
    }

    public function commit()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'commit', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->commit();
    }

    public function rollback()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'rollback', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getClassMetadata', array('className' => $className), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'createQuery', array('dql' => $dql), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'createNamedQuery', array('name' => $name), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'createQueryBuilder', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'flush', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'clear', array('entityName' => $entityName), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->clear($entityName);
    }

    public function close()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'close', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->close();
    }

    public function persist($entity)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'persist', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'remove', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'refresh', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'detach', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'merge', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'contains', array('entity' => $entity), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getEventManager', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getConfiguration', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'isOpen', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getUnitOfWork', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getProxyFactory', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'initializeObject', array('obj' => $obj), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'getFilters', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'isFiltersStateClean', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'hasFilters', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return $this->valueHolder60bbe->hasFilters();
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

        $instance->initializer90afa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder60bbe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder60bbe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder60bbe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, '__get', ['name' => $name], $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        if (isset(self::$publicProperties6079a[$name])) {
            return $this->valueHolder60bbe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60bbe;

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

        $targetObject = $this->valueHolder60bbe;
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
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60bbe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60bbe;
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
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, '__isset', array('name' => $name), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60bbe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder60bbe;
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
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, '__unset', array('name' => $name), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60bbe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder60bbe;
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
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, '__clone', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        $this->valueHolder60bbe = clone $this->valueHolder60bbe;
    }

    public function __sleep()
    {
        $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, '__sleep', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;

        return array('valueHolder60bbe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer90afa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer90afa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer90afa && ($this->initializer90afa->__invoke($valueHolder60bbe, $this, 'initializeProxy', array(), $this->initializer90afa) || 1) && $this->valueHolder60bbe = $valueHolder60bbe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder60bbe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder60bbe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
