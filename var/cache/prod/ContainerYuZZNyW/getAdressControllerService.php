<?php

namespace ContainerYuZZNyW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdressControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdressController' shared autowired service.
     *
     * @return \App\Controller\AdressController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdressController'] = $instance = new \App\Controller\AdressController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AdressController', $container));

        return $instance;
    }
}
