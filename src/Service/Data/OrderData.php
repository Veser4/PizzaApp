<?php

namespace App\Service\Data;

use App\Entity\Order;
use App\Entity\PizzaIngredient;

class OrderData
{
    public function __construct(
        private ?int $id,
        private int $orderId,
        private ?Order $order,
        private int $pizzaId,
        private ?PizzaIngredient $pizzaIngredient,
        private int $pizzaCount,
    )
    {
    }
    
    //Getters
    //getId
    public function getId() : int
    {
        return $this->id;
    }

    //getOrderId
    public function getOrderId() : int 
    {
        return $this->orderId;
    }

    //getOrder
    public function getOrder() : Order
    {
        return $this->order;
    }

    //getPizzaId
    public function getPizzaId() : int
    {
        return $this->pizzaId;
    }

    //getPizza
    public function getPizza() : PizzaIngredient
    {
        return $this->pizzaIngredient;
    }

    //getPizzaCount
    public function getPizzaCount() : int
    {
        return $this->pizzaCount;
    }
}