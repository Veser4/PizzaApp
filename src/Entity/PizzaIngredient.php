<?php

namespace App\Entity;

class PizzaIngredient 
{
    public function __construct(
        private int $id,
        private int $pizza_id,
        private Pizza $pizza,
        private int $ingredient_id,
        private Ingredient $ingredient,
        private int $count_of_ingredient,
    )
    {
    }

    //Getters

    //getPizzaId
    public function getId() : int 
    {
        return $this->id;
    }

    //getPizzaId
    public function getPizzaId() : int 
    {
        return $this->pizza_id;
    }

    //getPizzaId
    public function getPizza() : Pizza 
    {
        return $this->pizza;
    }

    //getIngredientId
    public function getIngredient() : Ingredient 
    {
        return $this->ingredient;
    }

    //getCountOfIngredient
    public function getCountOfIngredient() : int 
    {
        return $this->count_of_ingredient;
    }

}