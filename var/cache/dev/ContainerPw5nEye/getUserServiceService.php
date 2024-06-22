<?php

namespace ContainerPw5nEye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\UserService' shared autowired service.
     *
     * @return \App\Service\UserService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/UserServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/UserService.php';

        return $container->privates['App\\Service\\UserService'] = new \App\Service\UserService(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));
    }
}
