<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.resolved_type_factory' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactory.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';

return $this->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
