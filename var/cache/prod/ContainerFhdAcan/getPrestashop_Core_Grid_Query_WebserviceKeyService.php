<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.query.webservice_key' shared service.

return $this->services['prestashop.core.grid.query.webservice_key'] = new \PrestaShop\PrestaShop\Core\Grid\Query\WebserviceKeyQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'qv8c_', ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] ?? ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextListShopID(), ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] ?? ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicator())));
