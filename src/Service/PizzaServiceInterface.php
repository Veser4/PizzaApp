<?php

namespace App\Service;

use App\Service\Data\PizzaData;

interface PizzaServiceInterface
{
    public function getPizza(int $id): ?PizzaData;

    public function listPizzas(): array;
}