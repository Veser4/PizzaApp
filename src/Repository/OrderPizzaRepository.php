<?php

namespace App\Repository;

use App\Entity\OrderPizza;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class OrderPizzaRepository
{
    private EntityRepository $repository;
    public function __construct(private EntityManagerInterface $entityManager) {
        $this->repository = $entityManager->getRepository(OrderPizza::class);
    }

    public function findByOrderId(int $id) : ?array
    {
        return $this->repository->findBy(['orderId' => $id]);
    }

    public function store(OrderPizza $orderPizza) : int
    {
        $this->entityManager->persist($orderPizza);
        $this->entityManager->flush();
        return $orderPizza->getId();
    }

    public function findAll() : array
    {
        return $this->repository->findAll();
    }

}