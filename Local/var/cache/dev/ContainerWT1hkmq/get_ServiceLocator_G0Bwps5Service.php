<?php

namespace ContainerWT1hkmq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G0Bwps5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g0Bwps5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g0Bwps5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'correlativa' => ['privates', '.errored..service_locator.g0Bwps5.App\\Entity\\Correlativa', NULL, 'Cannot autowire service ".service_locator.g0Bwps5": it references class "App\\Entity\\Correlativa" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'correlativa' => 'App\\Entity\\Correlativa',
            'entityManager' => '?',
        ]);
    }
}
