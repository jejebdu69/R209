<?php

namespace ContainerThO7Lfk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__CXuBISService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..cXuBIS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..cXuBIS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'veille' => ['privates', '.errored..service_locator..cXuBIS.App\\Entity\\Veille', NULL, 'Cannot autowire service ".service_locator..cXuBIS": it needs an instance of "App\\Entity\\Veille" but this type has been excluded in "config/services.yaml".'],
        ], [
            'veille' => 'App\\Entity\\Veille',
        ]);
    }
}
