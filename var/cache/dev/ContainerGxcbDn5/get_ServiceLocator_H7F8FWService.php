<?php

namespace ContainerGxcbDn5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H7F8FWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H7F8_fW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H7F8_fW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'veille' => ['privates', '.errored..service_locator.H7F8_fW.App\\Entity\\Veille', NULL, 'Cannot autowire service ".service_locator.H7F8_fW": it needs an instance of "App\\Entity\\Veille" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'veille' => 'App\\Entity\\Veille',
        ]);
    }
}
