<?php

namespace ContainerPw5nEye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserController' shared autowired service.
     *
     * @return \App\Controller\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UserController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ImageServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ImageService.php';

        $container->services['App\\Controller\\UserController'] = $instance = new \App\Controller\UserController(($container->privates['App\\Service\\UserService'] ?? $container->load('getUserServiceService')), ($container->privates['App\\Service\\ImageService'] ?? ($container->privates['App\\Service\\ImageService'] = new \App\Service\ImageService())), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\UserController', $container));

        return $instance;
    }
}
