<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'qv8c_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Validate\\StockAvailableValidator'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Validate\\StockAvailableValidator'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopGroupRepository'] ?? $this->load('getShopGroupRepositoryService.php')));
