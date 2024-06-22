<?php

namespace App\Repository;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class OrderRepository
{
    private EntityRepository $repository;
    public function __construct(private EntityManagerInterface $entityManager) {
        $this->repository = $entityManager->getRepository(Order::class);
    }

    public function findOrderById(int $id) : ?Order
    {
        return $this->repository->findOneBy(['id' => $id]);
    }

    public function store(Order $order) : int
    {
        $this->entityManager->persist($order);
        $this->entityManager->flush();
        return $order->getId();
    }

    public function delete(Order $order) 
    {
        $this->entityManager->remove($order);
        $this->entityManager->flush();
    }

    public function findAllOrders() : array
    {
        return $this->repository->findAll();
    }
    
}