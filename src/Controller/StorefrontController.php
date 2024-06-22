<?php

namespace App\Controller;

use App\Service\ImageServiceInterface;
use App\Service\UserServiceInterface;
use App\Service\PizzaServiceInterface;
use App\Service\OrderServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Exception;

class StorefrontController extends AbstractController
{
    public function __construct( 
        private UserServiceInterface $userService, 
        private ImageServiceInterface $imageService,
        private PizzaServiceInterface $pizzaService,
        private OrderServiceInterface $orderService,
        private RequestStack $requestStack,
    ) 
    {
    }

    public function mainPage(Request $request): Response
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');
        if (!isset($userId)) {
            return $this->render('registrate_page.html.twig', ['title' => 'Registraton Form']);
        }
        $user = $this->userService->getUser($userId);
        $pizzas = $this->pizzaService->listPizzas();
        return $this->render('main_page.html.twig', ['title' => 'AppPizza', 'user' => $user, 'pizzas' => $pizzas]);
    }

    public function createOrder(Request $request) : Response
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');
        $data = json_decode($request->getContent(), true);
        $this->orderService->saveOrder($userId, $data['orders'], $data['totalPrice'], 'ADDRESS');
        return new Response('ok', 200, []);;
    }
}