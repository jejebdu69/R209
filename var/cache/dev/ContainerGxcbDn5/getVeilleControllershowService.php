<?php

namespace ContainerGxcbDn5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeilleControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Xf3czL0.App\Controller\VeilleController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Xf3czL0.App\\Controller\\VeilleController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'veille' => ['privates', '.errored..service_locator.Xf3czL0.App\\Entity\\Veille', NULL, 'Cannot autowire service ".service_locator.Xf3czL0": it needs an instance of "App\\Entity\\Veille" but this type has been excluded in "config/services.yaml".'],
        ], [
            'veille' => 'App\\Entity\\Veille',
        ]))->withContext('App\\Controller\\VeilleController::show()', $container);
    }
}
