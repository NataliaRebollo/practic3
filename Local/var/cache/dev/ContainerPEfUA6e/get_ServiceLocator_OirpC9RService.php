<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OirpC9RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oirpC9R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oirpC9R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'institucionRepository' => ['privates', 'App\\Repository\\InstitucionRepository', 'getInstitucionRepositoryService', true],
        ], [
            'institucionRepository' => 'App\\Repository\\InstitucionRepository',
        ]);
    }
}
