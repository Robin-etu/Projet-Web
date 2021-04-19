<?php

namespace ContainerAumUu96;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdecd8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera1812 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37877 = [
        
    ];

    public function getConnection()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getConnection', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getMetadataFactory', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getExpressionBuilder', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'beginTransaction', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getCache', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getCache();
    }

    public function transactional($func)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'transactional', array('func' => $func), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->transactional($func);
    }

    public function commit()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'commit', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->commit();
    }

    public function rollback()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'rollback', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getClassMetadata', array('className' => $className), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'createQuery', array('dql' => $dql), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'createNamedQuery', array('name' => $name), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'createQueryBuilder', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'flush', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'clear', array('entityName' => $entityName), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->clear($entityName);
    }

    public function close()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'close', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->close();
    }

    public function persist($entity)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'persist', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'remove', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'refresh', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'detach', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'merge', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getRepository', array('entityName' => $entityName), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'contains', array('entity' => $entity), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getEventManager', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getConfiguration', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'isOpen', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getUnitOfWork', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getProxyFactory', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'initializeObject', array('obj' => $obj), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'getFilters', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'isFiltersStateClean', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'hasFilters', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return $this->valueHolderdecd8->hasFilters();
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

        $instance->initializera1812 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdecd8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdecd8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdecd8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, '__get', ['name' => $name], $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        if (isset(self::$publicProperties37877[$name])) {
            return $this->valueHolderdecd8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdecd8;

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

        $targetObject = $this->valueHolderdecd8;
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
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdecd8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdecd8;
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
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, '__isset', array('name' => $name), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdecd8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdecd8;
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
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, '__unset', array('name' => $name), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdecd8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdecd8;
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
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, '__clone', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        $this->valueHolderdecd8 = clone $this->valueHolderdecd8;
    }

    public function __sleep()
    {
        $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, '__sleep', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;

        return array('valueHolderdecd8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera1812 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera1812;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera1812 && ($this->initializera1812->__invoke($valueHolderdecd8, $this, 'initializeProxy', array(), $this->initializera1812) || 1) && $this->valueHolderdecd8 = $valueHolderdecd8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdecd8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdecd8;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
