<?php

namespace App\Service;

use App\Entity\OrderPizza;
use App\Service\Data\OrderData;
use App\Entity\Order;
use App\Repository\UserRepository;
use App\Repository\PizzaRepository;
use App\Repository\OrderPizzaRepository;
use App\Repository\OrderRepository;


class OrderService implements OrderServiceInterface
{
    public function __construct(
        private OrderRepository $orderRepository,
        private UserRepository $userRepository,
        private PizzaRepository $pizzaRepository,
        private OrderPizzaRepository $orderPizzaRepository,
    )
    {
    }

    public function saveOrder($userId, $pizzas, $price, $address)
    {
        $user = $this->userRepository->findById($userId);
        $order = new Order(
            null,
            $userId,
            $user,
            date('Y-m-d H:i:s'),
            $price,
            $address,
        );
        $orderId = $this->orderRepository->store($order);
        foreach ($pizzas as $pizzaId => $value)
        {
            $pizza = $this->pizzaRepository->findById($pizzaId);
            $orderPizza = new OrderPizza(
                null,
                $orderId,
                $order,
                $pizzaId,
                $pizza,
                $value,
            );
            $this->orderPizzaRepository->store($orderPizza);
        }
    }
}