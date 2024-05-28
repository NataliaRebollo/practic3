<?php

namespace ContainerZK4e35q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F1yAY7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F_1yAY7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F_1yAY7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'modalidadRepository' => ['privates', 'App\\Repository\\ModalidadRepository', 'getModalidadRepositoryService', true],
        ], [
            'modalidadRepository' => 'App\\Repository\\ModalidadRepository',
        ]);
    }
}
