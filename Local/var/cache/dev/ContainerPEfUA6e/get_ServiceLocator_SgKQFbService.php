<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SgKQFbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sgKQ_fb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sgKQ_fb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'examenAlumnoRepository' => ['privates', 'App\\Repository\\ExamenAlumnoRepository', 'getExamenAlumnoRepositoryService', true],
        ], [
            'examenAlumnoRepository' => 'App\\Repository\\ExamenAlumnoRepository',
        ]);
    }
}
