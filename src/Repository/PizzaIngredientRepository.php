<?php

namespace App\Repository;

use App\Entity\PizzaIngredient;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class PizzaIngredientRepository
{

    private EntityRepository $repository;
    public function __construct(private EntityManagerInterface $entityManager) {
        $this->repository = $entityManager->getRepository(PizzaIngredient::class);
    }

    public function findPizzaIngredients(int $id) : array 
    {
        return $this->repository->findBy(['pizza_id' => (int) $id]);
    }

    public function getAllPizzasIngredients() : array 
    {
        return $this->repository->findAll();
    }

}