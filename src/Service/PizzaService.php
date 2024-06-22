<?php

namespace App\Service;

use App\Entity\Ingredient;
use App\Service\Data\PizzaData;
use App\Repository\PizzaRepository;
use App\Repository\PizzaIngredientRepository;
use App\Repository\IngredientRepository;
use App\Service\PizzaServiceInterface;

class PizzaService implements PizzaServiceInterface
{
    public function __construct(
        private PizzaRepository $pizzaRepository,
        private PizzaIngredientRepository $pizzaIngredientRepository,
        private IngredientRepository $ingredientRepository,
        ) 
    {
    }

    public function getPizza(int $id): ?PizzaData
    {
        $pizza = $this->pizzaRepository->findById($id);
        $tmpIngredients = $this->pizzaIngredientRepository->findPizzaIngredients($id);
        $ingredients = [];
        foreach ($tmpIngredients as $ingredient) 
        {
            $ingredient += $this->ingredientRepository->findById($ingredient['ingredient_id']);
        }
        return new PizzaData(
            $id,
            $pizza->getName(),
            $pizza->getAvatarPath(),
            $pizza->getDescription(),
            $pizza->getPreparationTime(),
            $pizza->getPrice(),
            $pizza->getWeight(),
            $ingredients,
        );
    }

    public function listPizzas(): array
    {
        $rawPizzas = $this->pizzaIngredientRepository->getAllPizzasIngredients();
        $pizzas = [];
        foreach ($rawPizzas as $id => $pizza) 
        {
            if (!key_exists($pizza->getPizza()->getId(), $pizzas))
            {
                $newPizza = new PizzaData(
                    $pizza->getPizza()->getId(),
                    $pizza->getPizza()->getName(),
                    $pizza->getPizza()->getAvatarPath(),
                    $pizza->getPizza()->getDescription(),
                    $pizza->getPizza()->getPreparationTime(),
                    $pizza->getPizza()->getWeight(),
                    $pizza->getPizza()->getPrice(),
                    [$pizza->getIngredient()->getName(),],
                );
                $pizzas[$pizza->getPizza()->getId()] = $newPizza;
            }
            else
            {
                $pizzas[$pizza->getPizza()->getId()]->addIngredient($pizza->getIngredient()->getName());
            }
        }
        return $pizzas;
    }
}
