<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WrECdGNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WrECdGN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WrECdGN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'asignatura' => ['privates', '.errored..service_locator.WrECdGN.App\\Entity\\Asignatura', NULL, 'Cannot autowire service ".service_locator.WrECdGN": it references class "App\\Entity\\Asignatura" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'asignatura' => 'App\\Entity\\Asignatura',
            'entityManager' => '?',
        ]);
    }
}
