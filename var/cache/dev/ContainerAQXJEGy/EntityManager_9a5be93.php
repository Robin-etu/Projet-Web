<?php

namespace ContainerAQXJEGy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd02e9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc0ab5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese0888 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getConnection', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getMetadataFactory', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getExpressionBuilder', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'beginTransaction', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getCache', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'transactional', array('func' => $func), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->transactional($func);
    }

    public function commit()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'commit', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->commit();
    }

    public function rollback()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'rollback', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getClassMetadata', array('className' => $className), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'createQuery', array('dql' => $dql), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'createNamedQuery', array('name' => $name), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'createQueryBuilder', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'flush', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'clear', array('entityName' => $entityName), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->clear($entityName);
    }

    public function close()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'close', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->close();
    }

    public function persist($entity)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'persist', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'remove', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'refresh', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'detach', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'merge', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'contains', array('entity' => $entity), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getEventManager', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getConfiguration', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'isOpen', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getUnitOfWork', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getProxyFactory', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'initializeObject', array('obj' => $obj), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'getFilters', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'isFiltersStateClean', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'hasFilters', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return $this->valueHolderd02e9->hasFilters();
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

        $instance->initializerc0ab5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd02e9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd02e9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd02e9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, '__get', ['name' => $name], $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        if (isset(self::$publicPropertiese0888[$name])) {
            return $this->valueHolderd02e9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd02e9;

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

        $targetObject = $this->valueHolderd02e9;
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
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd02e9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd02e9;
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
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, '__isset', array('name' => $name), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd02e9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd02e9;
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
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, '__unset', array('name' => $name), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd02e9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd02e9;
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
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, '__clone', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        $this->valueHolderd02e9 = clone $this->valueHolderd02e9;
    }

    public function __sleep()
    {
        $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, '__sleep', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;

        return array('valueHolderd02e9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc0ab5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc0ab5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc0ab5 && ($this->initializerc0ab5->__invoke($valueHolderd02e9, $this, 'initializeProxy', array(), $this->initializerc0ab5) || 1) && $this->valueHolderd02e9 = $valueHolderd02e9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd02e9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd02e9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
