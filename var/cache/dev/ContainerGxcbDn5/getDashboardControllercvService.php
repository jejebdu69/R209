<?php

namespace ContainerGxcbDn5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllercvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0yuWX_B.App\Controller\DashboardController::cv()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0yuWX_B.App\\Controller\\DashboardController::cv()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formationR' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
        ], [
            'formationR' => 'App\\Repository\\FormationRepository',
        ]))->withContext('App\\Controller\\DashboardController::cv()', $container);
    }
}
