<?php

namespace ContainerPw5nEye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStorefrontControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\StorefrontController' shared autowired service.
     *
     * @return \App\Controller\StorefrontController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/StorefrontController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/PizzaServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/PizzaService.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PizzaRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PizzaIngredientRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/IngredientRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Service/OrderServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/OrderService.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/OrderRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/OrderPizzaIngredientRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ImageServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ImageService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        $b = new \App\Repository\PizzaRepository($a);

        $container->services['App\\Controller\\StorefrontController'] = $instance = new \App\Controller\StorefrontController(($container->privates['App\\Service\\UserService'] ?? $container->load('getUserServiceService')), ($container->privates['App\\Service\\ImageService'] ?? ($container->privates['App\\Service\\ImageService'] = new \App\Service\ImageService())), new \App\Service\PizzaService($b, new \App\Repository\PizzaIngredientRepository($a), new \App\Repository\IngredientRepository($a)), new \App\Service\OrderService(new \App\Repository\OrderRepository($a), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), $b, new \App\Repository\OrderPizzaIngredientRepository($a)), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\StorefrontController', $container));

        return $instance;
    }
}