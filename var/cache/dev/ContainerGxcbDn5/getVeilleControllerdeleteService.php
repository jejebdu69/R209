<?php

namespace ContainerGxcbDn5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeilleControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H7F8_fW.App\Controller\VeilleController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.H7F8_fW'] ?? $container->load('get_ServiceLocator_H7F8FWService'));

        if (isset($container->privates['.service_locator.H7F8_fW.App\\Controller\\VeilleController::delete()'])) {
            return $container->privates['.service_locator.H7F8_fW.App\\Controller\\VeilleController::delete()'];
        }

        return $container->privates['.service_locator.H7F8_fW.App\\Controller\\VeilleController::delete()'] = $a->withContext('App\\Controller\\VeilleController::delete()', $container);
    }
}
