<?php

namespace ContainerThO7Lfk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4jAglVvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4jAglVv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4jAglVv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'competence' => ['privates', '.errored..service_locator.4jAglVv.App\\Entity\\Competence', NULL, 'Cannot autowire service ".service_locator.4jAglVv": it needs an instance of "App\\Entity\\Competence" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'competence' => 'App\\Entity\\Competence',
            'entityManager' => '?',
        ]);
    }
}
