<?php 

namespace App\Repository;
use App\Entity\Pizza;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class PizzaRepository
{
    private EntityRepository $repository;
    public function __construct(private EntityManagerInterface $entityManager) {
        $this->repository = $entityManager->getRepository(Pizza::class);
    }
    
    public function findById(int $id) : ?Pizza {
        return $this->repository->findOneBy(['id' => (int) $id]);
    }

    public function getPizzas() : array {
        return $this->repository->findAll();
    }
}