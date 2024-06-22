<?php

namespace App\Entity;

class OrderPizza
{
    public function __construct(
        private ?int $id,
        private int $orderId,
        private ?Order $order,
        private int $pizzaId,
        private ?Pizza $pizza,
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

    // //getPizzaId
    public function getPizzaId() : int
    {
        return $this->pizzaId;
    }

    //getPizza
    public function getPizza() : Pizza
    {
        return $this->pizza;
    }

    //getPizzaCount
    public function getPizzaCount() : int
    {
        return $this->pizzaCount;
    }

    //Setters
    //setOrderId
    public function setOrderId(int $id)
    {
        $this->orderId = $id;
    }

    // //setPizzaId
    public function setPizzaId(int $id)
    {
        $this->pizzaId = $id;
    }

    //setPizzaCount
    public function setPizzaCount(int $count)
    {
        $this->pizzaCount = $count;
    }
}