<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderefd92 = null;
    private $initializercd394 = null;
    private static $publicPropertiesff89b = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getList', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getInstalledModules', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getMustBeConfiguredModules', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getUpgradableModules', array(), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getModule', array('moduleName' => $moduleName), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'setActionUrls', array('collection' => $collection), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        return $this->valueHolderefd92->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializercd394 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderefd92) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderefd92 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderefd92->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializercd394 && ($this->initializercd394->__invoke($valueHolderefd92, $this, '__get', ['name' => $name], $this->initializercd394) || 1) && $this->valueHolderefd92 = $valueHolderefd92;
        if (isset(self::$publicPropertiesff89b[$name])) {
            return $this->valueHolderefd92->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
