<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UuLSni7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UuLSni7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UuLSni7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'persona' => ['privates', '.errored..service_locator.UuLSni7.App\\Entity\\Persona', NULL, 'Cannot autowire service ".service_locator.UuLSni7": it references class "App\\Entity\\Persona" but no such service exists.'],
        ], [
            'persona' => 'App\\Entity\\Persona',
        ]);
    }
}
