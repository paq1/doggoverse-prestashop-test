<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.supplier.command_handler.delete_supplier_handler' shared service.

return $this->services['prestashop.adapter.supplier.command_handler.delete_supplier_handler'] = new \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\DeleteSupplierHandler(($this->services['prestashop.adapter.supplier.supplier_order_validator'] ?? ($this->services['prestashop.adapter.supplier.supplier_order_validator'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierOrderValidator())), ($this->services['prestashop.adapter.supplier.provider.supplier_address'] ?? ($this->services['prestashop.adapter.supplier.provider.supplier_address'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierAddressProvider())), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductSupplierUpdater'] ?? $this->load('getProductSupplierUpdaterService.php')), 'qv8c_');
