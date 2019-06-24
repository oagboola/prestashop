<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

$this->services['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'};
    yield 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'};
    yield 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'};
    yield 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'};
    yield 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'};
    yield 'prestashop.static_cache.adapter' => ${($_ = isset($this->services['prestashop.static_cache.adapter']) ? $this->services['prestashop.static_cache.adapter'] : $this->getPrestashop_StaticCache_AdapterService()) && false ?: '_'};
}, 6));

$instance->setName('cache:pool:prune');

return $instance;
