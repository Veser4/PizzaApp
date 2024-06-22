<?php

namespace App\Service;

interface OrderServiceInterface
{
    public function saveOrder($userId, $pizzas, $price, $address);
}